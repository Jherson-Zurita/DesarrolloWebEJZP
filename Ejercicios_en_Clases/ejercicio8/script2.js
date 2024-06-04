function mostrar() {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "personas.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4 && ajax.status === 200) {
            var personas = JSON.parse(ajax.responseText);

            var html = `<table>
            <tr style="background-color:blue;color:white">|
            <td>fotografia</td>
            <td>id</td>
            <td>nombres</td>
            <td>apellidos</td>
            <td>edad</td>
            <td>sexo</td>
            <td>ocupacion</td>
            </tr>`;

            for (let i = 0; i < personas.length; i++) {
                if (i % 2 === 0) {
                    html += `<tr style="background-color:white;">`;
                } else {
                    html += `<tr style="background-color:gray;">`;
                }

                html += `<td><img style="width:50px;" src="images/${personas[i].fotografias}"></td>
                <td>${personas[i].id}</td>
                <td>${personas[i].nombres}</td>
                <td>${personas[i].apellidos}</td>
                <td>${personas[i].edad}</td>
                <td>${personas[i].sexo}</td>
                <td>${personas[i].ocupacion}</td>
                </tr>`;
            }
            html += `</table>`;
            contenido.innerHTML = html;
        }
    };
    ajax.send();
}
