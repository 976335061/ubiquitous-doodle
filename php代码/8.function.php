<!DOCTYPE html>
<html>
	<head>
		<title>PHP函数：自定义函数</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<script>
		</script>
		<?php 
			
			//定义要给求得两值之和的函数s
			$num1 = 100;
			$num2 = 200;
			
			sum($num1, $num2);
			
			function sum($num1, $num2){
				
				$res = $num1 + $num2;
				
				return $res;
			
			}
			
			sum(300,400);
			
			//不能定义重名的函数
			//function sum($num1, $num2){
			//	
			//	$res = $num1 + $num2;
			//	
			//	var_dump($res);
			//
			//}
		?>
	</body>
</html>