#!/usr/bin/php
<?php
function my_funct($c1, $c2)
{
	if (ctype_alpha($c1))
	{
		if (!ctype_alpha($c2))
			return (-1);
		if (strcasecmp($c1, $c2) == 0)
			return (0);
		return (strcasecmp($c1, $c2) > 0 ? 1 : -1);
	}
	else if (is_numeric($c1))
	{
		if (ctype_alpha($c2))
			return (1);
		else if (!ctype_alpha($c2) && !is_numeric($c2))
			return (-1);
		if (strcasecmp($c1, $c2) == 0)
			return (0);
		return (strcasecmp($c1, $c2) > 0 ? 1 : -1);
	}
	else
	{
		if (ctype_alpha($c2) || is_numeric($c2))
			return (1);
		if (strcasecmp($c1, $c2) == 0)
			return (0);
		return (strcasecmp($c1, $c2) > 0 ? 1 : -1);
	}
}
function my_sort($s1, $s2)
{
	$i = 0;
	while ($i < (strlen($s1) + 1))
	{
		if (my_funct($s1[$i], $s2[$i]) != 0)
			return (my_funct($s1[$i], $s2[$i]));
		$i++;
	}
	return (0);
}
$count = 1;
while ($count < $argc)
{
	if ($count == 1)
		$tab_final = array_filter(explode(" ", $argv[$count]));
	else
		$tab_final = array_merge($tab_final, array_filter(explode(" ", $argv[$count])));
	$count++;
}
if ($tab_final)
{
	usort($tab_final, "my_sort");
	foreach($tab_final as $elem)
	{
		if ($elem)
		{
			echo "$elem\n";
		}
	}
}
?>
