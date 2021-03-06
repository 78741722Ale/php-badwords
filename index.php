<?php 
# Creare una variabile con un paragrafo di testo a vostra scelta.
$parag = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore ex, eius cumque non officia error quam similique repudiandae amet, incidunt atque enim ipsa fugiat est!";

# Stampare a schermo il paragrafo e la sua lunghezza.
$par_length = strlen($parag); // la sua lunghezza la salvo in altro parametro
var_dump("Il testo del paragrafo è $parag, e la sua lunghezza è $par_length"); // verifico la parola e la sua lunghezza

# Una parola da censurare viene passata dall'utente tramite parametro GET.
var_dump($_GET['bad']); // Modifica della Query
$badWords = ($_GET['bad']); // la salvo in variabile
var_dump("la brutta parola è $badWords"); // verifico in console

#Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre 
# asterischi (***) tutte le occorrenze della parola da censurare.
/**
 * $censor => la mia variabile
 * str_replace() => la mia funzione per cambiare valore del mio paragrafo con badWords
 * $badWords => la parola "filtrata" del mio paragrafo lorem
 * '***' => cambio del valore di $badWords (come richiesto da consegna)
 * $parag => nel mio paragrafo verrà filtrata la badWords e riceverà valore '***'
 */
$censor = str_replace($badWords, '***', $parag);
$censor_length = strlen($censor); // la sua lunghezza la salvo in altro parametro
var_dump("In console esce $censor e la sua lunghezza è $censor_length"); // Verifico ancora in console

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <!-- Prima della censura -->
    <h2>Prima della censura</h2>
    <p>Questo è il paragrafo di testo <em><?php echo $parag ?></em> e questà è la sua lunghezza <em><?php echo $par_length ?></em></p>
    <!-- Post Censura -->
    <h2>Post Censura</h2>
    <!-- Stampo a schermo anche la brutta parola -->
    <p>La brutta parola inserita dall'utente è <em><?php echo $badWords ?></em></p>
    <!-- Stampo a schermo nuovamente tutta la frase -->
    <p>Questo è il paragrafo di testo censurato <em><?php echo $censor ?></em> e questà è la sua lunghezza <em><?php echo $censor_length ?></em></p>
</body>
</html>