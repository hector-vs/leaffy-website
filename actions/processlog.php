<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Admin;

if($_POST){
    $login = $_POST['logemail'];
    $senha = $_POST['logsenha'];

    $thisAdmin = new Admin();
    $admin = $thisAdmin->find("email = :login AND senha = :senha", "login={$login}&senha={$senha}");
    $listadmin = $admin->fetch();
    $count = $admin->count();
    if($count>0){
        session_start();
        $_SESSION ['id'] = $listadmin->id;
        $_SESSION ['login'] = $login;
        $_SESSION ['senha'] = $senha;
        header("Location:".URL_BASE."/admin");
    }else{
        header("Location:".URL_BASE."/login");
    }
}