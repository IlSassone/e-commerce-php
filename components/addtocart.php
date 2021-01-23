<?php
	// avvio la sessione
	session_start();
	// recupero l'id dell'item da $_GET perché passato sul link
	$iditem = $_GET["itemid"];
	// aggiungo questo valore all'array cart che tengo vivo in $_SESSION
	// se cart non esiste vuol dire che questo è il primo item che aggiungo
	if (!isset($_SESSION["cart"])) {
		// creo la chiave cart e la associo ad un array di item
		$_SESSION["cart"] = Array();
	}
	print("Carrello prima:<br>");
	print_r($_SESSION["cart"]);
	// aggiungo l'elemento al carrello
	array_push($_SESSION["cart"], $iditem);
	// torno alla lista o al carrello
	print("<br>Carrello dopo:<br>");
	print_r($_SESSION["cart"]);
	header("Location: ../views/carrello.php");
?>

