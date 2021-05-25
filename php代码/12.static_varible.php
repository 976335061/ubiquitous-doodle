<!DOCTYPE html>
<html>
	<head>
		<title>PHP函数：静态变量 & 超全局变量</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			//静态变量的值会保留到缓冲区中，方便下次使用
			function test(){
				//静态变量
				static $num = 0;
				$num++;
				return $num."<br/>";
			}
			
			echo test();
			echo test();
			echo test();
			echo test();
			
			//超全局变量 get post
			var_dump($GLOBALS);
			
			//常用的超全局变量
			//$_GET  --->  $GLOBALS 当中 _GET
			//$_POST  --->  $GLOBALS 当中 _POST
			//$_COOKIE ---> $GLOBALS 当中 _COOKIE
			//$_SERVER ---> $GLOBLAS 当中 _SERVER
			//$_FILES ---> $GLOBALS 当中 _FILES
		?>
	</body>
</html>