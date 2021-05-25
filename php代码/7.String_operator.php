<!DOCTYPE html>
<html>
	<head>
		<title>PHP运算符：字符串运算符</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<script>
			var str1 = '好好学习，';
			var str2 = '天天向上！';
			
			console.log(str1+str2);
		</script>
		<?php 
			$str1 = "好好学习";
			
			$str2 = "天天向上！";
		
			//字符串运算符 .：字符串连接符号
			$str = "毛主席教导我们说，".$str1."，".$str2;
			
			echo $str;
		?>
	</body>
</html>