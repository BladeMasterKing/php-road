<?php
/**
 * 文件写入
 */
$str_to_write = "写入文件";
$fp = fopen("./file_demo.txt", 'ab');
if(fwrite($fp, $str_to_write, strlen($str_to_write))){
    echo "成功";
}   else {
    echo "错误";
}
fclose($fp);

/**
 * 文件读取
 */
$fb = fopen("./file_demo.txt", 'rb');
if (!$fb){
    echo "没有信息";
    exit;
}
while(!feof($fb)){
    $order = fgets($fb, 2048);
    echo $order."\n";
}
fclose($fb);