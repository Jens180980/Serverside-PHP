<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/functions.php";

$strPageTitle = "Velkommen til mit portfolio";
$strClass = "myHeader";
echo "<h1 class='$strClass'>$strPageTitle</h1>";

$txt = "Til Bo Nicolajsen\n
		Vi skriver fordi der endnu er penge på din konto og den er blevet spærret. 
		Grundet vi har skiftet platform bedes du oprette din konto på ny med email 
		adressen: bo@someplace.dk - Efter oprettelse vil dine penge vente på din 
		konto hvor du enten kan bruge dem eller få dem udbetalt.\n\n
		Beløb tilgængeligt opgjort pr. : 21.405,52 kr.\n\n
		Venlig hilsen Tina";

$arrLetters = str_split($txt);
$i = 0;
foreach($arrLetters as $key => $value) {
	// Position for 7'ende e
	if($value === "e") {
		$i++;
		if($i === 7) {
			echo $key;
		}
 	}

	if($value === "E") {
		echo $key;
	}
}

//showMe($arrLetters)


?>