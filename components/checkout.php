<?php
	include("./connessione.php");
	// avvio la sessione
	session_start();
	if(!array_key_exists("USER", $_SESSION)){
		header("location: ../views/prodotti.php");
	}
	
	$_SESSION["USER"] = "giulio";

	print_r($_SESSION["cart"]);
	// creare una riga nella tabella ordini
	$sql = "
		insert into ordini(user, data, codice) 
		values ('{$_SESSION["USER"]}', 
				NOW(), 'O28871');
	";
	print($sql);
	
	$conn->query($sql) or die($conn->error);
	
	$idordine = mysqli_insert_id($conn);
	
	// creare tutte le righe di dettaglio
	// nella tabella N-N articoli_ordini
		
	foreach ($_SESSION["cart"] as $k => $iditem) {
		$sql = "insert into items_ordini (fk_id_item, fk_id_ordine, qta, prezzo)
		values ('$iditem', '$idordine', 1, 100)";
		print("<hr>".$sql);
		$conn->query($sql) or die($conn->error);
	}	
	
?>

