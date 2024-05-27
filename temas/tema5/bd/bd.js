function listar(parametros){
    var datos = document.getElementById("datos");
    var ajax = new XMLHttpRequest();

    if(parametros){ 
        ajax.open("GET", "read.php?" + parametros, true);
    } else {
        ajax.open("GET", "read.php", true);
    }

    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/json");
    ajax.send();
}

function cargar(url){
    var datos = document.getElementById("datos");
    var ajax = new XMLHttpRequest();

    ajax.open("GET", url, true);

    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/json");
    ajax.send();
}

function buscar(){
    var palabra = document.getElementById("filtro").value;
    listar("filtro=" + palabra);
}

function insertar() {
    var datos = document.getElementById("datos");
    var ajax = new XMLHttpRequest();
    var formulario = document.getElementById("form-persona");
    var parametros = new FormData(formulario);

    ajax.open("POST", "insertar.php", true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            //datos.innerHTML = ajax.responseText;
            listar();
        }
    }
    
    ajax.send(parametros);
}

function editar(id){
    var datos = document.getElementById("datos");
    var ajax = new XMLHttpRequest();

    ajax.open("GET", "form_editar.php?id="+id, true);

    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type","text/html;","charset=UTF-8");
    ajax.send();
}

function editarpersona(){
    var datos = document.getElementById("datos");
    var ajax = new XMLHttpRequest();
    var formulario = document.getElementById("form-persona");
    var parametros = new FormData(formulario);

    ajax.open("POST", "editar.php", true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            datos.innerHTML = ajax.responseText;
        }
    }
    
    
    ajax.send(parametros);
}
function eliminar(id){
    var datos = document.getElementById("datos");
    var ajax = new XMLHttpRequest();

    ajax.open("GET", "eliminar.php?id="+id, true);

    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type","text/html;","charset=UTF-8");
    ajax.send();
}