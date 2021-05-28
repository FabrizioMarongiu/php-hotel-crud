<?php

    include __DIR__.'/database.php';

    // get room ID
    $id = empty($_GET['id']) ? false : $_GET['id'];

    if($id){
        
        $stmt = $conn -> prepare("SELECT * FROM `stanze` WHERE `id` = ?");
        $stmt -> bind_param('s', $id );
        //esecuzione
        $stmt -> execute();
        //ottieni il risultato
        $results = $stmt -> get_result();

        if($results && $results -> num_rows > 0){
            $dettaglio_stanza = $results -> fetch_assoc();
            //var_dump($dettaglio_stanza);
        }
    }
    $conn -> close();

?>