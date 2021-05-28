<?php

    include __DIR__.'/database.php';

    // ottengo i dati delle stanze
    $sql = "SELECT `id`,`room_number`  FROM `stanze`";

    $result = $conn -> query($sql);

    if($result && $result -> num_rows > 0){
        $stanze= [];

        while($row = $result -> fetch_assoc()){
            // popolare array stanze
            $stanze[] = $row;
        }
        //var_dump($stanze);
    }
    else{
        echo'Query Error';
    }

    // chiusura connessione database

    $conn -> close();
?>