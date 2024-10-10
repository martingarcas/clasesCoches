<?php

    class Conexion {

        private static $conexion =  null;

        public static function getConection() {

            if($conexion == null) {

                $conexion == new PDO("");
            }

            return $conexion;
        }
    }

?>