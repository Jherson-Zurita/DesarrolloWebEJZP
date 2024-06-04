function mostrar() {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open("get", "personas.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            var personas = JSON.parse(ajax.responseText);

            contenido.innerHTML = "";

            let elementotabla = document.createElement('table');
            contenido.appendChild(elementotabla);

            let encabezado = document.createElement('tr');
            encabezado.style.backgroundColor = 'blue';
            encabezado.style.color = 'white';
            elementotabla.appendChild(encabezado);

            let thFotografia = document.createElement('th');
            thFotografia.innerText = "Fotografía";
            encabezado.appendChild(thFotografia);

            let thId = document.createElement('th');
            thId.innerText = "ID";
            encabezado.appendChild(thId);

            let thNombres = document.createElement('th');
            thNombres.innerText = "Nombres";
            encabezado.appendChild(thNombres);

            let thApellidos = document.createElement('th');
            thApellidos.innerText = "Apellidos";
            encabezado.appendChild(thApellidos);

            let thEdad = document.createElement('th');
            thEdad.innerText = "Edad";
            encabezado.appendChild(thEdad);

            let thSexo = document.createElement('th');
            thSexo.innerText = "Sexo";
            encabezado.appendChild(thSexo);

            let thOcupacion = document.createElement('th');
            thOcupacion.innerText = "Ocupación";
            encabezado.appendChild(thOcupacion);

            for (let i = 0; i < personas.length; i++) {
                let fila = document.createElement('tr');
                fila.style.backgroundColor = i % 2 == 0 ? 'white' : 'gray';

                let img = document.createElement('img');
                img.width = 50;
                img.src = 'images/'+personas[i].fotografias;

                let tdFotografia = document.createElement('td');
                tdFotografia.innerText = personas[i]['fotografias'];
                fila.appendChild(img);

                let tdId = document.createElement('td');
                tdId.innerText = personas[i]['id'];
                fila.appendChild(tdId);

                let tdNombres = document.createElement('td');
                tdNombres.innerText = personas[i]['nombres'];
                fila.appendChild(tdNombres);

                let tdApellidos = document.createElement('td');
                tdApellidos.innerText = personas[i]['apellidos'];
                fila.appendChild(tdApellidos);

                let tdEdad = document.createElement('td');
                tdEdad.innerText = personas[i]['edad'];
                fila.appendChild(tdEdad);

                let tdSexo = document.createElement('td');
                tdSexo.innerText = personas[i]['sexo'];
                fila.appendChild(tdSexo);

                let tdOcupacion = document.createElement('td');
                tdOcupacion.innerText = personas[i]['ocupacion'];
                fila.appendChild(tdOcupacion);

                elementotabla.appendChild(fila);
            }
        }
    };
    ajax.send();
}
