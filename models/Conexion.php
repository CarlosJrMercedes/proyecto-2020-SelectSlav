<?php
    require "../app/config.php";

    class Conexion{
        protected $con;
        function __construct(){
            $this->con = new mysqli(SERVER,USER,PASSWORD,BASE);
            $this->con->set_charset(CHAR);
        }
    };


?>