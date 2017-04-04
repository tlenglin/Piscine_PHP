#!/usr/bin/php
<?php
if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	return (0);
}
$tab = preg_split("/[\s]/", $argv[1], -1, PREG_SPLIT_NO_EMPTY);
if (count($tab) > 3)
{
	echo "Syntax Error\n";
	return (0);
}
if (count($tab) == 3)
{
	if (!is_numeric($tab[0]) || !is_numeric($tab[2]) || (strlen($tab[1]) > 1 && strstr("+-*/%", $tab[1]) == FALSE))
	{
		echo "Syntax Error\n";
		return (0);
	}
}
if (count($tab) == 2)
{
	$i = 0;
	if (!is_numeric($tab[0]))
	{
		if ($tab[0][0] == '-')
			$tab[0] = substr($tab[0], 1);
		$i = 0;
		while ($tab[0][$i])
		{
			if ((!ctype_digit($tab[0][$i]) && $i < strlen($tab[0]) - 1) || strstr("+-*/%", $tab[0][strlen($tab[0]) - 1]) == FALSE)
			{
				echo $tab[0][$i];
				echo $i;
				echo "Syntax Error\n";
				return (0);
			}
			$i++;
		}
		if (!is_numeric($tab[1]))
		{
			echo "Syntax Error\n";
			return (0);
		}
	}
	else
	{
		if (strstr("+-*/%", $tab[1][0]) == FALSE)
		{
			echo "Syntax Error\n";
			return (0);
		}
		$tab[1] = substr($tab[1], 1);
		if (!is_numeric($tab[1]))
		{
			echo "Syntax Error\n";
			return (0);
		}
	}
}
if (count($tab) == 1)
{
	$num1 = intval($tab[0]);
	if (!is_numeric($num1))
	{
		echo "Syntax Error\n";
		return (0);
	}
	if ($argv[1][strlen($num1)] != '+' && $argv[1][strlen($num1)] != '-' && $argv[1][strlen($num1)] != '*' && $argv[1][strlen($num1)] != '/' && $argv[1][strlen($num1)] != '%')
	{
		echo "Syntax Error\n";
		return (0);
	}
	$num2 = substr($argv[1], strlen($num1) + 1);
	if (!is_numeric($num2))
	{
		echo "Syntax Error\n";
		return (0);
	}
}
$argv[1] = str_replace(" ","", $argv[1]);
$argv[1] = str_replace("\t","", $argv[1]);
$num1 = intval($argv[1]);
if ($argv[1][strlen($num1)] != '+' && $argv[1][strlen($num1)] != '-' && $argv[1][strlen($num1)] != '*' && $argv[1][strlen($num1)] != '/' && $argv[1][strlen($num1)] != '%')
{
	echo "Syntax Error\n";
	return (0);
}
$op = $argv[1][strlen($num1)];
$num2 = substr($argv[1], strlen($num1) + 1);
echo "$num1\n$op\n$num2\n";
if ($op == "+")
	$res = $num1 + $num2;
if ($op == "-")
	$res = $num1 - $num2;
if ($op == "*")
	$res = $num1 * $num2;
if ($op == "/")
	$res = $num1 / $num2;
if ($op == "%")
	$res = $num1 % $num2;
echo "$res";
?>
