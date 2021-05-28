<!-- SEZIONE DOVE CONNETTO IL DATABASE -->
<?php

    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'hotel';

    //apertura connessione
    $conn = new mysqli($host, $username, $password, $database);
    

    //controllo connessione
    if($conn && $conn -> connect_error){
        die("Connection failed: $conn -> $connect_error");
    }
?>