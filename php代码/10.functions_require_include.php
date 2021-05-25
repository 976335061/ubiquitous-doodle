<!DOCTYPE html>
<html>
	<head>
		<title>PHP函数：函数库的引入</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			//1.引入函数库【注意：引入错误会报一个Warning警告错误！不会终止脚本执行！正因为此特性，通常include用于引入相对不重要的文件】
			include_once("./functions.php");
		
			//2.使用工具
			//hammer();
			//electroprobe();
			//echo 123;
		
			//引入函数库【注意：引入错误会抛出一个Fatal Error致命错误！会终止整个脚本执行，正因为此特性，通常require用于引入重要文件】
			require_once "./functions.php";
			
			//2.使用工具
			//hammer();
			//electroprobe();
			//echo 123;
		?>
	</body>
</html>