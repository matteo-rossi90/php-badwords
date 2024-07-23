<?php 

//dichiarare una variabile in PHP da legare al messagio in form
$message = $_POST['message'];

//calcolare il numero dei caratteri del messaggios scritto dall'utente
$length_message = strlen($message);

//censurare le parole volgari sostituendole con asterischi
$correct_message = str_replace('cazzo', '***', $message);

//calcolare di nuovo la lunghezza del messaggio
$length_correct_message = strlen($correct_message)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risposta</title>
</head>
<body>
    
    <h2>Ecco cosa hai scritto:</h2>
    <p><?php echo $message ?> </p>

    <strong>Numero caratteri: <?php echo $length_message ?></strong>

    <p><?php echo $correct_message ?> </p>
    <strong>Numero caratteri: <?php echo $length_correct_message ?></strong>

</body>
</html>