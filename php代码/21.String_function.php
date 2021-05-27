<!DOCTYPE html>
<html>
	<head>
		<title>PHP字符串：函数</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php 
			//1.trim()：多余字符串去除【ltrim；去除左侧多余字符，rtrim：去除右侧多余字符】
			$str = "@@Naturo@@";
			
			//默认删除空格
			//$str = rtrim($str,'@@');
			//$res = ltrim($str,'@@');
			
			//同时去除左右两侧
			$res = trim($str,'@@');
			
			
			
			//2.字符串拆分与拼装
			$contents = "毛不易##张哲瀚##蔡徐坤##范丞丞##肖战##王一博";
			
			//按##将字符串拆分成一个数组
			$res = explode('##',$contents);
			
			//将结尾空白的数组单元给弹出去
			//array_pop($res);
			
			//升级操作
			$contents = "毛不易##张哲瀚##蔡徐坤##范丞丞##肖战##王一博@@胡歌##张国荣##梁朝伟##周润发##李连杰##吴孟达##周星驰@@张敏##朱茵##莫文蔚##王祖贤##张慧贤##陈慧琳##蔡少芬";
			
			//先按@@将字符串拆分成一个数组
			$namelist = explode('@@',$contents);
			
			//遍历拆分之后的数组
			foreach($namelist as $key=>$val){
				
				//按##将字符串拆分每一组信息
				$res = explode("##",$val);
				
				var_dump($res);
			}
			
			
			
			
			//数组的拼装【霸王别姬】
			$stars = ['陈小春','周杰伦','林俊杰','蔡国庆','唐国强'];
			
			//开始拼装
			$res = implode('##',$stars);
			
			var_dump($res);
			
			
			
			
			//超全局变量
			//var_dump($GLOBALS);
			
			//从$_SERVER超全局数组中，提取了访问者IP  Tor Browser 洋葱浏览器
			var_dump($_SERVER['REMOTE_ADDR']);
			
			
			//设置时区【只能当前脚本生效】
			date_default_timezone_set('PRC');
			
			//获取时间戳【秒数】
			var_dump(time());
			
			//获取日期 date(日期格式,时间戳);
			var_dump(date('Y-m-d H:i:s',time()));
			
			
			
			
			//文档内容的读取与设置   
			/*
				本地文件路径：./liuyan.txt    ../liuyan.txt		C:\test\liuyan.txt   
				网络文件路径：
			*/
			$res = file_get_contents('./liuyan.txt');
			
			//文档内容写入【覆盖写】
			file_put_contents('./liuyan.txt','李渊：飞哥是个帅哥！');
			
			//文档内容写入【追加写：FILE_APPEND】
			file_put_contents('./liuyan.txt','李白：床前明月光，地上鞋两双！',FILE_APPEND);
			var_dump($res);
			
		?>
	</body>
</html>