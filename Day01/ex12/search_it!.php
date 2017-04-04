#!/usr/bin/php
<?php
$i = 2;
while ($i < $argc)
{
	$tab = preg_split("/[:]/", $argv[$i], -1, PREG_SPLIT_NO_EMPTY);
	if ($argv[1] == $tab[0])
	{
		$tmp = $tab[1];
	}
	$i++;
}
echo $tmp;
?>
