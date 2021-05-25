<!DOCTYPE html>
<html>
	<head>
		<title>PHP字符串：函数</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php 
			//1.strtolower()：将字符串转换为小写
			var_dump(strtolower('I LOVE U'));
			
			//2.strtoupper()：将字符串转换为大写
			var_dump(strtoupper('i hate u'));
			
			//3.ucfirst()：将字符串开头的字母大写
			var_dump(ucfirst('which job do you want to be in the futher?'));
			
			//4.ucwords()：将字符串每个单词首字母大写
			var_dump(ucwords('which job do you want to be in the futher?'));
			
			//5.htmlspecialchars()：格式化字符串当中html标签
			var_dump(htmlspecialchars('<html><head></head><body>我要注入你</body></html>'));
			
			//6.strip_tags()：将html、xml、js、php代码直接删除
			var_dump(strip_tags('<html><head></head><body>我要注入你</body></html>'));
			var_dump(strip_tags('<script>alert("我是一段js代码");</script>'));
			var_dump(strip_tags('<?php echo "我是一段php代码" ?>'));
			
			//7.strlen()：求得字符串长度
			var_dump(strlen("It's already sixteen o'clock, ma shang yao xiake le"));
			var_dump(strlen("马上下课了"));
			var_dump(mb_strlen("马上下课了"));
			
			//8.substr()：字符串截取函数
			var_dump(substr("It's already sixteen o'clock",5,7));
			var_dump(substr("It's already sixteen o'clock",-4,4));
			
			//9.strstr()：字符串查找并截取
			var_dump(strstr("It's already sixteen o'clock",'sixteen'));
			var_dump(strstr("It's already sixteen o'clock",'sixteen',true));
			
			//10.strpos()：查找一个字符串第一次出现的位置
			var_dump(strpos("It's already sixteen o'clock","o'clock"));
			var_dump(strpos("It's already sixteen o'clock","o'clock",-1));
		?>
	</body>
</html>