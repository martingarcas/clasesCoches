<?php

    require_once 'RepoCrud.php';

    class RepoModelo implements RepoCrud {

        private $modelos = array();

        public function __construct() {

            $this->modelos = [];
        }

        function getAll() {

            return $this->modelos;
        }

        function create($modelo) {

            $this->modelos[] = $modelo;
        }

        function getById() {

        }

        function update() {

        }

        function delete() {

        }

    }

?>