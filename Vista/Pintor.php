<?php

    Class Pintor {

        public static function listaModelos($modelos) {

            foreach ($modelos as $modelo) {
                
                echo "
                    <h3>$modelo->marca $modelo->modelo, $modelo->color</h3>

                ";
            }
        }
    }

?>