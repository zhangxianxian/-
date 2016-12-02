<?php
define('TITLE','REGISTER');
include('../template/header.html');
print "<h2>Register Form</h2>";
print '<style media="screen" type="text/css">
           .error{  color: red;  }
           tr{
            line-height:42px;

           }
           td{
           font-size:14px;
           width:130px;

           }
       </style>';
if($_SERVER['REQUEST_METHOD'] == 'POST')//检查表单是否提交
{
    $problem = false;
    if(substr_count($_POST['email'],'@')!=1)
        $problem = true;
    if($_POST['password']!=$_POST['c_password'])
    {
        $problem = true;
        print '<p class="error"> your password did not match your confirm password! please input right value!';
    }
    if($problem != true)
    {
        print ' Register successfully! ';
        print 'your user name is'.$_POST['email'].',and please remeber your password!';
        $body = 'Thanks for your registering ,please remeber your password ';
        mail($_POST['email'],'register confirmation',$body,"from:467592234@qq.com");//向注册用户自动发送验证邮件
        $_POST = array();//清空该数组
    }

}
?>
<form action="register.php" method="post" >
       <table>
           <tr><td>First name:</td><td><input type="text" name="first_name" required size="20" value="<?php if(isset($_POST['first_name']))
           {print htmlspecialchars($_POST[first_name]); }?>"/>  </td></tr>
            <tr><td>Second name:</td><td> <input type="text" name="second_name" required size="20" value="<?php if(isset($_POST['second_name']))
               {print htmlspecialchars($_POST[second_name]); }?>"/> </td></tr>
           <tr><td>Email Adrress:</td><td><input type="email" name="email" required size="20" value="<?php if(isset($_POST['email']))
                   {print htmlspecialchars($_POST[email]); }?>"/> </td></tr>
           <tr><td>Password:</td><td><input type="password" name="password" required size="20" value="<?php if(isset($_POST['password']))
                       {print htmlspecialchars($_POST[password]); }?>"/> </td></tr>
           <tr><td>Confirm Password:</td><td><input type="password" name="c_password" required size="20" value="<?php if(isset($_POST['c_password']))
                           {print htmlspecialchars($_POST[c_password]); }?>"/></td></tr>
           <tr><td></td><td><input type="submit" name="submit" value=" register "/></td></tr>
       </table>
</form>
<?php
include('../template/footer.html');
?>
