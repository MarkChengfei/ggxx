<meta charset="utf-8">
<?php 
include("conn.php");
$title=$_POST["txt_title"];
$content=$_POST["txt_content"];
$id=$_POST["id"];
$sql=mysql_query("update tb_affiche set title='$title',content='$content' where id=$id");
if($sql){
	echo "<script> alert('公告信息编辑成功！');window.location.href='search_affiche.php';</script>";
}else{
	echo "<script> alert('公告信息编辑失败！');history.back();</script>";
	//返回到修改提交前的状态
	//echo "<script>alert('公告信息编辑失败！');window.location.href='modify.php?id=$id';</script>";
}	
?>

