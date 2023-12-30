<?php
/**
 * 使用括号把变量或函数括起来，函数或变量将不再起作用
 */
function get_array(){
    return [100,200,300,400];
}
$last = array_pop(get_array());

$last = array_pop((get_array()));