<!DOCTYPE html>
<html>
<head>
	<title>Ряд Фибоначчи</title>
</head>
<body>
	
	<h2>Введите длину ряда(целое число)</h2>
	<form method="post" action="fib.php">
		    <div class="col">
		     <h5><input name = "length" type="text" id="length" size = "25" placeholder="Введите длину ряда"></h5>
		    </div>
			<br><button type="submit" name = "ok"><h5>Отправить</h5></button>
		</form>
	<br>
	<?php 
	if (isset($_POST['ok'])){ 
		$length = $_POST['length'];
		if($length<0 || is_int($length))
		{
			echo "Ошибка ввода";
		}
		$fib1 = 0;    
		$fib2 = 1; 
		// echo $x;
		// echo $y;
		for($i=1;$i<=$length;$i++)    
		{    
		    $result = $fib1 + $fib2;    
		    echo $result." ";         
		    $fib1=$fib2;       
		    $fib2=$result;     
		}   
	}
	 ?>
</body>
</html>