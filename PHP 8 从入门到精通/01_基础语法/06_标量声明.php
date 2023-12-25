<?php
    # PHP8 标量声明有两种模式：强制模式（默认），严格模式
    # 强制模式
    /*function sum(int $a, int $b){
        return $a + $b;
    }
    print(sum(1,2.2));*/

    # 严格模式
    # declare 必须在最开始部分， 编译器会报错
    declare(strict_types = 1);
    function sum2(int $a, int $b){
        return $a + $b;
    }
    print(sum2(2, 4.2));

?>
