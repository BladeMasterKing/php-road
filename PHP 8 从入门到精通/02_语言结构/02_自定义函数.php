<?php
    # 自定义函数语法

//    function sayHello($customer_name){
//        echo "欢迎您，".$customer_name."\n";
//    }
//    sayHello("王先生");

    # 函数传递数值
//    function today_need_pay($days, $room_price){
//        $total_cost = $days * $room_price;
//        echo "需要支付的总价：".$total_cost."元\n";
//    }
//    $days = 5;
//    $room_price = 226;
//    today_need_pay($days, $room_price); // 传递变量
//    today_need_pay(3, 128); // 直接传参

    # 函数传递参数引用
    /*$fee = 300;
    $service_price = 50;
    function total_fee(&$fee, $service_price){
        $fee = $fee + $service_price;
        echo "需要支付的总价：".$fee."\n";
    }
    total_fee($fee, $service_price);
    total_fee($fee, $service_price);
    echo "总费用参数值是：".$fee." 服务费：".$service_price."\n";*/

    # 函数返回值

?>