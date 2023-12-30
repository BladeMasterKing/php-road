<?php

/**
 * 条件控制
 * if语句
 * 1.单条件分支 if(){}
 * 2.双向条件分支 if(){}else{}
 * 3.多向条件分支 if(){} elseif (){} else {}
 */
$score = 85;
if($score >=0 and $score <= 60){

} elseif ($score > 60 and $score <= 80){

} else {

}

/**
 * 多向条件分支
 * switch语句
 */
$x=5;
switch ($x){
    case 1:
        echo "数值为1 \n";
        break;
    case 2:
        echo "数值为2 \n";
        break;
    case 3:
        echo "数值为3 \n";
        break;
    default:
        echo "数值不为1,2,3 \n";
}

 /**
  * 循环控制语句
  * while循环
  */
$num = 1;
$str = "20以内的奇数为:";
while ($num <= 20){
    if($num % 2 != 0){
        $str .= $num." ";
    }
    $num ++;
}
echo $str."\n";

/**
 * do while 循环
 */
$aa = 0;
while ($aa !=0){
    echo "不会被执行的内容 \n";
}

do {
    echo "执行的内容 \n";
} while ($aa != 0);

/**
 * for 循环
 */
for($i = 0; $i < 4; $i++){
    echo "循环执行次数:$i \n";
}

/**
 * foreach 循环
 */
$arr_1 = array('one', 'tow', 'three');
foreach($arr_1 as $item){
    echo "元素为: $item \n";
}

/**
 * 跳出循环
 * continue
 * break
 */
