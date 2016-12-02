<?php
//欢迎页面 当用户登录成功后 被重定向到该页面
session_start();//表示需要访问session
define('TITLE',"WELCOME~");
include('../template/header.html');
//使用session打印欢迎信息
print '<h2>Welcome to the Club~</h2>';
print 'hello~'.$_SESSION['email'].'!</p>';
print 'you have been logged since :'.date('g:i a',$_SESSION['logedin']);
?>
<!--<h2>Welcome to the Club~</h2>-->
<!--<p>you have successfully logged in and can now take advantage of everything the site has to offer.<p>-->
<p><a href="logout.php">Click here  to logout.</a></p>
<?php
include('../template/footer.html');
?>