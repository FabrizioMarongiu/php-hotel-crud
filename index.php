<!-- INCLUSIONE DEL TEMPLATE DATABASE -->
<?php
    include_once __DIR__.'/partials/get-rooms.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stanze Albergo</title>
</head>
<body>

<main>
    <h1>Stanze Albergo</h1>
    <ul>
        
        <?php //loop stanze
            if(!empty($stanze)){
                foreach($stanze as $stanza){?>
                    <li>Stanza Numero :<?php echo $stanza['room_number']?> 
                    <a href="./partials/stanza.php?id=<?php echo $stanza['id']?> ">Visualizza Stanza</a>
                    </li>
                <?php }
            }

        ?>
        
    </ul>
    

</main>
    
</body>
</html>