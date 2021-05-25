<!DOCTYPE html>
<html>
	<head>
		<title>PHP函数：变量的作用域</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			
			//全局变量
			$boy = "男朋友";
		
			//1.定义一个函数
			function room(){
				
				//通过global关键字，将全局变量叫进来
				global $boy;
				
				//局部变量
				$girl = "女朋友";
				
				echo $boy;
				
				return $girl;
				
			}
			
			$girl = room();
			
			echo $girl;
		?>
	</body>
</html>