<?php 
	
	//1.定义字符串
	//$str = "263781956378261856678677777366333626621";
	
	//2.正则模式
	//$patt = "/[\w]/";
	//$patt = "/[\w]{3}/";
	//$patt = "/[\d]{1,2}/";
	//$patt = "/[\d]{1,}/";
	
	//3.正则匹配函数 
	//preg_match(正则模式，字符源，匹配结果)  		匹配结果为一维数组
	//preg_match_all(正则模式，字符源，匹配结果)	匹配结果为二维数组
	//$jieguo = preg_match($patt, $str, $res);
	//$jieguo = preg_match_all($patt, $str, $res);
	
	//var_dump($res);
	//var_dump($jieguo);

	
	//请定义一段正则模式，要求必须以大写字母开头，且只能包含大小写字母、阿拉伯数字和下划线 ,用户名长度在6~16位之间
	//1.定义字符源
	$str = "Fangdaluo1234567";
	
	//2.正则模式
	//$patt = "/^[F][\w]{5,15}$/";
	//$patt = "/[A-Z][\w]{4,14}o$/";
	$patt = "/.*?/";
	
	//3.开始匹配
	preg_match_all($patt, $str, $res);
	
	var_dump($res);
?>