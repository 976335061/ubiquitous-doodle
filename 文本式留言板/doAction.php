<?php 
	
	//获取用户当前正在执行的操作
	switch($_GET['a']){
		
		case "insert":	//执行留言的添加
		
			//本文件专门用于处理用户执行的各项操作，例如：留言添加、留言删除、留言修改
			
			//留言添加【根据用户的提交方式进行接收】
			//$_POST['title'];
			//$_POST['author'];
			//$_POST['content'];
			
			//1.判断用户提交的账号、密码、留言信息是否为空 empty()：为空 true   否则 false
			if(empty($_POST['title']) || empty($_POST['author']) || empty($_POST['content'])){
				die("<script>alert('您有信息未填写！请确保全部填写后，再进行提交！');window.location.href='./add.php'</script>");
			}
			
			//2.将用户提交信息中的可能存在的恶意代码去除
			$_POST['title'] = strip_tags($_POST['title']);
			$_POST['author'] = strip_tags($_POST['author']);
			$_POST['content'] = strip_tags($_POST['content']);
			$_POST['time'] = date('Y-m-d H:i:s');
			$_POST['ip'] = $_SERVER['REMOTE_ADDR'];
			
			//3.验证用户提交的信息中是否包含了##或@@这类恶意代码
			if(strpos($_POST['title'],'#') !== false || strpos($_POST['author'],'@') !==false){ 
				die("<script>alert('您输入的信息有非法字符！请重新输入！');window.location.href='./add.php'</script>"); 
			}
			
			if(strpos($_POST['author'],'#') !== false || strpos($_POST['author'],'@') !==false){ 
				die("<script>alert('您输入的信息有非法字符！请重新输入！');window.location.href='./add.php'</script>"); 
			}
			
			if(strpos($_POST['content'],'#') !== false || strpos($_POST['content'],'@') !==false){ 
				die("<script>alert('您输入的信息有非法字符！请重新输入！');window.location.href='./add.php'</script>"); 
			}
			
			//4.将用户的留言信息拼装成字符串
			$contents = implode('##',$_POST)."@@\n";
			
			//5.将用户的留言信息追加写入message.txt
			file_put_contents('./message.txt', $contents, FILE_APPEND);
			
			//6.提示用户，留言成功
			echo "<script>
					  alert('恭喜，留言成功！');
					  window.location.href = './show.php';
				  </script>";
			break;
			
		case "delete":	//执行留言的删除
			
			//1.获取正在被删除的留言id【下标】
			$id = $_GET['id'];
			
			//2.从message.txt数据库中提取所有的留言信息
			$contents = file_get_contents('message.txt');
			
			//3.按@@拆分每一条留言信息
			$list = explode('@@',$contents);
			
			//4.删除指定id的信息
			unset($list[$id]);
			
			//5.将删除之后的数组，按@@再拼装回去
			$contents = implode('@@', $list);
			
			//6.将拼装好的信息，覆盖写入message.txt
			file_put_contents('message.txt', $contents);
			
			//7.提示用户删除成功！
			echo "<script>
					  alert('恭喜，删除成功！');
					  window.location.href = './show.php';
				  </script>";
			
			break;
		
	}
	
	
?>