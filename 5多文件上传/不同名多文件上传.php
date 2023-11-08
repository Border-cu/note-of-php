<?php

    header('Content-type:text/html;charset=utf-8');
    echo '<pre>';

    //查看不同情形下的多文件上传结构
    //print_r($_FILES);

    //不通文件遍历处理方式
    foreach($_FILES as $file)
    {
        //$file是一个完整地上传文件信息：找到临时路径，指定存放路径
        if(is_uploaded_file($file['tmp_name']))
        {
            //存储
            move_uploaded_file($file['tmp_name'],'uploads/'.$file['name']);
        }
    }


?>