<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>公告信息管理</title>
	</head>
	<?php
		
		include("conn.php");
		$title=$_POST["txt_title"];
		$content=$_POST["txt_content"];
		$createtime=date("Y-m-d H:i:s");
		$sql=mysql_query("insert into tb_affiche (title,content,createtime) values('$title','$content','$createtime')");
		//插入记录后mysql_query()函数返回true,不是结果集。
		if($sql){echo "<script>alert('公告信息添加成功!')</script>";
		echo "<script> window.location.href='search_affiche.php'</script>";
		//插入新纪录成功直接显示新记录
		}else{
			echo "<script> alert('公告信息添加失败！')</script>";
			echo "<script> window.location.href='index.php'</script>";//插入记录失败返回主页
		};
		//由于$sql变量是逻辑型变量，所以mysql_free_result($sql)代码不能使用。
		mysql_close($conn);
		
		?>
		<body>
			
		</body>

	</html>