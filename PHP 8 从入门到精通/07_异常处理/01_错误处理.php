<?php
/**
 * die 语句调试
 */
if(!file_exists("a.out")){
    die("文件不存在");
} else {
    $file = fopen("a.out", "r");
}

/**
 * 自定义错误与触发器
 */
function custom_error($errno, $errstr){
    echo "错误：[$errno] $errstr";
}
set_error_handler("custom_error");
trigger_error("自定义错误处理器");

/**
 * 错误记录
 * error_log("log", 1, "","")
 */