<?php

/**
 * 一维数组
 * 每个数组元素是单个变量，指定key的元素key是唯一的，
 * 不指定key自动分配键可以添加重复元素
 */
$room_type = array('one', 'two', 'more', 'vip');
$price_per_day = array('one' => 1, 'two' => 2, 'more' => 3, 'vip' => 4);

/**
 * 多维数组
 * 数组可以嵌套，每个数组中的元素也是一个数组
 * 
 */
$room_type_price = array(
    array(
        'type' => '单床房',
        'price' => 298
    ),
    array(
        'type' => '标间',
        'price' => 198
    )
);

/**
 * 三维数组
 */
$room_type_price = array(
    array(
        array(
            'type' => '单床房',
            'price' => 298
        ),
        array(
            'type' => '标间',
            'price' => 198
        )
    ),
    array(
        array(
            'type' => '单床房',
            'price' => 298
        ),
        array(
            'type' => '标间',
            'price' => 198
        )
    )
);
