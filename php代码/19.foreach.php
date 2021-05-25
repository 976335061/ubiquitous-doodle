<!DOCTYPE html>
<html>
	<head>
		<title>PHP数组：多维数组的遍历</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<table border='1' width='600' cellpadding='5' cellspacing='0'>
			<tr>
				<th>id</th>
				<th>姓名</th>
				<th>性别</th>
				<th>年龄</th>
			</tr>
			<tr align='center'>
				<td>1</td>
				<td>张三</td>
				<td>男</td>
				<td>20</td>
			</tr>
			<tr align='center'>
				<td>2</td>
				<td>李四</td>
				<td>女</td>
				<td>30</td>
			</tr>
			<tr align='center'>
				<td>3</td>
				<td>王五</td>
				<td>女</td>
				<td>50</td>
			</tr>
		</table>
		<?php
			//一维数组
			$stu = [
					'name'=>'张三',
					'sex'=>'男',
					'age'=>18,
					];
					
					
			//一维数组遍历
			//foreach($stu as $val){
			//	
			//	var_dump($val);
			//	
			//}
			
			//一维数组遍历【提取下标和值】
			//foreach($stu as $key=>$val){
			//	
			//	echo $key.'=>'.$val."<br/>";
			//	
			//}
					
					
			//二维数组
			$stus = [
					0=>[
						'name'=>'张三',
						'sex'=>'男',
						'age'=>18,
						],
					1=>[
						'name'=>'李四',
						'sex'=>'女',
						'age'=>20,
						],
					2=>[
						'name'=>'王五',
						'sex'=>'男',
						'age'=>30,
						],
					3=>[
						'name'=>'马六',
						'sex'=>'女',
						'age'=>40,
						],
					];
					
			//二维数组遍历
			foreach($stus as $key=>$val){
				var_dump($val);
			}
			
					
			//三维数组
			$stuList = [
					'one'=>[
							0=>[
								'name'=>'张三',
								'sex'=>'男',
								'age'=>18,
								],
							1=>[
								'name'=>'李四',
								'sex'=>'女',
								'age'=>20,
								],
							],
					'two'=>[
							0=>[
								'name'=>'王五',
								'sex'=>'女',
								'age'=>30,
								],
							1=>[
								'name'=>'马六',
								'sex'=>'男',
								'age'=>40,
								],
							],
					];
		?>
	</body>
</html>