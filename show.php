<?php date_default_timezone_set('PRC'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>文本式留言板 - 查看留言</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php 
			//1.从数据库当中提取所有信息出来
			$contents = file_get_contents('./message.txt');
			
			//2.首先，按@@，将留言拆分成多条
			$list = explode('@@', $contents);
			
			//3.将数组中最后一个单元的空信息弹出去
			array_pop($list);
		?>
		<center>
			<h2>查看留言</h2>
			<a href="./add.php">前去留言</a> |
			<a href="./show.php">查看留言</a>
			<hr/>
			<table border='1' width='1300' cellspacing="0" cellpadding="5">
				<tr>
					<th>ID</th>
					<th>标题</th>
					<th>作者</th>
					<th>内容</th>
					<th>留言时间</th>
					<th>ip地址</th>
					<th>操作</th>
				</tr>
		<?php 
			//4.将拆分好的数组，遍历到表格中
			foreach($list as $key=>$val){
				
				//5.按##拆分每一条留言信息
				$info = explode('##', $val);
				
		?>
				<tr align="center">
					<td><?php echo $key ?></td>
					<td><?php echo $info[0] ?></td>
					<td><?php echo $info[1] ?></td>
					<td><?php echo $info[2] ?></td>
					<td><?php echo $info[3] ?></td>
					<td><?php echo $info[4] ?></td>
					<td>
					<?php 
						if($_SERVER['REMOTE_ADDR']=='192.168.53.22'){
					?>
							<a href="./doAction.php?a=delete&id=<?php echo $key ?>">删除</a>
					<?php 
						}
					?>
						<a href="">修改</a>
					</td>
				</tr>
		<?php 
			}
		?>
			</table>
		</center>
	</body>
</html>