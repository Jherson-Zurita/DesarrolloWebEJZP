<?php
    class Utiles {
        private $cadena;

        public function __construct($cadena) {
            $this->cadena = $cadena;
        }

        public function aumentarGuiones($n) {
            $longitud = strlen($this->cadena);
            for ($i = 0; $i < $longitud; $i++) {
                echo $this->cadena[$i];
                if ($i < $longitud - 1) {
                    for ($j = 0; $j < $n; $j++) {
                        echo '-';
                    }
                }
            }
        }
    }
?>
