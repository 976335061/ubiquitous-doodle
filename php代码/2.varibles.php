<!DOCTYPE html>
<html>
	<head>
		<title>PHP：基本使用</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php 
			//定义变量
			/*
				字母数字下划线
				首字母不能为数字
				严格区分大小写
				且不能使用关键字
				更不能使用中文
			*/
			$name = '张三';
			$sex = "女";
			$age = 18;
			
			//php的打印方式
			
			//echo 是将输出内容以字符串形式输出
			echo $name,$sex,$age;
		
			//var_dump()：会将被打印的内容的详细信息打印出来
			var_dump($name,$sex,$age);
		?>
	</body>
</html>