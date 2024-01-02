<?php
/**
 * 静态属性和方法
 * 静态 可以不实例化访问，不可用 $this
 * 类名::静态函数/属性
 */
class Gushi{
    static $a = "洛阳亲友如相问，一片冰心在玉壶";
}
echo Gushi::$a;

/**
 * final类和方法
 * 1.final类不能被继承,编译报错
 * 2.final方法不能被重写
 */
class Math{
    public final function Sum($a, $b){
        return $a + $b;
    }
}
// class Math_sub extends Math{
//     public function Sum($a, $b){

//     }
// }

final class Poth{

}
// class a extends Poth{
    
// }