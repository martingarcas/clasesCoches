<?php

    class Conexion {

        //$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")

        private static $conexion = null;

        public static function getConection() {

            if(self::$conexion == null) {

                self::$conexion = new PDO('mysql:host=localhost;dbname=concesionario', 'root', 'martin');
            }

            return self::$conexion;
        }
    }

?>