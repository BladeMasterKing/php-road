<?php

/**
 * 解析目录路径
 * 绝对路径
 * $unix_path="/var/www/html/index.php"     unix系统的绝对路径，使用 "/" 作为路径分隔
 * $win_path="C:\\Appserv\\www\\index.php"  windows系统的绝对路径，使用 "\" 作为路径分隔
 * $win_path2="C:/Appserv/www/index.php"    windows也接受 "/" 作为路径分隔
 * 
 * $file_name1="file.txt"   相对路径，当前目录下的 file.txt 文件
 * $file_name2="javascript/common.js"   相对路径，当前目录 javascript 子目录下的 common.js 文件
 * $file_name3="../img/logo.gif"   相对路径，上级目录 子目录下的 logo.gif 文件
 */

 
/**
 * 系统函数
 * basename()   返回路径中文件名的部分
 * dimname()    返回去掉文件名的目录
 * pathinfo()   返回一个数组，包含 dimname basename extension
 */
