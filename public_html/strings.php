<?php
$strPageTitle = "Velkommen til mit portfolio";
$strClass = "myHeader";
$accHtml = "<p class='test'>Test</p>"
?>
<h1><?php echo $strPageTitle ?></h1>

<?php
echo "<h1 class=\"$strClass\">$strPageTitle</h1>";
echo '<h1 class="' . $strClass . '">' . $strPageTitle. '</h1>';
echo "<h1 class='$strClass'>$strPageTitle</h1>";
echo $accHtml;
?>