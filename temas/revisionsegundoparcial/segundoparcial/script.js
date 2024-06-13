function cargarcontenidoMenu(url){
    var submenu = document.getElementById("sub_menu");
    var ajax = new XMLHttpRequest();
    ajax.open("GET", url, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            submenu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function pregunta1(){
    document.getElementById("titulo").innerHTML = "Pregunta 1";
    cargarcontenidoMenu("datos.html");
}

function creartablas(){
    var filas = document.getElementById("fila").value;
    var columnas = document.getElementById("columna").value;

    var table=`<table style="border:1px solid black;border-collapse:collapse;">`;
    for(var i = 0;i<filas;i++){
        table+=`<tr>`;
        for(var j =0; j<columnas;j++){
            table+=`<td onclick=cambiarinput(${i},${j}) style="border:1px solid black;border-collapse:collapse; width:100px" id="c${i}${j}">&nbsp;</td>`;
        }
        table+=`</tr>`;
    }
    table+=`</table>`;

    document.getElementById("contenido").innerHTML=table;
}

function cambiarinput(x,y){
    celda=document.getElementById("c"+x+y).innerHTML=`<input type="text" id="celda" onchange="escribir(${x},${y})">`;
    celda=document.getElementById("c"+x+y).onclick=null;
}

function escribir(){
    valor = document.getElementById("celda").value;
    //document.getElementById("celda").parentNode.onclick()
    document.getElementById("celda").outerHTML=valor;
    document.getElementById("c"+x+y).onclick=cambiarinput();

}



function tabla() {
    document.getElementById("titulo").innerHTML = "Pregunta 1";
    var form = document.getElementById("sub_menu");
    form.innerHTML = "";

    var btn = document.createElement("div");
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "datos.html", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            btn.innerHTML = ajax.responseText;
            document.getElementById("sub_menu").appendChild(btn);
        }
    }
    ajax.send();
}

function tablase() {
    var fila = document.getElementById("fila").value;
    var columna = document.getElementById("columna").value;
    var contenido = document.getElementById("contenido");
    contenido.innerHTML = "";

    var tabla = document.createElement("table");
    console.log(fila);
    for (var i = 0; i < fila; i++) {
        var fila = document.createElement("tr");
        for (var j = 0; j < columna; j++) {
            var colum = document.createElement("td");
            colum.innerHTML = "a";
            fila.appendChild(colum);

        }
        tabla.appendChild(fila);
    }

    contenido.appendChild(tabla);
}

function formulario() {
    document.getElementById("titulo").innerHTML = "Pregunta 2";
    var form = document.getElementById("sub_menu");
    form.innerHTML = "";

    var btn = document.createElement("div");
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "form.html", true);
    contenido.innerHTML = "";
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            btn.innerHTML = ajax.responseText;
            document.getElementById("sub_menu").appendChild(btn);
        }
    }
    ajax.send();
}

function color() {
    var texto = document.getElementById("texto").value;
    var colorF = document.getElementById("colorF").value;
    var color = document.getElementById("color").value;
    var contenido = document.getElementById("contenido");
    contenido.style.display = "flex";
    contenido.style.flexDirection = "column";
    contenido.style.flexWrap = "wrap";
    contenido.style.alignContent = "center";


    var parafo = document.createElement("div");
    parafo.style.backgroundColor = colorF;
    parafo.style.color = color;
    parafo.style.height = "50px";
    parafo.style.width = "500px";
    parafo.innerHTML = texto;

    contenido.appendChild(parafo);
}

function cargarcontenido(url) {
    var datos = document.getElementById("sub-menu");
    fetch(url)
        .then(response => response.text())
        .then(data => {
            datos.innerHTML = data;
        })
}

function mostrarimg(imagen, titulo, autor, editorial, anio) {
    var principal = document.getElementById("contenido");
    principal.innerHTML = "";

    var div = document.createElement("div");
    div.style.display = "flex";
    div.style.flexDirection = "row";
    div.style.flexWrap = "wrap";

    var img = document.createElement("img");
    img.src = "images/" + imagen;
    div.appendChild(img);
    var text = document.createElement("span");
    text.innerHTML = "titulo:" + titulo + "<br>" +
        "Autor: " + autor + "<br>" +
        "editorial:" + editorial + "<br>" +
        "año: " + anio + "<br>";
    div.appendChild(text);
    principal.appendChild(div);

}

function cargarlistas() {
    var form = document.getElementById("sub_menu");
    form.innerHTML = "";

    var btn = document.createElement("div");
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "boton.html", true);
    contenido.innerHTML = "";
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            btn.innerHTML = ajax.responseText;
            document.getElementById("sub_menu").appendChild(btn);
        }
    }
    ajax.send();

    document.getElementById("titulo").innerHTML = "Pregunta 4";
    var datos = document.getElementById("contenido");
    datos.innerHTML = "";
    fetch("listar.php")
        .then(response => response.text())
        .then(data => {
            datos.innerHTML = data;
        })

    
}

function insertar() {
   
    var ajax = new XMLHttpRequest();
    var formulario = document.getElementById("formi");
    var parametros = new FormData(formulario);
    var datos = document.getElementById("contenido");
    datos.innerHTML = "";

    ajax.open("POST", "insertar.php", true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            datos.innerHTML = ajax.responseText;

        }
    }
    
    ajax.send(parametros);
}

function insertarformulario() {
    var contenido = document.getElementById("contenido");
    contenido.innerHTML = "";

    var btn = document.createElement("div");
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "formulario.html", true);
    contenido.innerHTML = "";
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            btn.innerHTML = ajax.responseText;
            contenido.appendChild(btn);
        }
    }
    ajax.send();

}

function meses(){
    var contenido = document.getElementById("contenido");
    contenido.innerHTML = "";

    var menu = document.getElementById("sub_menu");
    menu.innerHTML = "";

    menu.style.backgroundColor = "yellow";

    var btn = document.createElement("div");
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "meses.php", true);
    contenido.innerHTML = "";
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            btn.innerHTML = ajax.responseText;
            document.getElementById("sub_menu").appendChild(btn);
        }
    }
    ajax.send();
}

function calendario() {

    var contenido = document.getElementById("contenido");
    contenido.innerHTML = "";

    var mes = document.getElementById("mes").value;
    var anio = document.getElementById("anio").value;


    fetch(`calendario.php?mes=${mes}&anio=${anio}`)
    .then(response => response.text())
    .then(data => {
        contenido.innerHTML = data;
    })


}