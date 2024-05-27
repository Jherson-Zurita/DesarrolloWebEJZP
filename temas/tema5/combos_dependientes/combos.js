function departamentos() {
    const departamento = document.getElementById('departamento');
    console.log(departamento);
    const ajax = new XMLHttpRequest(); // crea el objeto ajax
    ajax.open("GET", "departamentos.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                try {
                    const departamentos = JSON.parse(ajax.responseText);
                    console.log(departamentos);

                    for (let i = 0; i < departamentos.length; i++) {
                        const elemento = document.createElement("option");
                        elemento.value = departamentos[i].id;
                        elemento.innerHTML = departamentos[i].departamento;
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

function obtenerprovincias() {
    const provincia = document.getElementById('provincia');
    provincia.innerHTML = '';
    const iddepartamento = document.getElementById('departamento').value;
    const ajax = new XMLHttpRequest(); // crea el objeto ajax
    ajax.open("GET", "provincias.php?id=" + iddepartamento, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                try {
                    const provincias = JSON.parse(ajax.responseText);

                    for (let i = 0; i < provincias.length; i++) {
                        const elemento = document.createElement("option");
                        elemento.value = provincias[i].id;
                        elemento.innerHTML = provincias[i].provincia;
                        provincia.appendChild(elemento);
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
