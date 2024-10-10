<?php
/*


index.php:


Directorios:

    Helpers:

        Login.php / util.php
        Session.php

    Modelo:

        Coche.php
        Marca.php
        User.php

    Repositorio: (CLASES)

        Conexion.php:
            private static conexion = null; (Al ser estática vive mientras viva la clase)
            public static function getConection():PDO {  (OBJETO CONEXION)

                if(conexion == null) {

                    conexion == new PDO("cadena de conexión");
                }

                return conexion;
            }

        RepoCoche.php:
            class RepoCoche implements RepoCrud{  //new, getbyid, update, delete (principio de responsabilidad única)
                //propiedades
                    private static listaCoches = [new Coche(), new Coche()];
                //constructor
                //métodos:
                    // function nuevoCoche(Coche $coche):Coche { //función que guarda un coche en la base de datos, modificar etc(clase)

                            Conexion::getConection(); (al  ser un método estático se llama con "::" sino la llamada se haría con "->")

                            return new Coche();
                        }

                        function getById(int id):Coche {

                            return new Coche(); //NO HYA BASE DE DATOS
                        }
            }

        RepoMarca.php
        RepoUser.php
        (Patrón de diseño Factory -Singlenton(sólo se crea un objeto))

    Formularios:


    //dame un ejemplo en php que implemente 


 */