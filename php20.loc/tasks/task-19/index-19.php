<?
	$summa = 1001;
	$tran = $summa * 0.05;
	$summa = $summa - $tran;
	$tax = $summa * 0.28;
	$summa = $summa - $tax;
	echo round($summa, 2);
?>