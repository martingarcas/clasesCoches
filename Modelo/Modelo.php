<?php

    class Modelo {

        public $marca;
        public $modelo;
        public $color;

        public function __construct($marca, $modelo, $color) {

            $this->marca    = $marca;
            $this->modelo   = $modelo;
            $this->color    = $color;
        }

    }
?>