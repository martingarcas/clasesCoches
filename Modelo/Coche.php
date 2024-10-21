<?php

    class Coche {

        public $id;
        public $marca;
        public $modelo;

        public function __construct($id, $marca, $modelo) {

            $this->id       = $id;
            $this->marca    = $marca;
            $this->modelo   = $modelo;
        }

    }
?>