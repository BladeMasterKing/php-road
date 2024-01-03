<?php
/**
 * 改变错误报告方式
 * Error类抛出,可以catch
 */


 /**
  * 优化异常处理
  * 内置错误类 ValueError
  * throw 作用于表达式
  * 捕获异常不存储到变量
  */
  $nullable_value = null;
  try{
    $value = $nullable_value ?? throw new InvalidArgumentException();
  } catch(InvalidArgumentException){
    var_dump("发生异常");
  }
  