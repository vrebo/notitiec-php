<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DatabaseHelper
 *
 * @author vrebo
 */
class DatabaseHelper {

    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "notitec";

    static function abrirConexion() {
        $conexion = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
        if ($conexion->connect_error) {
            die("Connection failed: " . $conexion->connect_error);
            return;
        }
        return $conexion;
    }

}
