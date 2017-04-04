#!/usr/bin/php
<?php
$count = 1;
while ($count < $argc)
{
	if ($count == 1)
		$tab_final = array_filter(explode(" ", $argv[$count]));
	else
		$tab_final = array_merge($tab_final, array_filter(explode(" ", $argv[$count])));
	$count++;
}
sort($tab_final);
foreach($tab_final as $elem)
{
	if ($elem)
	{
		echo "$elem\n";
	}
}
?>
