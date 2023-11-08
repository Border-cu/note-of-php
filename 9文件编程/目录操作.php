<?php  

    //目录操作

    //创建目录
    $res = @mkdir('directory');
    //var_dump($res);

    //删除目录
    @rmdir('dir');

    //读取目录
    $r = opendir('uploads');
    //var_dump($r);

    //读取资源
    //echo readdir($r),'<br/>';

    //循环遍历输出
    while($file = readdir($r)){
        echo $file,'<br/>';
    }

    //关闭资源
    closedir($r);
?>