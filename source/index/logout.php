<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-31 21:57:37
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class logout extends BaseUser{function index(){$陿鞒�="time";$YudeFvP0=$陿鞒�();$YudvPZ3=$YudeFvP0-1;setcookie('in_userid','',$YudvPZ3,IN_PATH);$霄惐茹�="time";$YudeFvP0=$霄惐茹�();$YudvPZ3=$YudeFvP0-1;setcookie('in_username','',$YudvPZ3,IN_PATH);$儏戈勦�="time";$YudeFvP0=$儏戈勦�();$YudvPZ3=$YudeFvP0-1;setcookie('in_userpassword','',$YudvPZ3,IN_PATH);redirect('/index/login');}}
?>