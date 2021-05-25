<!DOCTYPE html>
<html>
	<head>
		<title>PHP函数：静态变量 & 超全局变量</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			//定义一个函数【可以传入任意个数的参数，并求得所有参数之和】
			function sum(){
				
				//统计用户传递了多少个参数进来
				var_dump(func_num_args());	//7
				
				//获取参数列表
				var_dump(func_get_args());	//array(0=>10,1=>20,2=>30...6=>70)
				
				//获取具体的某一个值
				var_dump(func_get_arg(3));	//40
				
				//用于存储求得的结果
				$sum = 0;
				
				//完成统计参数之和的功能
				for($i=0; $i<func_num_args(); $i++){
					
					$sum += func_get_arg($i);
				}
				
				return $sum;
			}
			
			$jieguo = sum(10,20,30,40,50,60,70,80,90);
			
			echo $jieguo;
		?>
	</body>
</html>