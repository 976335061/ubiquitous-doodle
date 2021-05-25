<!DOCTYPE html>
<html>
	<head>
		<title>PHP特殊变量：可变变量 & 引用赋值</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php 
			//面试题常见
			$a = 'b';
			$$a = 'c';
			$$$a = 'd';
			
			echo $b;
			echo $c;
			
			//引用赋值【地址传值】
			$boy = '100w';
			$girl = &$boy;
			$girl = '50w';
			
			//销毁变量
			unset($boy);
			
			echo $girl;
		?>
	</body>
</html>