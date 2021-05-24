<?php 
$states = [ 'Oregon' => 'OR',
'Alabama' => 'AL', 'New Jersey' => 'NJ',
'Colorado' => 'CO', ];
$capitals = [
'OR' => 'Salem',
'AL' => 'Montgomery', 'NJ' => 'trenton',
'KS' => 'Topeka', ];
function search_by_states($str)
{
	global $states;
	global $capitals;
	$strs = explode(', ', $str);
	foreach($strs as $str)
	{
		$capital = $capitals[$states[$str]];
		$state = array_flip($states)[array_flip($capitals)[$str]];
		if ($state)
			echo "$str is the capital of $state.\n";
		else if ($capital)
			echo "$capital is the capital of $str.\n";
		else
			echo "$str is neither a capital nor a state.\n";
	}
}
?>
