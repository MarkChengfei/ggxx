<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>公告信息管理</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
	<script type="text/javascript">
		function check(form){//form是形参
			if(form.txt_title.value==""){
				alert("请输入公告栏标题!");
				form.txt_title.focus();
				return false;
			}
			if(form.txt_content.value==""){
				alert("请输入公告内容!");
				form.txt_content.focus();
				return false;
			}
			
		}
	</script>
	<table width="828" height="522" border="0" bordercolor="red" align="center" cellspacing="0" cellpadding="0" id="__01" >
		<tr><!--表一，红色线-->
			<td background="images/image_01.gif">&nbsp;</td>
			<td height="140" background="images/image_02.gif">&nbsp;</td>
		</tr>
		<tr><!--表一第1行，第一个单元向下合并了3行-->
			<td width="202" rowspan="3" valign="top" bgcolor="#F0F0F0"><?php include("menu.php");?></td>
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
							<table width="600" height="257" border="0" bordercolor="#f0f" cellpadding="0" cellspacing="0"><!--表3,紫色线-->
								<tr>
									<td height="22" align="center" valign="top" class="word_orange"><strong>添加公告信息</strong></td>
								</tr>
								<tr>
									<td height="235" align="center" valign="top"><table width="500" height="226" border="0" bordercolor="#0f0" cellpadding="0" cellspacing="0"><!--表4，绿色线-->
										<tr>
											<td height="226" align="center" valign="top"><form name="form1" method="post" action="check_add_affiche.php">
												<table width="520" height="212" border="0" bordercolor="#f70" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"><!--表5，橙色线-->
													<tr>
														<td width="87" align="center">公告主题:</td>
														<td width="433" height="31"><input name="txt_title" type="text" id="txt_title" size="40"></td>
													</tr>
													<tr>
														<td height="124" align="center">公告内容:</td>
														<td><textarea name="txt_content" cols="50" rows="8" id="txt_content"></textarea></td>
													</tr>
													<tr>
													<td height="40" colspan="2" align="center"><input name="Submit" type="submit" class="btn_grey" value="保存" onclick="return check(form1);">&nbsp;<input type="reset" name="Submit2" value="重置">
														
													</td>
													</tr>
												</table>
													
											</form></td>
										</tr>
									</table></td>
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
