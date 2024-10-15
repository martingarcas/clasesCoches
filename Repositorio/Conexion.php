<?php

    class Conexion {

        //$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")

        private static $conexion =  null;

        public static function getConection() {

            if($conexion == null) {

                $conexion == new PDO("");
            }

            return $conexion;
        }
    }

?>