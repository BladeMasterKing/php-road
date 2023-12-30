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
    // $fee = 300;
    // $service_price = 50;
    // function total_fee(&$fee, $service_price){
    //     $fee = $fee + $service_price;
    //     echo "需要支付的总价：".$fee."\n";
    // }
    // total_fee($fee, $service_price);
    // total_fee($fee, $service_price);
    // echo "总费用参数值是：".$fee." 服务费：".$service_price."\n";

    # 函数返回值
    // function total_need_to_pay($days, $roomprice){
    //     return $days * $roomprice;
    // }
    // $srentdays = 3; $roomprice = 168;
    // echo total_need_to_pay($srentdays, $roomprice);

    # 对函数的引用 ????
    # 1.内置函数，如 date()，可以直接调用
    # 2.PHP库文件中的函数，include()或 require() 函数加载文件后使用
    # 3.自定义函数，同一个PHP文件中可直接引用，不同文件 include() 或require()加载

    function &example($aa = 1){
        return $aa;
    }
    $bb = &example("引用函数实例");
    echo $bb."\n";

    /**
     * 函数取消引用
     * 使用`unset()`函数来完成
     */
    $num = 166;
    $math = &$num;
    echo "\$math is : $math \n";
    unset($math);
    echo "\$num is : $num \n";
    echo "\$math is : $math \n"; # 已被销毁
    

?>