<?php 
class calculator{

	function result($num1,$num2,$operator){
		if($operator =='+'){
			$totals = $num1 + $num2;
		}elseif($operator == '/'){
			$totals = $num1 / $num2;
		}elseif($operator == '*'){
			$totals = $num1 * $num2;
		}elseif($operator == '-'){
			$totals = $num1 - $num2;
		}
		echo $num1 . $operator . $num2 . " = ";
		echo $totals;

	}
}
if(isset($_POST['submit'])){
	$errors = array();
	if($_POST['num1'] == '' || $_POST['num2'] == ''){
		$errors = 'Нет значений';
	}
	if(empty($errors)){
		$operator = $_POST['operators'];
		$num2 = $_POST['num2'];
		$num1 = $_POST['num1'];
		$final = new calculator;
		$final->result($num1,$num2,$operator);
	}else{
		echo $errors;
	}
}

?>


<html>
<body>
<form action="" method="POST">
<input type="number" name="num1">
<select name="operators">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="/">/</option>
	<option value="*">*</option>
</select>
<input type="number" name="num2">
<input type="submit" name="submit" value="submit">
</form>

</body>
</html>