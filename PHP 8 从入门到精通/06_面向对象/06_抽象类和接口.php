<?php
/**
 * 抽象类只能作为父类，不能实例化
 * 只有抽象方法，抽象方法没有具体方法实现内容
 */
abstract class MyObject{
    abstract function service();
}

/**
 * 接口
 * 单继承，多接口实现
 * 实现接口必须实现所有方法
 */
interface Maxmin{

}