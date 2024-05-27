function listar(parametros) {
    var datos = document.getElementById("datos");

    fetch("read.php?" + parametros)
        .then(response => response.text())
        .then(data => {
            datos.innerHTML = data;
        })
       
}

function cargar(url){
    var datos = document.getElementById("datos");

    fetch(url)
        .then(response => response.text())
        .then(data => {
            datos.innerHTML = data;
        })
        
}

function buscar(){
    var palabra = document.getElementById("filtro").value;
    listar("filtro=" + palabra);
}

function insertar() {
    var formulario = document.getElementById("form-persona");
    var parametros = new FormData(formulario);

    fetch("insertar.php", {
        method: "POST",
        body: parametros
    })
    .then(response => response.text())
    .then(data => listar())
}

function editar(id){
    var datos = document.getElementById("datos");

    fetch("form_editar.php?id=" + id)
        .then(response => response.text())
        .then(data => {
            datos.innerHTML = data;
        })
}

function editarpersona(){
    var datos = document.getElementById("datos");
    var formulario = document.getElementById("form-persona");
    var parametros = new FormData(formulario);

    fetch("editar.php", {
        method: "POST",
        body: parametros
    })
    .then(response => response.text())
    .then(data => {
        datos.innerHTML = data;
    })
    .then(data => listar())
}

function eliminar(id){
    var datos = document.getElementById("datos");

    fetch("eliminar.php?id=" + id)
        .then(response => response.text())
        .then(data => {
            datos.innerHTML = data;
        })
}
