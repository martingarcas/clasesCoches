<?php

    require_once '../Repositorio/RepoModelo.php';
    require_once '../Modelo/Modelo.php';
    require_once '../Vista/Pintor.php';

    // está logueado, tiene autorización, datos válidos?

    // Obtención de datos o realizar operación $marcas
    // Actualizo  vista Pintor.pinta($marcas)

    $rM         = new RepoModelo();
    $newModel   = new Modelo('Mercedes', 'Clase B', 'Blanco');

    $rM->create($newModel);
    $modelos = $rM->getAll();

    Pintor::listaModelos($modelos);



?>