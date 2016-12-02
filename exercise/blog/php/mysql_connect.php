<?php
define('TITLE','sql');
include('../template/header.html');
print "<h2>SQL connect</h2>";
if($dbc =@mysql_connect('localhost','root','root')){//链接到数据库
    print '<P>Successfully connected to MySQL!</P>';
    if(@mysql_select_db('somedb',$dbc))//选择数据库
        print '<p> The database has been selected!</P>';
    else
        print '<p style = "color: red"> Could not select the database!'.mysql_error($dbc).'</p>';

    mysql_close($dbc);
}
else
    print '<P style ="color:red">Could not connected to MySQL!'.mysql_error()."</p>";



include('../template/footer.html');
?>
