<?php
/**
 * 默认空参构造方法
 * PHP 5 之前，构造方法必须与类名相同，
 * PHP 5 之后，构造方法名为`__construct`
 * 
 * 析构方法：对象销毁方法
 * `__destruct`
 */
class Guests{
    private $name;
    private $gender;

    function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
    function get_name(){
        return $this->name;
    }
    function get_gender(){
        return $this->gender;
    }
    function __destruct()
    {
        unset($this->name);
        unset($this->gender);
    }
}

$xiao_ming = new Guests('小明', '男');

echo $xiao_ming->get_name()." ".$xiao_ming->get_gender()."\n";
