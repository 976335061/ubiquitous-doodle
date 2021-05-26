<?php date_default_timezone_set('PRC'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>文本式留言板 - 发布留言</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<center>
			<h2>请留言</h2>
			<a href="./add.php">前去留言</a> |
			<a href="./show.php">查看留言</a>
			<hr/>
			<form action="doAction.php?a=insert" method="post">
				<table border='0' width='300' cellspacing='0' cellpadding='5'>
					<tr>
						<td align="right">标题：</td>
						<td><input type="text" name="title" value="如何找到男女朋友？" readonly /></td>
					</tr>
					<tr>
						<td align="right">作者：</td>
						<td><input type="text" name="author" value="" /></td>
					</tr>
					<tr>
						<td align="right">内容：</td>
						<td>
							<textarea name="content" ></textarea>
						</td>
					</tr>
					<tr align='center'>
						<td colspan="2">
							<input type="submit" value="留言"/>
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
		</center>
		
		<!--通过js做表单验证-->
		<script>
			//1.获取标题、作者、内容文本框
			//var title = document.getElementsByName('title')[0];
			//var author = document.getElementsByName('author')[0];
			//var content = document.getElementsByName('content')[0];
			//
			////2.失去焦点事件
			//title.onblur = function(){
			//	
			//	//3.获取到值
			//	if(this.value.length==0){
			//		alert('不能提交空信息！');
			//	}
			//}
			//
			////4.失去焦点事件
			//author.onblur = function(){
			//	
			//	//5.获取到值
			//	if(this.value.length==0){
			//		alert('不能提交空信息！');
			//	}
			//}
			//
			////6.失去焦点事件
			//content.onblur = function(){
			//	
			//	//7.获取到值
			//	if(this.value.length==0){
			//		alert('不能提交空信息！');
			//	}
			//}
		</script>
	</body>
</html>