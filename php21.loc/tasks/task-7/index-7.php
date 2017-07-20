<?
	$million_dollars = 9999999;

	echo number_format($million_dollars).' $';
	echo '<br>';
	echo number_format($million_dollars, 2 , '.', ' ').' $';

	$userAgent = $_SERVER['HTTP_USER_AGENT'];

	echo '<pre>';

	$arr = explode(' ', $userAgent);
	var_dump($arr);

	echo '<br>';
	echo implode(' ', $arr);

	echo '<pre>';
	var_dump( trim("\t\t string"));

	$str = "I love HTML!";
	echo '<br>';
	echo str_replace('HTML', 'PHP', $str);

?>