<?php 
	
	//1.将指定网站的页面内容全部拿过来
	$contents = file_get_contents('https://sspai.com/');
	
	//2.定义正则模式 
	/*
		<div class="title text_ellipsis2" data-v-44a74e79>
        新玩意 064｜少数派的编辑们最近买了啥？
      </div>
	*/
	$patt = '/<div class="title text_ellipsis2" data-v-44a74e79>(.*?)<\/div>/s';
	
	//3.开始匹配
	//preg_match_all($patt, $contents, $res);
	//var_dump($res);
	
	
	
	
	
	
	
	//1.将天涯论坛网站的页面内容全部拿过来
	$contents = file_get_contents('http://bbs.tianya.cn/list-university-1.shtml');
	
	//2.定义正则模式
	/*
		<a href="/post-university-763607-1.shtml" target="_blank">
							我可能比自己的想象中更喜欢你
						</a>
	*/
	$patt = '/<a href="\/post-university-.*?-1.shtml" target="_blank">(.*?)<\/a>/s';
	
	//3.开始匹配
	preg_match_all($patt, $contents, $res);
	
	var_dump($res);
?>