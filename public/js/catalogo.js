var carrito = []
var cantidades = []
var total = 0
var estaAgregado = false
async function agregaralcarritoclick(id, cantidad, stock) {
    var cantidadTotal = 0
    for (var i = 0; i < carrito.length; i++) {
        if (id == carrito[i]["id"]) {
            estaAgregado = true
            cantidadTotal = Number(carrito[i]["cantidad"]) + Number(cantidad)
            if (estaAgregado && verificarDisponibilidad(cantidadTotal, stock)) {
                carrito[i]["cantidad"] = cantidadTotal
                document.getElementById('cantidad' + id).value = 0
            }
        }
    }

    if (!estaAgregado && verificarDisponibilidad(cantidad, stock)) {
        const response = await fetch("http://localhost:8000/api/buscarproducto/" + id)
        const json = await response.json()
        json.cantidad = Number(cantidad)
        carrito.push(json)
        document.getElementById('cantidad' + id).value = 0
    }
    estaAgregado = false
    // console.log(document.getElementById("productoscarrito"))
    // document.getElementById("productoscarrito").value = JSON.stringify(carrito)
}

function verificarDisponibilidad(cantidad, stock) {
    if (cantidad > 0 && cantidad <= stock) {
        alert("Se agrego la cantidad al carrito de compras")
        return true
    } else {
        alert("ERROR!. La cantidad ingresada debe ser mayor a 0 y menor o igual al stock actual.")
        return false
    }
}

async function filtrarPorTipoProducto(id) {
    document.getElementsByClassName("btn btn-success btn-sm")[0].className = "btn btn-outline-success btn-sm"
    document.getElementById("tipoproducto"+id).className = "btn btn-success btn-sm"
    
    var lista
    if (id==0){
        const response = await fetch("http://localhost:8000/api/sinfiltrarproductos",{method:'GET', headers: { 'Content-Type': 'application/json' }})
        lista = await response.json()
    }else {
        const response = await fetch("http://localhost:8000/api/filtrarproductos/"+id,{method:'GET', headers: { 'Content-Type': 'application/json' }})
        lista = await response.json()
    }
    document.getElementById("catalogoproducto").innerHTML = "<tr></tr>"
    llenarCatalogo(lista)
}

function llenarCatalogo(lista){
    lista.forEach(element => {
        // console.log(element)
        document.getElementById("catalogoproducto").innerHTML += `<div class="col producto" id="`+element["id"]+`">`+
            `<div class="card shadow-sm">
                <img class="img-catalogo" src="`+element["imagenProducto"]+`" alt="">`+
                `<div class="card-body">
                    <h5 class="card-title text-uppercase" style="font-size: 14px;">`+element["nombreProducto"]+`</h5><hr>`+
                    `<p class="card-text text-uppercase" style="font-size: 12px;">Precio: S/.`+Number(element["precioProducto"]).toFixed(2) +
                    `<br>Unidad de Medida: `+element["unidadMedida"]+
                    `<br>Stock: `+element["stockProducto"]+`</p>`+
                    `<input class="form-control text-end form-control-sm" id="cantidad`+element["id"]+`" type="number" value=0><br>`+
                    `<div class="d-flex justify-content-between align-item-center">
                        <div class="btn-group">`+
                            `<a href="{{route ('catalogo.show',`+element["id"]+`)}}" class="btn btn-outline-dark">ver</a>`+
                        `</div>`+
                        `<button class="btn btn-outline-success btn-sm" type="button" onclick="agregaralcarritoclick(`+element["id"]+`,`+ 
                        `document.getElementById('cantidad`+element["id"]+`').value, `+element["stockProducto"]+`)">Agregar</button>`+
                        `</div></div></div></div>`
    });
}
async function irCarrito(){
    const response = await fetch("http://localhost:8000/api/carritoCompras",{method:'POST',body: JSON.stringify({carrito}), headers: { 'Content-Type': 'application/json' }})
    document.getElementById("contenedorpadre").innerHTML = await response.text()
    verCarrito()
}