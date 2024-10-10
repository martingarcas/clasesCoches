<?php

    interface RepoCrud {

        public function create();

        public function getById();

        public function getAll();

        public function update();

        public function delete();
    }

?>