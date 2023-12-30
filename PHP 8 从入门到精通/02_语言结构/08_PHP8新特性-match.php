<?php
/**
 * match 关键字完成数值转换
 */
$a = "false";
$b = match($a){
    "true" => 1,
    "false" => 0,
    "null" => NULL
};
var_dump($b);
echo $b;

/**
 * 联合类型 和 `mixed`类型
 * 联合类型声明函数并接收多个不同类型的值，是两种或多种类型的集合
 * mixed类型等价于 array|bool|callable|float|null|object|resource|string
 * 
 */
// declare(strict_types=1);
function debug_function(mixed ...$data){
    var_dump(($data));
}
debug_function(1, "黄金", []);
exit;

/**
 * 参数列表使用尾部逗号
 */
function method_with_many_arguments(
    $a,
    $b,
    $c,
){
    var_dump("");
}