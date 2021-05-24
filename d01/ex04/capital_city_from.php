<?php 
$states = [ 'Oregon' => 'OR',
'Alabama' => 'AL', 'New Jersey' => 'NJ',
'Colorado' => 'CO', ];
$capitals = [
'OR' => 'Salem',
'AL' => 'Montgomery', 'NJ' => 'trenton',
'KS' => 'Topeka', ];
function capital_city_from($state)
{
	global $states;
	global $capitals;
	$capital = $capitals[$states[$state]];
	if ($capital)
		echo "$capital\n";
	else
		echo "Unknown\n";
}
?>
