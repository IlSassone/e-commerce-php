<?php
	// avvio la sessione
	session_start();
	// recupero l'id dell'item da $_GET perché passato sul link
	$itemindextoremove = $_GET["cartindex"];
	// unset toglie l'elemento specificato da un array
	unset($_SESSION["cart"][$itemindextoremove]);
	// torno al carrello
	header("Location: ../views/carrello.php");
?>

