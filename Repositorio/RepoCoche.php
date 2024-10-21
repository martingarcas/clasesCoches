<?php

    //$base = $_SERVER['DOCUMENT_ROOT'] ."/localhost/clasesCoches";
    //require_once "$base/Modelo/Coche.php";
    require_once "RepoCrud.php";
    require_once "Modelo/Coche.php";

    class RepoCoche implements RepoCrud{

        private $con;

        public function __construct($con) {

            $this->con = $con;
        }

        public function create($obj) {

            $nuevoCoche = [];

            foreach ($obj as $valor) {
                
                $nuevoCoche [] = $valor;
            }

            $id     = $nuevoCoche[0];
            $marca  = $nuevoCoche[1];
            $modelo = $nuevoCoche[2];

            $stm = $this->con->prepare("INSERT INTO coche (id, marca, modelo) VALUES (:id, :marca, :modelo)");
            $stm->execute(['id' => $id, 'marca' => $marca, 'modelo' => $modelo]);
            

        }

        public function getById($id) {

            $stm = $this->con->prepare("select * from coche where id = :id");
            $stm->execute(['id' => $id]);

            $coche          = null;
            $registroCoche  = $stm->fetch();

            if ($registroCoche) {

                $coche          = new Coche();
                $coche->id      = $registroCoche["id"];
                $coche->marca   = $registroCoche["marca"];
                $coche->modelo  = $registroCoche["modelo"];
            }

            return $coche;
        }

        public function getAll() {

            $stm = $this->con->prepare("select * from coche");
            $stm->execute();

            $coches = $stm->fetch();
                  
            
        }

        public function update($obj) {

            $nuevoCoche = [];

            foreach ($obj as $valor) {
                
                $nuevoCoche [] = $valor;
            }

            $id     = $nuevoCoche[0];
            $marca  = $nuevoCoche[1];
            $modelo = $nuevoCoche[2];

            $stm = $this->con->prepare("UPDATE coche SET id = :id, marca = :marca, modelo = :modelo WHERE id = :id");
            $stm->execute(['id' => $id, 'marca' => $marca, 'modelo' => $modelo]);
        }

        public function delete($id) {
            
            $stm = $this->con->prepare("delete from coche where id = :id");

            $stm->execute(['id' => $id]);

            $count = $stm->rowCount();

            return $count;

        }

    }

?>