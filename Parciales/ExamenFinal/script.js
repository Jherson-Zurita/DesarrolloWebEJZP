function color() {
    document.getElementById('titulos').innerHTML = "Pregunta 1";
    var select = document.getElementById('select');
    var colores = document.getElementById('color').value;
    var id = select.value
    console.log(id);
    
    var div = document.getElementById(id);
    div.style.backgroundColor = colores;
}

function contar(){
    document.getElementById('titulos').innerHTML = "Pregunta 1";
    var div = document.getElementById('contador');
    var i = parseInt(document.getElementById('contador').innerHTML);
    div.innerHTML = "";
    div.innerHTML = i + 1;
}

function pregunta2(){
    document.getElementById('titulos').innerHTML = "Pregunta 2";
    submenu = document.getElementById('sub-menu');
    submenu.innerHTML = "";
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "operaciones.html", true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            submenu.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/json");
    ajax.send();

}

function operaciones(tipo){
    var num = document.getElementById('numeros').value;
    var datos = document.getElementById('contenido');
    datos.innerHTML = "";
    var button = document.createElement('button');
    if(tipo == "sumar"){
        var div = document.createElement("div");
        for (var i = 0; i < num; i++) {
            br = document.createElement("br");
            var line = document.createElement("input");
            line.id = i;
            var span = document.createElement("span");
            span.innerHTML = "1 +"+i+"=";
            div.appendChild(span);
            div.appendChild(line);
            div.appendChild(br);
        }
        button.setAttribute("onclick", "calificar('sumar')");
        datos.appendChild(button);
        datos.appendChild(div);
    }else if(tipo == "restar"){
        var div = document.createElement("div");
        for (var i = 0; i < num; i++) {
            br = document.createElement("br");
            var line = document.createElement("input");
            line.id = i;
            var span = document.createElement("span");
            span.innerHTML = "1 - "+i+"=";
            div.appendChild(span);
            div.appendChild(line);
            div.appendChild(br);
        }
        datos.appendChild(div);

    }else if(tipo == "multi"){
        var div = document.createElement("div");
        for (var i = 0; i < num; i++) {
            br = document.createElement("br");
            var line = document.createElement("input");
            line.id = i;
            var span = document.createElement("span");
            span.innerHTML = "1 * "+i+"=";
            div.appendChild(span);
            div.appendChild(line);
            div.appendChild(br);
        }
        datos.appendChild(div);

    }else if(tipo == "div"){
        var div = document.createElement("div");
        for (var i = 0; i < num; i++) {
            br = document.createElement("br");
            var line = document.createElement("input");
            line.id = i;
            var span = document.createElement("span");
            span.innerHTML = "1 / "+i+"=";
            div.appendChild(span);
            div.appendChild(line);
            div.appendChild(br);
        }
        datos.appendChild(div);

    }

}

function calificar() {
    var num = document.getElementById('numeros').value;
    for (var i = 0; i < num; i++){
        var input = document.getElementById(i);
        console.log("imput",input.value);
        if (input.value == (1+i)){
            input.style.backgroundColor = "green";
        }else {
            input.style.backgroundColor = "red";

        }
    }
}


function pregunta4(){
    document.getElementById('titulos').innerHTML = "Pregunta 4";
    var datos = document.getElementById('contenido');
    datos.innerHTML = "";

    var ajax = new XMLHttpRequest();
    ajax.open("GET", "pregunta4.php", true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/json");
    ajax.send();
}

function alumnos(){
    var materia = document.getElementById('materia').value;
    var datos = document.getElementById('alumnos');
    console.log(materia);

    var ajax = new XMLHttpRequest();

    ajax.open("GET", "alumnos.php?materia="+materia, true);

    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function pregunta5(){
    document.getElementById('titulos').innerHTML = "Pregunta 5";
    var contenido = document.getElementById('contenido');
    contenido.innerHTML = "";
    teclado();
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "login.html", true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/json");
    ajax.send();
}

function teclado(){
    var submenu = document.getElementById('sub-menu');
    submenu.innerHTML = "";
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "keyborad.html", true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            submenu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function mensaje(input){
    var pass = document.getElementById('pass');
    var i = pass.value
    pass.value = "";
    pass.value = i + input;
}

function autenticar(){
    var contenido = document.getElementById('contenido');

    var user = document.getElementById('user');
    var pass = document.getElementById('pass');

    var u = user.value;
    var v = pass.value;

    fetch(`autenticar.php?user=${u}&pass=${v}`)
    .then(response => response.text())
    .then(data => {
        
        contenido.innerHTML = data;
    })
}

function limpiar(){
    var pass = document.getElementById('pass');
    pass.value = "";
}