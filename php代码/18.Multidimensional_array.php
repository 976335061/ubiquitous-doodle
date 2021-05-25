<!DOCTYPE html>
<html>
	<head>
		<title>PHP数组：多维数组</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			//一维数组
			$stu = [
					'name'=>'张三',
					'sex'=>'男',
					'age'=>18,
					];
					
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
					];
					
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
					
			var_dump($stu);
			var_dump($stus);
			var_dump($stuList);
			
			//请快速获取马六的年龄
			var_dump($stuList['two']);
			var_dump($stuList['two'][1]);
			var_dump($stuList['two'][1]['age']);
		?>
	</body>
</html>