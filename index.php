<?php
// Variabile -> paragrafo originale
$paragrafo = "Ei fu. Siccome immobile, dato il mortal sospiro, stette la spoglia immemore orba di tanto spiro, 
              così percossa, attonita la terra al nunzio sta, muta pensando all'ultima ora dell'uom fatale.";
// Variabile -> $_GET[""]; individua la parola da censurare 
$badword = $_GET["badword"];
// Variabile -> paragrafo modificato con metodo str_replace();
$paragrafoModificato = str_replace($badword, "***", $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP BadWords</title>
</head>

<body>
  <!-- Paragrafo originale -->
  <p><strong>Paragrafo originale: </strong><?php echo $paragrafo ?></p>
  <!-- Lunghezza del paragrafo originale -->
  <p>Il paragrafo contiene <strong><?php echo strlen($paragrafo) ?></strong> caratteri.</p>
  <!-- Istruzioni per modificare -->
  <p>Per censurare una lettera/parola, copia all'interno dell'URL: <strong>localhost:8888/php-badwords/index.php?badword= </strong><em>lettera/parola che vuoi censurare</em></p>
  <!-- Mostra lettera/parola censurata -->
  <p>Hai censurato la lettera/parola: <strong>"<?php echo $badword ?>"</strong>.</p>
  <!-- Paragrafo censurato -->
  <p><?php echo $paragrafoModificato ?></p>
  <!-- Lunghezza del paragrafo censurato -->
  <p>Il paragrafo censurato contiene <strong><?php echo strlen($paragrafoModificato) ?></strong> caratteri.</p>
</body>

</html>