<?php
session_start();

$exception = null;

if($_POST) {
    try {
        $_POST['date_time'] = (new DateTime())->format('Y-m-d H:i:s'); 
        $consulta = new Consulta($_POST);
        $consulta->insert();
        addSuccessMsg('Obrigado por se cadastrar');
        header('Location: main.php');
        $_POST = [];
    } catch(Exception $e) {
        $exception = $e;
    }
}



