<?php
    try{
        $conn = new PDO("mysql:host=127.0.0.1;dbname=mydb", "root");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Verbindung steht!";
    }catch(PDOException $e){
        exit("Ist was dumm gelaufen!");
    }