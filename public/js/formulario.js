function mostrarImagen() {
    let imagenProducto = document.getElementById('imagenproducto');
    let imagen = document.getElementById('imagen');

    if (!imagenProducto.value == "") {
        imagen.setAttribute('src', URL.createObjectURL(imagenProducto.files[0]));
    } else {
        imagen.setAttribute('src', "/imagenes/no_imagen.png");
    }
}

const codigo = document.getElementById("codigo");
const nombre = document.getElementById("nombre");
const stock = document.getElementById("stock");
const precio = document.getElementById("precio");
const unidadmedida = document.getElementById("unidadmedida");

async function buscarCliente(){
    var numeroDocumento = document.getElementById('dniCliente').value
    console.log(numeroDocumento)
    if (numeroDocumento.length==11){
        const response = await fetch("https://dniruc.apisperu.com/api/v1/ruc/" +numeroDocumento+ "?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImlzYWFjY2Fwcmljb3JuaW8xMkBnbWFpbC5jb20ifQ.wg_CLoG-c6fKOQnstptacoM7AM8zlhXMy_wuBZXht7A")
        var respuesta = await response.json()
        document.getElementById('nombreCliente').value = respuesta['razonSocial']
        document.getElementById('direccionCliente').value = respuesta['direccion']
    }
    if (numeroDocumento.length==8){
        const response = await fetch("https://dniruc.apisperu.com/api/v1/dni/"+numeroDocumento+"?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImlzYWFjY2Fwcmljb3JuaW8xMkBnbWFpbC5jb20ifQ.wg_CLoG-c6fKOQnstptacoM7AM8zlhXMy_wuBZXht7A")
        var respuesta = await response.json()
        document.getElementById('nombreCliente').value = respuesta['nombres'] + " " + respuesta['apellidoPaterno'] + " " + respuesta['apellidoMaterno']
        document.getElementById('direccionCliente').value = ""
    }
}

async function guardarVenta(){
    var jsonEnviar = await JSON.parse(JSON.stringify(carrito))
    var jsonEnviarFinal = {
        "identificadorCliente": "",
        "denominacionCliente": "",
        "direccionCliente": "",
        "fechaVenta": "",
        "lista": []
    }
    jsonEnviarFinal.identificadorCliente = document.getElementById('dniCliente').value
    jsonEnviarFinal.denominacionCliente = document.getElementById('nombreCliente').value
    jsonEnviarFinal.direccionCliente = document.getElementById('direccionCliente').value
    jsonEnviarFinal.fechaVenta = document.getElementById('fechaVenta').value
    jsonEnviarFinal.lista = jsonEnviar
    try {
        await fetch("http://localhost:8000/api/venta",{method:'POST',body: JSON.stringify({jsonEnviarFinal}), headers: { 'Content-Type': 'application/json' }})
    } catch (error) {
    }
}

function prueba(){
    alert("prueba realizada");
}