#!/usr/bin/php
<?php
$count = 0;
$tab = array_filter(explode(" ", $argv[1]));
foreach($tab as $elem)
{
	if ($elem && $count == 0)
	{
		$tmp = "$elem";
		$count++;
	}
	else if ($elem && $count == 1)
		echo "$elem ";
}
if ($tmp)
	echo "$tmp";
?>
