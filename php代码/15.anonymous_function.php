<!DOCTYPE html>
<html>
	<head>
		<title>PHP函数：。匿名函数</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			//定义一个匿名函数【注意：匿名函数需要在结束的位置添加分号】
			$func = function(){
				echo "我是一个匿名函数！";
			};
			
			//使用匿名函数
			$func();
			
			
			//定义一个普通函数【变量函数，就是将一个函数的名字以字符串形式传递到一个变量中，此时该变量由双重含义，既是字符串，又是函数】
			function test(){
				echo "我是一个变量函数";
			}
			
			//
			$test = 'test';
			echo $test;
			$test();
		?>
	</body>
</html>