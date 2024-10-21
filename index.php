<?php

    /*//Crea instancia del repositorio
    $repoCoche = new RepoCoche();

    //Crear coches
    $repoCoche->

    //Actualizar un coche
    
    //Leer todos los coches
    $repoCoche = $repoCoche->getAll();
    print_r($coches);*/

    //echo "<a href='Control/listamarcas.php'>LISTADO MARCAS</a>";

    //var_dump($_SERVER['DOCUMENT_ROOT'] ."/localhost/clasesCoches/Modelo/Coche.php");

    require_once "Repositorio/Conexion.php";
    require_once "Repositorio/RepoCoche.php";
    require_once "Modelo/Coche.php";

    // NUEVO REPOCOCHE
    $rc = new RepoCoche(Conexion::getConection());

    //$miCoche = $rc->getById(1);
    //var_dump($miCoche);
    //$coches = $rc->getAll();

    //$nuevoCoche = new Coche(7, 'Seat', 'Ibiza');
    //$rc->create($nuevoCoche);
    //var_dump($nuevoCoche);

    $nuevoCoche = new Coche(3, 'Nissan', 'Micra');
    $rc->update($nuevoCoche);
    var_dump($nuevoCoche);

    //$deleteCoche = $rc->delete(9);

    //var_dump($deleteCoche);

    //var_dump($miCoche);

?>