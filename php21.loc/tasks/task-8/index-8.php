<?
	$result = false || true;
	$anomaly = false or true;
	var_dump($result, $anomaly);

	var_dump('xxx' == 'xxx');
	var_dump('xXX' == 'XXX');
	var_dump('xxx' === 'xxx');

	var_dump(0 == 'string');
	var_dump(0 === 'string');
	var_dump(1> 'string');
	var_dump(1> '10');

	var_dump(false == 0);
	var_dump(false === 0);
	var_dump(true == 'string');
?>