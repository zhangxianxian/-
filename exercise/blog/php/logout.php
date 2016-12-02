<?php
//注销页面 用于删除session信息
session_start();//表示需要访问session
unset($_SESSION);//删除session变量
$_SESSION = array();//重置session数组
define('TITLE',"LOGOUT");
include('../template/header.html');
//使用session打印注销信息
print '<h2>Welcome to the Club~</h2>';
print 'You are now logged out</p>';
print 'Thanks for using !';
include('../template/footer.html');
?>