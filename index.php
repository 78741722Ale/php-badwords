<?php 
# Creare una variabile con un paragrafo di testo a vostra scelta.
$parag = "Lorem ipsum dolor sit amet.";

# Stampare a schermo il paragrafo e la sua lunghezza.
$par_length = strlen($parag); // la sua lunghezza la salvo in altro parametro
var_dump($parag, $par_length); // verifico la parola e la sua lunghezza

# Una parola da censurare viene passata dall'utente tramite parametro GET.

#Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre 
# asterischi (***) tutte le occorrenze della parola da censurare.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Prima della censura -->
    <h2>Prima della censura</h2>
    <p>Questo è il paragrafo di testo <em><?php echo $parag ?></em> e questà è la sua lunghezza <em><?php echo $par_length ?></em></p>
</body>
</html>