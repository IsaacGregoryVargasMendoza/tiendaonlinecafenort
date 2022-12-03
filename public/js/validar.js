const celularCliente = document.getElementById("celularCliente");
//const dniCliente = document.getElementById("dniCliente");
const nombreCliente = document.getElementById("nombreCliente");
/*
dniCliente.addEventListener('keypress', function (e){
if (!soloNumeros(e)){
        e.preventDefault();
    }
})*/

celularCliente.addEventListener('keypress', function (e){
    if (!soloNumeros(e)){
        e.preventDefault();
    }
})

function soloNumeros(e) {
    var key = e.charCode;
    return key >= 48 && key <= 57;
}

var checkbox = document.getElementById('hambur');
checkbox.addEventListener("change", function (){
    var checked = checkbox.checked;
    if(checked){
        document.getElementById('sidebar-container').style.display = "block";
    }else{
        document.getElementById('sidebar-container').style.display = "none";
    }
}, false);