<?php

    //PHP操作数据库的基本连接操作

    //建立连接
    //1.主机地址
    $link = mysqli_connect('localhost:3306','cx_borderc_xyz','1821546075');
    //var_dump($link);

    //设定字符集
    //mysqli_query($link,'set names utf8');
    $res = mysqli_set_charset($link,'utf8');  
    //var_dump($res);

    //选择数据库
    $res = mysqli_query($link,'use test');
    //var_dump($res);

    //数据库操作：对数据的增删改查

    //关闭资源
    $res = mysqli_close($link);
    var_dump($res);
?>