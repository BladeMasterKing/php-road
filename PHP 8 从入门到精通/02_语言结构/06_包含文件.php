<?php
/**
 * 引入其他PHP文件
 * 
 * require: 在脚本执行前加载进来，通常在PHP文件的开头或结尾
 * include: 在脚本执行到`include`语句才加载进来，通常在流程控制语句块中使用
 * 
 * 加载失败: `require` 加载失败会产生致命错误，程序退出；`include`会产生一个警告，程序继续执行
 * 
 * require_once 和 include_once
 * 这两个语句作用与 require 和 include 相同，区别在于如果文件已经被加载过，将不会被再次加载
 */