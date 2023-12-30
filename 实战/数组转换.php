<?php

/**
 * 嵌套数组根据元素数组的key进行分组计数
 */
$data = array(
    array(
        'leads_id' => 1,
        'company_id' => 200001
    ),
    array(
        'leads_id' => 2,
        'company_id' => 200002
    ),
    array(
        'leads_id' => 3,
        'company_id' => 200001
    ),
    array(
        'leads_id' => 4,
        'company_id' => 200003
    ),
    array(
        'leads_id' => 5,
        'company_id' => 200004
    )
);
function reduce_count($data, $field)
{
    $result = array_reduce($data, function ($carry, $item) use ($field) {
        $group = $item[$field];
        isset($carry[$group]) ? $carry[$group]++ : $carry[$group] = 1;
        return $carry;
    }, []);
    
    $result = array_reduce($data, fn($carry, $item) => ($carry[$item[$field]][] = $item['values']) && $carry, []);
    // 输出结果
    print_r($result);
}
reduce_count($data, 'company_id');
