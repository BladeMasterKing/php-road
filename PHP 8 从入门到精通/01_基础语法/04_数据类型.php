<?php
    # 数据类型
    # integer，2进制 0b0011  8进制 0123  16进制 0xF1A
    # float 1E+07
    # string：单引号的字符直接表示，双引号中会识别转义字符
    # boolean
    # array
    # object

    echo "\t";
    echo '\t';

    # 数组
    $array = array(
        0=>15,
        1=>1E+05,
        2=>"PHP语法"
    );
    $arr = array(15, 1E+05, "PHP语法");

    foreach($array as $value){
        echo $value."\n";
    }

    # 对象

    # NULL

    # 数据类型转换
    # 1.自动类型转换
    $a = "2";
    $a *= 2;
    # 2.强制类型转换
    # 语法 `Bool settype(var , String type)`
    $flot = 1.08;
    echo settype($flot, "int")

?>