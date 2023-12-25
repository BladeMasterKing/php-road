<?php
    $arr[0][0] = 10;
    $arr[0][1] = 22;
    $arr[1][0] = 1E+19;
    $arr[1][1] = "PHP语法";

    for ($i = 0; $i < count($arr); $i++){
        for ($j = 0; $j < count($arr[$i]); $j++){
            echo $arr[$i][$j]." ";
        }
        echo "\n";
    }

    # 命名空间
    # 用于类的命名、函数命名、常量命名
    # namespace 2ndbuilding\number23;

?>