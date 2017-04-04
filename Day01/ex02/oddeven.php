#!usr/bin/php
<?php
echo "Entrez un nombre: ";
$handle = fopen ("php://stdin","r");
while ($response = fgets($handle))
{
	$response = trim($response);
	if (ctype_digit($response) == 0)
		echo "'$response' n'est pas un chiffre\n";
	else if (strlen($response) > 18)
		echo "Nombre invalide\n";
	else if ($response % 2 == 1)
		echo "Le chiffre $response est Impair\n";
	else
		echo "Le chiffre $response est Pair\n";
	echo "Entrez un nombre: ";
}
?>
