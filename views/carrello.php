<?php
	
	include("../components/connessione.php");
	include("../components/navbar.php");

	// avvio la sessione
	//session_start();
	// recupero l'array con chiave cart dalla $_SESSION
	// se la chiave non c'è il carrello è vuoto
	if (!isset($_SESSION["cart"])) {
		$cart = Array();
	}	
	else {
		$cart = $_SESSION["cart"];
	}
	
	$tabella = "<table class='table table-striped table-bordered w-100 m-auto'>
					<thead class='thead-dark'>
						<tr>
							<th>Codice</th>
							<th>Descrizione</th>
							<th>Prezzo</th>
							<th>Categoria</th>
							<th></th>
						</tr>
					</thead>
					<tbody>";
	
	
	$totalecarrello = 0;
	foreach ($cart as $k => $itemid) {

		// Per ogni elemento in cart faccio la query per sapere di che articolo si tratta
		$sql = "SELECT a.*, c.Nome as categoriaN FROM articoli a, categorie c WHERE a.Categoria=c.ID and a.ID=$itemid";
		$righe = eseguiquery($sql);
		$item = $righe[0];
		$deletelink = "<a href='../components/delfromcart.php?cartindex={$k}'>cancella</a>";
	
		$tabella = $tabella . "
						<tr>
							<td>{$item["ID"]}</td>
							<td>{$item["Nome"]}</td>
							<td class='text-right'>{$item["Prezzo"]}</td>
							<td>{$item["categoriaN"]}</td>
							<td class='text-center'>{$deletelink}</td>
						</tr>
		";
		
		$totalecarrello += $item["Prezzo"];
		
	}
	
	
	$tabella = $tabella . "
					<tfoot>
						<td class='text-right font-weight-bold' colspan=2>Totale carrello</td>
						<td class='text-right font-weight-bold'>&euro; $totalecarrello</td>
						<td colspan=2></td>
					</tfoot>
					</tbody>
				</table>
	";
	
	if (count($cart) == 0) {
		
		$tabella = "
			<div class='alert alert-warning' role='alert'>
			  Il tuo carrello è vuoto
			</div>
		";
	}
	

	
	$html = "
	
		<html>
            <head>
            <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet' />
            <meta charset='UTF-8' />
                        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
				<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
			</head>
			<body>
			
				$nav
				
				
				$tabella
			
				<br>
				
				<a href='../components/checkout.php'>Vai al pagamento</a>
				
			</body>
		</html>
	";
	
	print($html);
