<?php

    try{
        $conecta = new PDO("mysql:host=localhost; dbname=gerenciamento; charset=utf8", "root", "");
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }

?>