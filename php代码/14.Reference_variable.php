<!DOCTYPE html>
<html>
	<head>
		<title>PHP函数：引用函数</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			//未使用引用函数
			function test($num){
				$num = 20;
			}
			
			$num = 10;
			test($num);
			
			echo $num;	//10
			
			
			//使用引用函数【地址传值概念】【注意：引用函数必须保证函数调用时传递进来的参数必须是一个比那辆，而不能为实际的值】
			function test1(&$num){
				$num = 20;
			}
			
			$num = 10;
			test1($num);
			
			echo $num;
		?>
	</body>
</html>