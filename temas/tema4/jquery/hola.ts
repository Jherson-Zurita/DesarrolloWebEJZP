

class Usuario {
    nombre: string;
    email: string;
    edad: number;

    constructor(nombre: string, email: string, edad: number) {
        this.nombre = nombre;
        this.email = email;
        this.edad = edad;
    }

    saludar() {
        console.log(`¡Hola, ${this.nombre}!`);
    }

    esMayorDeEdad() {
        if (this.edad >= 18) {
            console.log(`${this.nombre} es mayor de edad.`);
        } else {
            console.log(`${this.nombre} no es mayor de edad.`);
        }
    }
}

let usuario = new Usuario('Juan', 'juan@example.com', 25);

usuario.saludar();
usuario.esMayorDeEdad();
