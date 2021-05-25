<!DOCTYPE html>
<html>
	<head>
		<title>PHP函数：回调函数</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			//回调函数，就是将一个函数以字符串的形式传递到另一个函数当中，并且该函数会对另一个函数的操作产生影响
			function test($guize){
				for($i=1; $i<=10; $i++){
					if($guize($i)){
						continue;
					}
					echo $i."<br/>";
				}
			}
			
			function guize($num){
				if($num==3){
					return true;
				}else{
					return false;
				}
			}
			
			test('guize');
		?>
	</body>
</html>