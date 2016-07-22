<?php 
//在utf-8字符集里，完整截取中英文字符串的函数
function chinesesubstr($str,$len){
	$tmpstr="";
	for($i=0;i<$len;$i++){
		$value=ord(substr($str, $i,1));
		if($value<128){
			$tmpstr.=substr($str, $i,1);
		}
		elseif($value>191 && $value<224){
			$tmpstr.=substr($str, $i,2);$i++;
		}
		elseif($value>223 && $value<240){
			$tmpstr.=substr($str, $i,3);$i+=2;
		}
		elseif($value>239 && $value<248){
			$tmpstr.=substr($str, $i,4);$i+=3;
		}
	}
	return $tmpstr;
}
?>