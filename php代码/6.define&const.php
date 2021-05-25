<!DOCTYPE html>
<html>
	<head>
		<title>PHP常量：define定义</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php 
			//1.定义常量 define(常量名，常量值)
			/*
				四种标量：
					字符串：√
					整数：	√
					浮点：	√
					布尔：	√
				两种复合：
					数组：	√
					对象：	×
				两种特殊：
					资源：	√
					空：	√
			*/
			
			//字符串
			define('HOST','127.0.0.1');
			
			//浮点
			define('USER',3.14);
			
			//整形
			define('PASS',1234);
			
			//布尔
			define('DBNAME',true);
			
			//数组
			define('TEST',[10,20,30,40,50]);
			
			//对象 ——> 实例化一个对象出来
			class Meinv{}
			$meinv = new Meinv;
			//define('OBJECT',$meinv);	//常量不能存储对象类型的数据
			
			//资源 -> 通过打开一个本地目录获取资源
			$resource = opendir('./');
			define('RESOURCE',$resource);
			
			//空型
			define('MONEY',null);
			
			//2. 定义变量
			$host = '10.1.1.2';
			$user = 'admin';
			$pass = '1234';
			$dbname = 'shanxi';
			
			//3.销毁常量 / 变量
			//unset(HOST);		//常量无法销毁
			unset($host);		//销毁变量
			
			//4.修改常量 / 变量
			//define('HOST','105.111.11.1');	//常量不能修改
			$host = '10.1.1.2';
			
			//打印常量 / 变量【常量使用不需要跟任何 $ 符号】
			var_dump(HOST);
			var_dump(USER);
			var_dump(PASS);
			var_dump(DBNAME);
			var_dump(TEST);
			var_dump(RESOURCE);
			var_dump(MONEY);
			
			var_dump($host);
		?>
	</body>
</html>