<?php
//ע��ҳ�� ����ɾ��session��Ϣ
session_start();//��ʾ��Ҫ����session
unset($_SESSION);//ɾ��session����
$_SESSION = array();//����session����
define('TITLE',"LOGOUT");
include('../template/header.html');
//ʹ��session��ӡע����Ϣ
print '<h2>Welcome to the Club~</h2>';
print 'You are now logged out</p>';
print 'Thanks for using !';
include('../template/footer.html');
?>