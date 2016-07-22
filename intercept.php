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
						<td height="257" align="center" valign="top" background="images/image_08.gif"><table width="600" height="271" border="0" cellpadding="0" cellspacing="0">
							<tr>
									<td height="22" align="center" valign="top" class="word_orange"><strong>本站公告信息</strong></td>
								</tr>
								<tr>
									<td height="249" align="center" valign="top"><table width="460" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFCC" bgcolor="#DFDFDF">
										<?php 
										include("conn.php");
										$sql=mysql_query("select * from tb_affiche order by createtime desc");
										$info=mysql_fetch_array($sql);
										if($info==false){
											echo "本站暂无公告信息！";
										}else{
											do{
												?>
												<tr bgcolor="#E3E3E3">
													<td height="24" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;<img src="images/xing.gif" width="9" height="9">
														<?php //include_once("function.php"); //echo chinesesubstr($info["title"],0, 30);//此函数是自定义函数，在function.php中
														echo mb_substr($info["title"],0,30,"utf-8");
														if(strlen($info["title"])>30){echo "...";}
														?>
														</td></tr>
														<?php 
											}while($info=mysql_fetch_array($sql));
										}
										mysql_free_result($sql);//关闭记录集
										mysql_close($conn);//关闭mysql数据库服务器
										?>
										</table>
										</td>
										</tr>
										</table>
										</td>
										</tr>
										</table>
										</td>
										</tr>
										<tr>
										<td bgcolor="#F0F0F0"></td>
										<td height="43" background="images/image_12.gif"></td>
										</tr>
										</table>
										</body>
										</html>
								