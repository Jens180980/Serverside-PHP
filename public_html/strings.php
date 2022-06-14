<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/functions.php";
$strPageTitle = "Strengeleg";
echo "<h1>$strPageTitle</h1>\n<hr />";


$str1 = "Til Bo Nicolajsen\n
		Vi skriver fordi der endnu er penge på din konto og den er blevet spærret. 
		Grundet vi har skiftet platform bedes du oprette din konto på ny med email 
		adressen: bo@someplace.dk - Efter oprettelse vil dine penge vente på din 
		konto hvor du enten kan bruge dem eller få dem udbetalt.\n\n
		Beløb tilgængeligt opgjort pr. : 21.405,52 kr.\n\n
		Venlig hilsen Tina";

$str2 = "Hej Tina\n
		Da jeg er ufattelig rig, og derfor ikke har brug for pengene. 
		Ser jeg gerne at i donere alle pengene til Dyrenes beskyttelse. 
		Under navnet \"GeorgGiraf\".\n\n
		Venlig hilsen Bo";

//$strTest1 = "abcdef";
//$strTest2 = "defghi";

/*
echo showResult(2, strtoupper($str1));
echo showResult(3, strtolower($str1));
echo showResult(4, str_replace("email", "bob@someplace.dk", $str1));
echo showResult(5, countPosition($str1, "e", 7));
echo showResult(6, countPosition($str1, "E"));
echo showResult(7, str_replace("rig", "fattig", $str2));
echo showResult(8, str_replace("ikke", "", $str2));
echo showResult(9, matchLetters($str1, $str2));
echo showResult(10, shuffleChars($str1));
*/

/**
 * Funktion der fjerner alle whitespaces og symboler 
 * og splitter strengen op i et array
 */
function strToArray($str, $removeSpaces = false) {
	$str = ($removeSpaces) ? preg_replace('/[^A-Za-z0-9]/', '', $str) : $str;
	return str_split($str);
}

/**
 * Funktion til at tæller en bestemt karakters placering i 
 * den samlede streng.
 */
function countPosition($str, $char, $num = 1) {
	$arrChars = strToArray($str); 
	$i = 0;
	foreach($arrChars as $key => $value) {
		if($value === $char) {
			$i++;
			if($i === $num) {
				return $key;
			}
		}
	}
}

/**
 * Matcher karakterværdier i to forskellige strenge
 * Fjerner whitespaces og dubletter og splitter strenge i arrays
 * Returnerer antal af matches
 */
function matchLetters($str1, $str2) {
	$arrChars1 = strToArray($str1, true);
	$arrChars2 = strToArray($str2, true);
	$arr1 = array_unique($arrChars1);
	$arr2 = array_unique($arrChars2);
	$result_array = array_intersect($arrChars1, $arrChars2);
	return count($result_array);
}

/**
 * Blander alle bogstaver tilfældigt i en tekst
 */
function shuffleChars($str) {
	$arrChars = strToArray($str);
	shuffle($arrChars);
	return implode('', $arrChars);
}

/**
 * Viser resultat med opgave nummer
 */
function showResult($id, $result) {
	return "<div>\n<h2>Opgave nr. $id</h2>\n 
				<p><b>Resultat:</b><br>$result</p>\n<hr></div>";
}

/**
 * Konverterer floats til dansk format
 */
function floatToDk($float) {
	return number_format($float, 2, ',', '.');
}

/**
 * Konverterer integer til float format
 */
function floatToDb($float) {
	return number_format($float, 2, '.', '');
}
?>