<?php
//��ӭҳ�� ���û���¼�ɹ��� ���ض��򵽸�ҳ��
session_start();//��ʾ��Ҫ����session
define('TITLE',"WELCOME~");
include('../template/header.html');
//ʹ��session��ӡ��ӭ��Ϣ
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