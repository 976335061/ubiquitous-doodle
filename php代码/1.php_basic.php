<!<?php echo "DOCTYPE" ?> html>
<html>
	<<?php echo "head" ?>>
		<title>PHP：基本使用</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php 
			//这是一段输出
			echo "我是由php进行解析的代码！";
			
			echo "测试";
		?>
		
		<script language="php">
			echo "测试";
		</script>
		
		<?php 
			//第一个函数
			function test(){
				// 单行注释s
				echo "函数体";
				
			}
			
			
			//第二个函数
			function test2(){
				# 脚本注释
				echo "函数体";
				
			}
			
			/**
			 * 函数名：test3
			 * 函数功能：xxx
			 * 完成时间：xxx
			 * 作者：xx
			 */
			function test3(){
				
			}
			
			
			/**
			 * 类名：Meinv
			 * 功能：xxx
			 * 时间：xxx
			 * 作者：xxx
			 * 参数：xxx
			 */
			class Meinv{
				/* 多行注释 */
			}
		?>
	</body>
</html>