 <!-- creare una pagina che legga in ingresso 3 parametri numerici (in GET) che rappresentano le 3 dimensioni di un parallelepipedo: lunghezza, larghezza, altezza; stampare le 3 dimensioni e calcolare il volume della figura (lun x lar x alt) -->

<!-- <!DOCTYPE html> -->
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Parallelepipedo</title>
    <style>
    </style>
    <?php
    // acquisisco dati
    $lunghezza = intval ($_GET['lunghezza']);
    $larghezza = intval ($_GET['larghezza']);
    $altezza = intval ($_GET['altezza']);
    $area = $lunghezza * $larghezza * $altezza;
    ?>
  </head>
  <body>
  	<div id="main-container">
		<h1>Calcolo volume parallelepipedo</h1>
		<ul>
			<?php 
				echo '<li>lunghezza: ' . $lunghezza . ' cm</li>';
				echo '<li>larghezza: ' . $larghezza . ' cm</li>';
				echo '<li>altezza: ' . $altezza . ' cm</li>';
			 ?>
		</ul>
		<h2>Area della figura: <?php echo $area . ' cm³' ?></h2>
  	</div>
  </body>
</html>