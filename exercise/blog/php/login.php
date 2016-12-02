<?php
define('TITLE','LOGIN');
include('../template/header.html');
print "<h2>Login Form</h2>";
    if($_SERVER['REQUEST_METHOD'] == 'POST')//验证表单已经提交
    {
        session_start();//开启session缓冲
        $_SESSION['email'] = $_POST['email'];//保存登录时候的email地址
        $_SESSION['logedin'] = time();//登录时间
        //讲用户定位到欢迎页面
        ob_end_clean();//清空缓存
        header('Location:welcome.php');
        exit();//取消当前脚本的执行 因为页面已经被定位到其他的地方了
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
