<?php

    //PHP通过header设置响应头

    //content-type设置
    //header('Content-type:text/html;charset=utf-8');
    //echo '中国你好！';

    //location：立即重定向
    //header('Location:20select.php');
    //echo '中国你好！';

    //refresh：延时重定向
    //header('Refresh:3;url=20select,php');
    //echo '中国你好！';

    //Content-disposition
    header('Content-disposition:attachment;filename=girl.jpg');
    echo 'hello world';
?>