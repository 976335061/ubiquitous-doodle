<!DOCTYPE html>
<html>
	<head>
		<title>PHP函数：自定义函数</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		
		<?php 
			//定义一个生成表格的函数
			function myTable($border, $width, $cellspacing=0, $cellpadding=5){
				$table = "
					<table border='{$border}' width='{$width}' cellspacing='{$cellspacing}' cellpadding='{$cellpadding}'>
						<tr>
							<th>ID</th>
							<th>姓名</th>
							<th>性别</th>
							<th>年龄</th>
						</tr>
						<tr align='center'>
							<td>1</td>
							<td>张三</td>
							<td>男</td>
							<td>18</td>
						</tr>
					</table>
				";
				
				//输出表格
				return $table;
			}
			
			//调用函数
			myTable('5','1000');
			myTable('15','800','10','15');
		?>
	</body>
</html>