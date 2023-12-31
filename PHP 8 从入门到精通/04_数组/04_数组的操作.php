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
   * 
   */