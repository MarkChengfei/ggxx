<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>公告信息管理</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<table width="828" height="522" border="0" bordercolor="red" align="center" cellspacing="0" cellpadding="0" id="__01" >
		<tr><!--表一，红色线-->
			<td background="images/image_01.gif">&nbsp;</td>
			<td height="140" background="images/image_02.gif">&nbsp;</td>
		</tr>
		<tr><!--表一第1行，第一个单元向下合并了3行-->
			<td width="202" rowspan="3" valign="top" bgcolor="#F0F0F0"><table width="202" border="0" cellpadding="0" cellspacing="0"><tr>
				<td><?php include("menu.php");?></td></tr></table></td>
			<td height="34" background="images/image_04.gif">&nbsp;</td>
		</tr>
		<tr>
			<td height="38" background="images/image_06.gif">&nbsp;</td>
		</tr>
		<tr>
			<td height="270" valign="top">
				<table width="626" height="100%" border="0" bordercolor="blue" cellpadding="0" cellspacing="0"><!--表2，蓝色线-->
					<tr>
						<td height="257" align="center" valign="top" background="images/image_08.gif">
							<table width="600" height="271" border="0" cellpadding="0" cellspacing="0"><!--表3,紫色线-->
								<tr>
									<td height="22" align="center" valign="top" class="word_orange"><strong>公告信息分页显示</strong></td>
								</tr>
								<tr>
									<td height="249" align="center" valign="top"><table width="550"  border="0" bordercolor="#FFFFFF" cellpadding="1" cellspacing="1" bgcolor="#999999">
										<tr align="center" bgcolor="#f0f0f0">
											<td width="221">公告标题</td>
											<td width="329">公告内容</td>
										</tr>
										<?php
											include("conn.php");
											/*$page为当前页，如果page为空，则初始化为1*/
											if(isset($_GET["page"])){
												$page=$_GET["page"];
												if($page=="")$page=1;
												if(is_numeric($page)){
													$page_size=4;//每页显示4条记录
													$query="select count(*) as total from tb_affiche";
													$result=mysql_query($query);//查询表中的记录总数只有一条记录
													$message_count=mysql_result($result,0,"total");//mysql_result()提取0行字段别名为total的值，所以$message_count里放置的是tb_affiche表的记录总数。
													$page_count=ceil($message_count/$page_size);//根据记录总数除以每页的记录数求得所分的页数
													$offset=($page-1)*$page_size;//计算一下从第几条记录开始循环
													$sql=mysql_query("select * from tb_affiche order by createtime desc limit $offset,$page_size");
													$row=mysql_fetch_object($sql);//取出一条记录
													
												}
												if(!$row){
													echo "<font color='red'>暂无公告信息!</font>";
												
												}else{
													do{
														?>
														<tr bgcolor="#FFFFFF"><td><?php echo $row->title;?></td><td><?php echo $row->content;?></td></tr>
														<?php
													}while($row=mysql_fetch_object($sql));
												}
											}
?>
</table><br>
<table width="550" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<!--翻页条-->
		<td width="37%">&nbsp;&nbsp;页次:<?php echo $page;?>/<?php echo $page_count;?>页&nbsp;记录:<?php echo $message_count;?>条&nbsp;</td>
		<td width="63%" align="right"><?php
		/*如果当前页不是首页*/
		if($page!=1){/*显示首页超链接*/
		echo "<a href=page_affiche.php?page=1>首页</a>&nbsp;";
		/*显示上一页超链接*/
		echo "<a href=page_affiche.php?page=".($page-1).">上一页</a>&nbsp;";}
		/*如果当前页不是尾页*/
		if($page<$page_count){
			//显示下一页超链接
			echo "<a href=page_affiche.php?page=".($page+1).">下一页</a>&nbsp;";
			//显示尾页超链接
			echo "<a href=page_affiche.php?page=".$page_count.">尾页</a>";
		}
		mysql_free_result($sql);
		mysql_close($conn);
		 ?>
	</tr>
</table></td>
</tr></table></td>
</tr></table></td>
</tr>
<tr>
	<td bgcolor="#F0F0F0"></td>
	<td height="43" background="images/image_12.gif"></td>
	
</tr>
</table>
</body>
</html>