<?php
define('TITLE','LOGIN');
include('../template/header.html');
print "<h2>Login Form</h2>";
    if($_SERVER['REQUEST_METHOD'] == 'POST')//��֤���Ѿ��ύ
    {
        session_start();//����session����
        $_SESSION['email'] = $_POST['email'];//�����¼ʱ���email��ַ
        $_SESSION['logedin'] = time();//��¼ʱ��
        //���û���λ����ӭҳ��
        ob_end_clean();//��ջ���
        header('Location:welcome.php');
        exit();//ȡ����ǰ�ű���ִ�� ��Ϊҳ���Ѿ�����λ�������ĵط���
    }
    print '
    <form action = "welcome.php" method = "post" >
    <p>Email Adrress <input type="email" name="email" size=20 required/></p>
    <p>Password &nbsp&nbsp&nbsp&nbsp<input type="password" name="password" size=20 required/></p>
    <p ><input type="submit" name="submit" value="login in" size=/></p>
    </form>
    ';
include('../template/footer.html');
?>
