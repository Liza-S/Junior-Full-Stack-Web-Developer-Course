<?

	$number = 10;
	$number_link = &$number;
	$number_link = $number_link + 5;
	echo $number;

	$number = 21;
	$var_name = 'number';
	echo $$var_name;
?>

