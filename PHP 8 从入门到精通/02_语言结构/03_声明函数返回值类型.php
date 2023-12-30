<?php
/**
 * 可以声明的返回值类型包括：int float bool string interfaces array callable
 * 通过在函数参数括号后添加 `: 变量类型` 来实现声明函数类型
 */
 
 # 实例
 declare(strict_types = 1);
 function return_int_value(int $value): int
 {
    return $value;
 }
 print(return_int_value(60));
