<?php
/**
 * 遍历数字索引数组
 */
$room_type = array('one','two','more');
for($i = 0; $i < 3; $i++){
    echo $room_type[$i];
}

/**
 * 遍历联合索引数组
 */
$price_per_day = array(
    'one' => 1,
    'two' => 2,
    'more' => 3,
    'vip' => 4
);
foreach ($price_per_day as $price){
    echo $price;
}
foreach ($price_per_day as $key => $value){
    echo 'key:'.$key." value:".$value;
}
echo $price_per_day['one'];
?>