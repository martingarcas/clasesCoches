<?php

    function iniciaSesion() {

        session_start();
    }

    function cierraSesion() {

        session_destroy();
    }

    function logIn($user) {

        iniciaSesion();
        $_SESSION['user'] = $user;
    }

    function logOut() {

        iniciaSesion();
        unset($_SESSION);
        cierraSesion();
    }

    function estaLogueado($user) {

        if ($_SESSION['user'] == $user) {
            
            echo 'El usuario ' . $user . ' está logueado.';

        } else {
            
            echo 'El usuario ' . $user . ' ha cerrado sesión.';
        }    
    }

?>