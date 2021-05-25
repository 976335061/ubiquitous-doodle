<!DOCTYPE html>
<html>
	<head>
		<title>PHP数据类型：字符串型</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php 
			//打开一个目录，就会得到资源型数据
			$resource = opendir('./');
			
			var_dump($resource);
		?>
	</body>
</html>