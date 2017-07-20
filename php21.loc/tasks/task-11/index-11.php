<? $v = 8; $str = 'v'; ?>
<style type="text/css">

	table {
        border-collapse: collapse;
    }
    td {
        border: 1px solid black;
        padding: 5px;
    }

</style>
<table>
	<tbody>
		<tr>
			<td>Имя переменной: </td>
			<td><? echo($str); ?></td>
		</tr>
		<tr>
			<td>Значение переменной: </td>
			<td><? echo($v); ?></td>
		</tr>
		<tr>
			<td>Текущий тип: </td>
			<td><? echo(gettype($v)); ?></td>
		</tr>
		<tr>
			<td>Результат empty для переменной: </td>
			<td><? echo (empty($v)); ?></td>
		</tr>
		<tr>
			<td>Результат is_null для переменной: </td>
			<td><? echo is_null($v); ?></td>
		</tr>
		<tr>
			<td>Результат isset для переменной: </td>
			<td><? echo isset($v); ?></td>
		</tr>
		<tr>
			<td>Результат string для переменной: </td>
			<td><? echo (string)$v; ?></td>
		</tr>
		<tr>
			<td>Результат int для переменной: </td>
			<td><? echo (int)$v; ?></td>
		</tr>
		<tr>
			<td>Результат float для переменной: </td>
			<td><? echo (float)$v; ?></td>
		</tr>
		<tr>
			<td>Результат array для переменной: </td>
			<td><? echo (array)$v; ?></td>
		</tr>
		<tr>
			<td>Результат null для переменной: </td>
			<td><? echo (unset)$v; ?></td>
		</tr>
		<tr>
			<td>Результат bool для переменной: </td>
			<td><? echo (bool)$v; ?></td>
		</tr>
	</tbody>
</table>