<?php 
	
	//1.验证账号【大写字母开头，可包含大小写字母+阿拉伯数字+下划线+6-10位长度】
	$str = "Fangdaluo";
	$patt = "/^[A-Z]\w{5,9}$/";
	preg_match_all($patt, $str, $res);
	
	//2.验证密码【大小写字母+阿拉伯数字+下划线+特殊符号】
	$str = "fangdaluo123^&^%";
	$patt = "/^[\w\W]{6,16}$/";
	preg_match_all($patt, $str, $res);
	
	//3.验证手机
	$str = "15510786918";
	$patt = "/^1[3-9]\d{9}$/";
	preg_match_all($patt, $str, $res);
	
	//4.验证IP地址
	$str = "191.0.0.1";	//0.0.0.0   255.255.255.255     0-255  9.12.12.12  10.12.12.12
	$patt = "/^((2[0-4]\d|25[0-5]|[01]?\d\d?)\.){3}(2[0-4]\d|25[0-5]|[01]?\d\d?)$/";
	preg_match($patt, $str, $res);
	var_dump($res);
	
	//5.验证电子邮箱
	$str = "756872006@qq.com";	
	$patt = "/^[a-zA-Z0-9]{3,50}@(offcn|qq|163|sina|baidu|tmall|alibaba|gmall)\.(com|cn)$/";
	preg_match($patt, $str, $res);
	var_dump($res);
	
	//6.身份证号码
	$str = "1301281990062727382938";
	$patt = "/^[a-zA-Z0-9]{3,50}@(offcn|qq|163|sina|baidu|tmall|alibaba|gmall)\.(com|cn)$/";
	preg_match($patt, $str, $res);
	var_dump($res);
?>