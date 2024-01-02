<?php
/**
 * 类的写法
 * <?php
 * 权限修饰符 class 类名{
 *  类的内容
 * }
 * ?>
 */

 /**
  * 权限修饰符
  * privare     各个属性和方法访问
  * public      类内部访问
  * protected   类内部访问，可以子类访问
  */
class Student{
    public $name;
    function get_ip(){

    }
}

/**
 * 实例化
 * $变量名 = new 类名([参数]);
 */
$xiao_ming = new Student();

/**
 * 访问成员属性和方法
 * $变量名->成员方法
 * $变量名->成员属性
 * 
 * $this 类的成员方法中
 * 关键字::变量名/方法名
 * 关键字包括 parent self 类名
 */
class Guests{
    private $name;
    private $gender;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_gender($gender){
        $this->gender = $gender;
    }
    function get_gender(){
        return $this->gender;
    }
}
$xiao_ming = new Guests();
$xiao_ming->set_gender('男');
echo $xiao_ming->get_gender();

