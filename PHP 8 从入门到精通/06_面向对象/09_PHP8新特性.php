<?php
/**
 * Attributes （注解）
 */

// #[Name1("苹果")]
// #[Goods1("name1", "price1")]
// #[
//     Param2("name2", "price2"),
//     Name2("香蕉")
// ]
// function newAttribute($arg = ''){}

// $obj = new ReflectionFunction('newAttribute');

/**
 * static 返回类型
 */
class Test{
    public $_name = '苹果';
    public function get_static(): static {
        return new static();
    }
}
$obj = new Test();
// var dump($obj -> get_static()->name);

/**
 * WeakMap
 * 弱映射
 */

 /**
  * 提升构造器属性
  * 允许从构造函数进行类属性声明和构造函数赋值
  */

  /**
   * 空安全字符串
   * ?-> 类中的属性和方法返回值，如果全等于NULL则断开并返回NULL
   */

   /**
    * Stringable 接口
    */

    /**
     * 重写允许可变参数
     */
    class A {
        function method(int $many, string $parameter, $here){

        }
    }

    class B extends A {
        function method(...$everything){

        }
    }