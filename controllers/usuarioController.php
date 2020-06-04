
<?php
    require "../models/UsuarioModel.php";
    
    $objUsuarios = new UsuarioModel();
    $datos = $objUsuarios->getAllUsers();
    $roles= $objUsuarios->getAllRol();


    require_once "../views/usuarios.php";
?>