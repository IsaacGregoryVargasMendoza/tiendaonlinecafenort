const dniClienteCarrito = document.getElementById("dniClienteCarrito");

async function buscarClienteCarrito(){
    var numeroDocumento = document.getElementById('dniClienteCarrito').value
    console.log(numeroDocumento)
    if (numeroDocumento.length==11){
        const response = await fetch("https://dniruc.apisperu.com/api/v1/ruc/" +numeroDocumento+ "?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImlzYWFjY2Fwcmljb3JuaW8xMkBnbWFpbC5jb20ifQ.wg_CLoG-c6fKOQnstptacoM7AM8zlhXMy_wuBZXht7A")
        var respuesta = await response.json()
        document.getElementById('nombreClienteCarrito').value = respuesta['razonSocial']
        document.getElementById('direccionClienteCarrito').value = respuesta['direccion']
    }
    if (numeroDocumento.length==8){
        const response = await fetch("https://dniruc.apisperu.com/api/v1/dni/"+numeroDocumento+"?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImlzYWFjY2Fwcmljb3JuaW8xMkBnbWFpbC5jb20ifQ.wg_CLoG-c6fKOQnstptacoM7AM8zlhXMy_wuBZXht7A")
        var respuesta = await response.json()
        document.getElementById('nombreClienteCarrito').value = respuesta['nombres'] + " " + respuesta['apellidoPaterno'] + " " + respuesta['apellidoMaterno']
        document.getElementById('direccionClienteCarrito').value = ""
    }
}

async function eliminarProducto(id) {
    document.getElementById("tbody").innerHTML = "<tr></tr>"
    indice = 0
    for (var i = 0; i < carrito.length; i++) {
        if (id == carrito[i]["id"]) {
            indice = i
        }
    }
    carrito.splice(indice,1)
    verCarrito()
}

function verCarrito() {
    for (var i = 0; i < carrito.length; i++) {
        document.getElementById("tbody").innerHTML += "<tr>  " +
            "<td class='text-uppercase'>" + carrito[i]["codigoProducto"] + "</td>" +
            "<td class='text-uppercase'>" + carrito[i]["nombreProducto"] + "</td>" +
            "<td class='text-center text-uppercase'>" + carrito[i]["unidadMedida"] + "</td>" +
            "<td class='text-end'>S/." + Number(carrito[i]["precioProducto"]).toFixed(2) + "</td>" +
            "<td class='text-end'>" + Number(carrito[i]["cantidad"]).toFixed(2) + "</td>" +
            "<td class='text-end'>S/." + Number(carrito[i]["cantidad"] * carrito[i]["precioProducto"]).toFixed(2) + "</td>" +
            "<td class='text-center'> " +
            "   <button type='submit' onclick='eliminarProducto(" + Number(carrito[i]["id"]) + ")'><i class='fa fa-solid fa-trash'></i></button> " +
            "</td>" +
            "</tr>"
        total = total + Number(carrito[i]["cantidad"] * carrito[i]["precioProducto"])
    }
    document.getElementById("subtotal").innerHTML = (total * 0.82).toFixed(2)
    document.getElementById("igv").innerHTML = (total * .18).toFixed(2)
    document.getElementById("total").innerHTML = total.toFixed(2)
    total = 0
    document.getElementById("productos2").value = JSON.stringify(carrito)
    // console.log(document.getElementById("productos2").value)
}

dniClienteCarrito.addEventListener('keypress', function (e){
    if (!soloNumeros(e) || dniClienteCarrito.value.length>=11){
        e.preventDefault();
    }
})

function soloNumeros(e) {
    var key = e.charCode;
    return key >= 48 && key <= 57;
}