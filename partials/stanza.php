<!-- INCLUSIONE DATABASE CON QUERY STRING-->
<?php
    include __DIR__.'/get-single-room.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ciao, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Stanza</title>
</head>
<body>
    <main>
    <?php if(!empty($dettaglio_stanza)){?>
        <ul>
            <li><h1>Numero stanza: <?php echo $dettaglio_stanza['room_number']?></h1></li>
            <li>Piano: <?php echo $dettaglio_stanza['floor']?></li>
            <li>Letti: <?php echo $dettaglio_stanza['beds']?></li>
            <li>
                <a href="../index.php">Back</a>
            </li>

        </ul>

    <?php } else{ ?>
        <h2>Nessuna stanza trovata</h2>
    <?php } ?>
        
    </main>
</body>
</html>