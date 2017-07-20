<?
	$str = "John";
	$int = 10;
	$bool = true;

	echo gettype($str);
	echo '<br>';
	echo gettype($int);
	echo '<br>';
	echo gettype($bool);
	echo '<br>';
	echo gettype($x);
	echo '<br>';

	echo is_string($str);
	echo '<br>';
	echo is_integer($int);
	echo '<br>';
	echo is_bool($bool);
	echo '<br>';
	echo is_null($x);
	echo '<br>';
?>