function cargartabla(){
    var datos = document.getElementById("cabeza");
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "listar.php", true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/json");
    ajax.send();

    editorial();
}

function insertar() {
    var ajax = new XMLHttpRequest();
    var formulario = document.getElementById("form");
    var parametros = new FormData(formulario);

    ajax.open("POST", "insertar.php", true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            cargartabla();
        }
    }
    cargartabla();
    ajax.send(parametros);

    cargartabla();
}

function editar(id){
    var datos = document.getElementById("formulario");
    datos.innerHTML = "";
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
    var ajax = new XMLHttpRequest();
    var formulario = document.getElementById("form-persona");
    var parametros = new FormData(formulario);

    ajax.open("POST", "editar.php", true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            cargartabla();
        }
    }
    cargartabla();
    ajax.send(parametros);
}

function confirmar(id){
    var datos = document.getElementById("formulario");
    datos.innerHTML = "";
    div = document.createElement("div");
    buton_si = document.createElement("button");
    buton_no = document.createElement("button");
    h3 = document.createElement("h3");

    h3.innerHTML = "borrar este elemnto ?";

    buton_si.setAttribute("onclick", "eliminar(" + id + ")");
    
    buton_si.innerHTML = "Si";

    buton_no.innerHTML = "NO";
    buton_no.setAttribute("onclick", "cancelar()");

    div.appendChild(h3);
    div.appendChild(buton_si);
    div.appendChild(buton_no);
    datos.appendChild(div);

}

function eliminar(id){
    var ajax = new XMLHttpRequest();

    ajax.open("GET", "eliminar.php?id="+id, true);

    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 ){
            cargartabla();
        }
    }
    cargartabla();
    ajax.setRequestHeader("Content-Type","text/html;","charset=UTF-8");
    ajax.send();

    cancelar();
}

function mostrar(id){
    var datos = document.getElementById("formulario");
    datos.innerHTML = "";
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "mostrar.php?id="+id, true);

    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type","text/html;","charset=UTF-8");
    ajax.send();
}

function cancelar(){
    var datos = document.getElementById("formulario");
    datos.innerHTML = "";

    var ajax = new XMLHttpRequest();

    ajax.open("GET", "form.html", true);

    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 ){
           datos.innerHTML = ajax.responseText;
           cargartabla();
        }
    }
    cargartabla();
    ajax.send();

}

function editorial() {
    const departamento = document.getElementById('editorial');
    const ajax = new XMLHttpRequest();
    ajax.open("GET", "editorial.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                try {
                    const departamentos = JSON.parse(ajax.responseText);
                    console.log(departamentos);

                    for (let i = 0; i < departamentos.length; i++) {
                        const elemento = document.createElement("option");
                        elemento.value = departamentos[i].id;
                        elemento.innerHTML = departamentos[i].editorial;
                        if (i === 0) {
                            elemento.selected = true;
                        }
                        departamento.appendChild(elemento);
                    }
                } catch (e) {
                    console.error("Error parsing JSON: ", e);
                    console.error("Response: ", ajax.responseText);
                }
            } else {
                console.error("Error en la solicitud AJAX: " + ajax.status);
            }
        }
    };
    ajax.send();
}