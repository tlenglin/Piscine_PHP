#!/usr/bin/php
<?php
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return (0);
}
$argv[1] = trim($argv[1], " \t");
$argv[2] = trim($argv[2], " \t");
$argv[3] = trim($argv[3], " \t");
if ($argv[2] == "+")
	$res = $argv[1] + $argv[3];
if ($argv[2] == "-")
	$res = $argv[1] - $argv[3];
if ($argv[2] == "*")
	$res = $argv[1] * $argv[3];
if ($argv[2] == "/")
	$res = $argv[1] / $argv[3];
if ($argv[2] == "%")
	$res = $argv[1] % $argv[3];
echo "$res";
?>
