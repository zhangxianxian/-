//<?php
//define('TITLE','sql');
//include('../template/header.html');
//print "<h2>SQL connect</h2>";
//if($dbc =@mysql_connect('localhost','root','root')){//链接到mysql
//    print '<P>Successfully connected to MySQL!</P>';
//    if(@mysql_query('CREATE DATABASE somedb',$dbc))//创建数据库somedb
//        print '<p> The database has been created!</P>';
//    else
//        print '<p style = "color: red"> Could not create the database!'.mysql_error($dbc).'</p>';
//    mysql_close($dbc);//关闭数据库链接
//}
//else
//    print '<P style ="color:red">Could not connected to MySQL!'.mysql_error()."</p>";
//include('../template/footer.html');
//?>
