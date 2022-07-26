<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Il Signore degli Anelli </h1>
    <?php
    $paragraph = "'Tre Anelli ai Re degli Elfi sotto il cielo che risplende,<br>
    Sette ai Principi dei Nani nelle lor rocche di pietra,<br>
    Nove agli Uomini Mortali che la triste morte attende,<br>
    Uno per l'Oscuro Sire chiuso nella reggia tetra<br>
    Nella Terra di Mordor, dove l'Ombra nera scende.<br>
    Un Anello per domarli, Un Anello per trovarli,<br>
    Un Anello per ghermirli e nel buio incatenarli,<br>
    Nella Terra di Mordor, dove l'Ombra cupa scende.'<br>
    J.R.R. Tolkien"; 
    //La parola da censurare viene passata tramite parametro GET.
    $badword = $_GET['badword'];
    ?>

    <p><?php echo $paragraph; ?></p>
    <div>Lunghezza paragrafo: <?php echo strlen($paragraph);?> caratteri</div>

    <?php 
    //Sostituire la "badword" scelta con ***
    $replaced_paragraph = str_replace($badword, '***', $paragraph);
    var_dump($replaced_paragraph);
    ?>

    <p><?php echo $replaced_paragraph; ?></p>
    <div>Lunghezza paragrafo: <?php echo strlen($replaced_paragraph);?> caratteri</div>
</body>
</html>




 

 
