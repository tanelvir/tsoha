<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<h3>Kirjautuminen</h3> 
 </body>
<body>
 <?php echo '<p>Ole hyvä ja syötä henkilötunnuksesi kirjautuaksesi sisään</p>'; ?> 
 </body>
<form action="kirjautuminen.php" method="post">
<h3>Kirjautuminen</h3>
<?php
function valintalista($nimi, $sisalto) {
    echo "<select name=\"{$nimi}\">";
    foreach ($sisalto as $kohta) {
        echo "<option value=\"{$kohta}\">{$kohta}";
    }
    echo "</select>";
}

echo "<p>Valitse syntymäpäiväsi:</p>";
valintalista("paiva", range(1, 31));
valintalista("kuukausi", range(1, 12));
valintalista("vuosi", range(1900, 2010));
?>
<p>Tunnus: <br>
echo "<p>Henkilötunnuksesi loppuosa:</p>";
<input type="text" name="henkilöllisyystunnus"></p>
<input type="submit" value="Kirjaudu">
</form>
<hr>
</html>
