<meta  charset="utf-8">
	<?php 
	include("conn.php");
	$id=$_GET["id"];
	$sql=mysql_query("delete from tb_affiche where id=$id");
	if($sql){
		echo "<script> alert('公告信息删除成功！');window.location.href='delete_affiche.php';</script>";
	}else{
		echo "<script>alert('公告信息删除失败！');history.back();</script>";
	}
	?>
