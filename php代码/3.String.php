<!DOCTYPE html>
<html>
	<head>
		<title>PHP数据类型：字符串型</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php 
			/*
				区别：
					解析变量：
						① 单引号不支持解析变量
						② 双引号支持解析变量
						③ 定界符也支持解析变量
						④ 注意：通常，在双引号和定界符中想要解析变量，需要加花括号
					
					单双引号的插入：
						① 单双引号不能自插
						② 单双引号可以互插
						③ 如果非得任性，就要自插，则需要使用转义符号
					
					转义符：
						双引号，定界符均支持解析转移符号
						① \r
						② \n
						③ \t
			*/
			
			$word = "墨";
			
			//1.单引号定义
			$str1 = '近朱者赤，\r\n近 $word 者黑';
			
			//2.双引号定义
			$str2 = "近朱者赤，\r\n近{$word}者黑";
			
			//3.定界符定义
			$str3 = <<<string
近朱者赤，\r\n近{$word}者黑
string;

			var_dump($str1,$str2,$str3);
		?>
	</body>
</html>