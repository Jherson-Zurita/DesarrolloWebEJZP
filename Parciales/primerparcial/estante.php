<?php 
     class Estante {
        private $fila1 = array();
        private $fila2 = array();

        public function __construct($a,$b) {
            $this->fila1 = $a;
            $this->fila2 = $b;
        }

        public function insertarFila1($libro){
            $fila1[]=$libro;
        }

        public function insertarFila2($libro){
            $fila2[]=$libro;
        }

        public function mostrararmario(){
            foreach($fila1 as $l){
                echo $l.'<br>'; 
            }
            echo "<br>";
            foreach($fila2 as $l){
                echo $l.'<br>'; 
            }
        }

    }

?>