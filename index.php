<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  
<?php
 
// SENZA GET

// Variabile con un paragrafo di testo
// $paragrafo = "Here's to us, here's to love
// All the times, that we messed up
// Here's to you, fill the glass
// 'Cause the last few nights have kicked my ass
// If they give ya hell
// Tell em to go fuck themselves, here's to us, here's to us";

// Stampo a schermo il paragrafo e la lunghezza
// echo "Paragrafo originale: <br>";
// echo $paragrafo . "<br>";
// echo "Lunghezza del paragrafo: " . strlen($paragrafo) . "<br>";

// $paragrafo_modificato = preg_replace('/\bass\b|\bfuck\b/i', '***', $paragrafo);

// Stampa a schermo il paragrafo censurato e la sua lunghezza
// echo "Paragrafo censurato: <br>";
// echo $paragrafo_modificato . "<br>";
// echo "Lunghezza del paragrafo censurato: " . strlen($paragrafo_modificato) . "<br>";


// CON GET

$paragrafo = "Here's to us, here's to love
All the times, that we messed up
Here's to you, fill the glass
'Cause the last few nights have kicked my ass
If they give ya hell
Tell em to go fuck themselves, here's to us, here's to us";

// Stampo il paragrafo e la sua lunghezza
echo "Paragrafo originale: <br>";
echo $paragrafo . "<br>";
echo "Lunghezza paragrafo originale: " . strlen($paragrafo) . "<br>";

?>

<h2>La parola da censurare è <?php echo $_GET['censura']  ?> </h2>

<form action="" method="GET">
<input style="width: 12%;" type="text" name="censura" placeholder="Inserisci la parola da censurare...">
<button>Cerca</button>
</form>
<?php


// Sostituisco la parola da censurare con tre asterischi 
$paragrafo_censurato = str_ireplace($_GET['censura'], '***', $paragrafo);

// Stampo il paragrafo censurato e la sua lunghezza
echo "<br>Paragrafo censurato: <br>";
echo $paragrafo_censurato . "<br>";
echo "Lunghezza paragrafo censurato: " . strlen($paragrafo_censurato);
?>

</body>
</html>