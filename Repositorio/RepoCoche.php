<?php

    class RepoCoche implements RepoCrud {

        //private static $listaCoches = [new Coche(),  new Coche()];


        function nuevoCoche(Coche $coche) {

            Conexion::getConection();

            return new Coche();
        }

        function getById(int $id) {

            return new Coche();
        }

    }

?>