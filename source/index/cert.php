<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-31 21:57:37
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$YudZ3=require '../system/db.class.php';$YudeF0=call_user_func_array("header",array("Expires: Mon, 26 Jul 1997 05:00:00 GMT"));$YudeF0=call_user_func_array("header",array("Cache-Control: no-cache, must-revalidate"));$YudeF0=call_user_func_array("header",array("Pragma: no-cache"));$YudvPZ3="Content-type: text/html;charset=" . IN_CHARSET;$YudeF0=call_user_func_array("header",array(&$YudvPZ3));$YudbNZ5=!true;unset($YudtIbNZ6);$YudIWdu=$YudbNZ5;if($YudIWdu)goto YudeWjgx2;$YudeFbN2=call_user_func_array("strspn",array("KRMKOTdJ","7"));if($YudeFbN2)goto YudeWjgx2;if(isset($_SERVER['HTTP_ORIGIN']))goto YudeWjgx2;goto YudldMhx2;YudeWjgx2:$YudvPZ3=$_SERVER['HTTP_ORIGIN'];goto Yudx1;YudldMhx2:$YudvPZ3=NULL;Yudx1:$YudvPZ4="Access-Control-Allow-Origin: " . $YudvPZ3;$YudeF3=call_user_func_array("header",array(&$YudvPZ4));$YudeF0=call_user_func_array("header",array("Access-Control-Allow-Credentials: true"));unset($YudtIZ3);$cert=NULL;$YudeF0=call_user_func_array("SafeRequest",array('type','get'));$YudzAvPbN1=array();$YudeFbN2=call_user_func_array("array_key_exists",array(7,&$YudzAvPbN1));if($YudeFbN2)goto YudeWjgx4;$YudvPbNZ5=7+2;$YudeFbN3=call_user_func_array("is_string",array(&$YudvPbNZ5));if($YudeFbN3)goto YudeWjgx4;if($YudeF0)goto YudeWjgx4;goto YudldMhx4;YudeWjgx4:$YudZ3=$YudeF0;goto Yudx3;YudldMhx4:$YudZ3=0;Yudx3:unset($YudtIZ4);$type=$YudZ3;unset($YudtIZ3);$query=db('cert')->where('type',$type)->where('status','1')->select();foreach($query as $row){$YudZ3='<option value="' . $row['in_dir'];$YudZ4=$YudZ3 . '" id="cert_';$YudZ5=$YudZ4 . $row['in_dir'];$YudZ6=$YudZ5 . '">';$YudZ7=$YudZ6 . $row['in_name'];$YudZ8=$YudZ7 . '</option>';$cert=$cert.$YudZ8;$YudnWZ9=$cert;}$YudeFbN1=call_user_func_array("substr",array("vauiJ",16));if($YudeFbN1)goto YudeWjgx6;if($cert)goto YudeWjgx6;$YudeFbN0=call_user_func_array("str_repeat",array("hfHvTrVe",1));$YudbNZ4=$YudeFbN0==1;if($YudbNZ4)goto YudeWjgx6;goto YudldMhx6;YudeWjgx6:$YudZ3=$cert;goto Yudx5;YudldMhx6:$YudZ3='<option value="">No business certificate</option>';Yudx5:echo $YudZ3;
?>