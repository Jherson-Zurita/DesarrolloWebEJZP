function cargar() {
    var datos = document.getElementById("mensaje");
    var menu = document.getElementById("menu");
    var principal = document.getElementById("principal");
    principal.innerHTML = "";
    menu.innerHTML = "";
    datos.innerHTML = "";
    datos.innerHTML = "Zurita paco Elvis Jherson CU:35-5372";

    var btn = document.createElement("div");
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "botones.html", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            btn.innerHTML = ajax.responseText;
            document.getElementById("menu").appendChild(btn);
        }
    }
    ajax.send();
}

function cargarL() {
    var datos = document.getElementById("mensaje");
    var menu = document.getElementById("menu");
    var principal = document.getElementById("principal");
    principal.innerHTML = "";
    menu.innerHTML = "";
    datos.innerHTML = "";

    var btn = document.createElement("div");
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "login.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            btn.innerHTML = ajax.responseText;
            document.getElementById("principal").appendChild(btn);
        }
    }
    ajax.send();
}


function cargarcontenido(url) {
    var datos = document.getElementById("menu");
    fetch(url)
        .then(response => response.text())
        .then(data => {
            datos.innerHTML = data;
        })
}

function mostrarimg(imagen) {
    var principal = document.getElementById("principal");
    principal.innerHTML = "";
    var img = document.createElement("img");
    img.src = "images/" + imagen;
    principal.appendChild(img);
    var mensaje = document.getElementById("mensaje");
    mensaje.innerText = imagen;

}

function cargarnivel(nivel) {

    if (nivel == 1) {
        var datos = document.getElementById("mensaje");
        var datos2 = document.getElementById("mensaje2");
        var menu = document.getElementById("menu");
        var principal = document.getElementById("principal");
        principal.innerHTML = "";
        menu.innerHTML = "";
        datos.innerHTML = "";
        datos2.innerHTML = "";

        datos2.innerHTML = "Administrador nivel 1";
        var btn = document.createElement("div");
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "botones.html", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                btn.innerHTML = ajax.responseText;
                document.getElementById("menu").appendChild(btn);
            }
        }
        ajax.send();
    }else if (nivel == 2){
        var datos = document.getElementById("mensaje");
        var datos2 = document.getElementById("mensaje2");
        var menu = document.getElementById("menu");
        var principal = document.getElementById("principal");
        principal.innerHTML = "";
        menu.innerHTML = "";
        datos.innerHTML = "";
        datos2.innerHTML = "";

        datos2.innerHTML = "Usuario nivel 0";
        var btn = document.createElement("div");
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "botones.html", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                btn.innerHTML = ajax.responseText;
                document.getElementById("menu").appendChild(btn);
            }
        }
        ajax.send();
    }else if (nivel == 3){
        var datos2 = document.getElementById("mensaje2");
        datos2.innerHTML = "";

        datos2.innerHTML = "Error de contraseña o usario";
    }


}

function autentificarse() {
    var formulario = document.getElementById("form");
    var parametros = new FormData(formulario);

    fetch("aunteticar.php", {
        method: "POST",
        body: parametros
    })
        .then(response => response.text())
        .then(data => {
            if (data === "1") {
                cargarnivel(1);
            } else if (data === "0") {
                cargarnivel(2);
            } else {
                cargarnivel(3);
            }

        })
}

function cargarlistas(){
    var datos = document.getElementById("principal");
    fetch("listar.php")
        .then(response => response.text())
        .then(data => {
            datos.innerHTML = data;
        })
}

function comboList() {
    const principal = document.getElementById("principal");
    const ajax = new XMLHttpRequest();
    ajax.open("GET", "datos.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                try {
                    const libros = JSON.parse(ajax.responseText);

                    const select = document.createElement("select");
                    select.id = "librosSelect";

                    for (let i = 0; i < libros.length; i++) {
                        const elemento = document.createElement("option");
                        elemento.value = libros[i].id;
                        elemento.innerHTML = libros[i].titulo;
                        if (i === 0) {
                            elemento.selected = true;
                        }
                        select.appendChild(elemento);
                    }

                    principal.appendChild(select);
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
}function comboList() {
    const principal = document.getElementById("principal");
    const ajax = new XMLHttpRequest();
    ajax.open("GET", "datos.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                try {
                    const libros = JSON.parse(ajax.responseText);

                    const select = document.createElement("select");
                    select.id = "librosSelect";
                    select.onchange = updateImage; 

                    for (let i = 0; i < libros.length; i++) {
                        const elemento = document.createElement("option");
                        elemento.value = libros[i].id;
                        elemento.dataset.imagen = libros[i].imagen; 
                        elemento.innerHTML = libros[i].titulo;
                        if (i === 0) {
                            elemento.selected = true;
                        }
                        select.appendChild(elemento);
                    }

                    principal.appendChild(select);

                    const img = document.createElement("img");
                    img.id = "libroImagen";
                    img.style.marginLeft = "20px";
                    principal.appendChild(img);

                    updateImage();
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

function updateImage() {
    const select = document.getElementById("librosSelect");
    const selectedOption = select.options[select.selectedIndex];
    const imagen = selectedOption.dataset.imagen;

    const img = document.getElementById("libroImagen");
    img.src = "images/" + imagen;
}