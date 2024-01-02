<?php
/**
 * 添加元素
 * array_push()
 * array_unshift()
 */

 /**
  * 栈类型操作
  * 后进先出
  */
$clients = array("1", "2", "3");
array_unshift($clients, "4", "5");
print_r($clients);

/**
 * 队列类型操作
 */
$clients = array("1", "2", "3");
array_push($clients, "4", "5");
print_r($clients);


/**
 * 删除元素
 * array_pop()
 * array_shift()
 */

 /**
  * 查询指定元素
  * in_array($value, $array)
  * array_key_exists($key, $array)
  * array_search($value, $array)
  * array_keys($array)
  * array_values($array)        获取所有值
  */

/**
 * 统计元素个数
 * count($array)
 */

 /**
  * 删除重复元素
  * array_unique($array)
  * 以元素值为准，删除值相同的
  * 按顺序去除第二个及之后的
  */

  /**
   * 调换键和值
   * array_flip()
   */
  $arr_1 = array(
    '单人间' => 188,
    '标准间' => 288,
    '大床房' => 388,
    '家庭房' => 488
  );
  print_r(array_flip($arr_1));

  /**
   * PHP 8 新特性
   * 1.引用赋值时，自动创建的数组元素顺序变化
   * 2.list()函数不再按照相反的顺序赋值,不允许空值,不支持字符串拆分,可用于数组对象
   * 
   */
list($array[],$array[],$array[]) = [100,200,300];
var_dump($array);


/**
 * foreach()修改数组
 * 1.对内部指针失效, current($array) 不会变化
 * 2.按值循环不影响循环
 * 3.按引用循环会影响循环
 */
foreach($array as $arr){
  unset($array[1]);
  echo "数值为 $arr \n";
}

foreach($array as &$arr){
  echo "数值为 $arr \n";
  $array[1] = 300;
  $array[2] = 400;
}

/**
 * 序列化与反序列化
 * serialize()
 * unserialize()
 */
echo serialize($arr_1)."\n";

/**
 * 数组合并
 * array_merge()
 */

 /**
  * 快速清空数组
  * unset($array)
  */