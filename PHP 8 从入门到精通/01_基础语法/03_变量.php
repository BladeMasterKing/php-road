<?php
    # 定义变量
    # $名称 名称只能以字母和下划线开头
    $hello = "hello world";

    # 变量赋值
    # 1.传值赋值：使⽤“=”直接将赋值表达式的值赋给另⼀个变量
    # 2.引⽤赋值：将赋值表达式内存空间的引⽤赋给另⼀个变量

    $a = "风吹草低见牛羊";
    // 传值赋值
    $b = $a;
    echo $b;
    // 引用赋值
    $b = &$a;
    $a = "天苍苍";
    echo "a的值未".$a."</br>";
    echo "b的值为".$b."</br>";


    # 可变变量：在变量前加`$`，将字符串转义为变量
    $aa = "bb";
    $bb = "abandon";
    echo $$aa;
    # 引用变量：在变量前加`&`，变量的地址（指针）

    # 作用域
    # 1.超全局变量
    # php内置
   /* $GLOBALS ; // 包含全局变量的数据
    $_GET ; // GET方法参数
    $_POST ; // POST方法参数数组
    $_FILES ; // 上传文件数组
    $_COOKIE ; // cookie
    $_SERVER ; // 服务器
    $_ENV ; // 环境变量
    $_REQUEST ; // 输入所有 包括 $_GET $_POST $_COOKIE
    $_SESSION ;*/

    # 2.全局变量
    # 函数外声明的变量，函数中不能直接访问全局变量
    # 函数中通过 global 访问全局变量
    function ff(){
        global $a;
        echo $a;
    }

    # 3.静态变量
    # 函数外无法访问，static关键字声明，在函数执行后仍保留值
    $person = 20;
    function addPerson(){
        static $person = 5;
        echo "当前人数".$person."</br>";
        $person ++;
    }
    addPerson();
    echo $person;
    addPerson();

    # 变量的销毁
    function destory(){
        $a = 10;
        unset($a); // 销毁变量
    }

?>