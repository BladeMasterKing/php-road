<?php

/**
 * 文件类型
 * PHP 以 UNIX 的文件系统为模型。
 * Windows 系统只能获取 File、Dir、Unknown 三种文件类型
 * UNIX系统中，可以获得 Block（块设备文件）、Char（字符设备）、Dir、Fifo（命名管道）、File、Link（符号链接）、Unknown 七种类型
 */
echo filetype('/etc/passwd'); //普通文件
// echo filetype("/etc/grub.conf");  // link
echo filetype("/etc/"); // 文件夹
echo filetype("/dev/disk0"); // 块设备
echo filetype("/dev/ttyp0"); // 字符设备

/**
 * 文件属性
 * file_exists()    检查目录是否存在
 * filesize()       取得文件大小
 * is_readable()    文件是否可读
 * is_writable()    文件是否可写
 * is_executable()  文件是否可执行
 * filectime()      文件创建时间
 * filemtime()      文件修改时间
 * fileatime()      文件访问时间
 * stat()           获取文件大部分属性值数组
 */
function get_file_pro($file_name){
    if (!file_exists($file_name)){
        echo "目标文件 $file_name 不存在\n";
        return;
    }
    if (is_file($file_name)){
        echo "$file_name 是一个文件\n";
    }
    if (is_dir($file_name)){
        echo "$file_name 是一个文件夹\n";
    }

    echo "文件类型：".get_file_type($file_name)."\n";
    echo "文件大小：".get_file_size(filesize($file_name))."\n";

    if(is_readable($file_name))  echo "文件可读\n";
    if(is_writable($file_name))  echo "文件可写\n";
    if(is_executable($file_name))  echo "文件可执行\n";

    echo "文件创建时间: ".date('Y年m月j日', filectime($file_name))."\n";
    echo "文件最后更尬时间: ".date('Y年m月j日', filectime($file_name))."\n";
    echo "文件最后打开时间: ".date('Y年m月j日', filectime($file_name))."\n";
}

function get_file_type($file_name){
    switch(filetype($file_name)){
        case 'file': $file_type = '普通文件'; break;
        case 'dir' : $file_type = '目录文件'; break;
        case 'block' : $file_type = '块设备文件'; break;
        case 'char' : $file_type = '字符设备文件'; break;
        case 'fifo' : $file_type = '命名管道文件'; break;
        case 'link' : $file_type = '符号链接文件'; break;
        case 'unknown' : $file_type = '未知类型文件'; break;
        default : $file_type = '没有检测到文件类型'; break;
    }
    return $file_type;
}

function get_file_size($bytes){
    if($bytes >= pow(2, 40)){
        $return = round($bytes / pow(1024, 4), 2);
        $suffix = "TB";
    } elseif ($bytes >= pow(2, 30)){
        $return = round($bytes / pow(1024, 3), 2);
        $suffix = "GB";
    } elseif ($bytes >= pow(2, 20)){
        $return = round($bytes / pow(1024, 2), 2);
        $suffix = "MB";
    } elseif ($bytes >= pow(2, 10)){
        $return = round($bytes / pow(1024, 1), 2);
        $suffix = "KB";
    } else {
        $return = $bytes;
        $suffix = "Byte";
    }
    return $return." ".$suffix;
}
get_file_pro('./01_文件系统概述.php');




