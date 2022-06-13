<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/functions.php";

$strPageTitle = "Velkommen til mit portfolio";
$strClass = "myHeader";
echo "<h1 class='$strClass'>$strPageTitle</h1>";

$txt1 = "Til Bo Nicolajsen\n
		Vi skriver fordi der endnu er penge på din konto og den er blevet spærret. 
		Grundet vi har skiftet platform bedes du oprette din konto på ny med email 
		adressen: bo@someplace.dk - Efter oprettelse vil dine penge vente på din 
		konto hvor du enten kan bruge dem eller få dem udbetalt.\n\n
		Beløb tilgængeligt opgjort pr. : 21.405,52 kr.\n\n
		Venlig hilsen Tina";

$txt2 = "Hel Tina\n
		Da jeg er ufattelig rig, og derfor ikke har brug for pengene. 
		Ser jeg gerne at i donere alle pengene til Dyrenes beskyttelse. 
		Under navnet \"GeorgGiraf\".\n\n
		Venlig hilsen Bo";

$arrLetters = str_split($txt1);
$i = 0;
foreach($arrLetters as $key => $value) {
	// Position for 7'ende e
	if($value === "e") {
		$i++;
		if($i === 7) {
			echo "<p>Opgave 5: $key</p>";
		}
 	}

	if($value === "E" && !isset($fix)) {
		echo "<p>Opgave 6: $key</p>";
		$fix = 1;
	}
}

echo "<p>Opgave 7: " . str_replace("rig", "fattig", $txt2). "</p>";
echo "<p>Opgave 8: " . str_replace("ikke", "", $txt2). "</p>";
?>