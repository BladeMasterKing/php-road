<?php

/**
 * 字符串转义
 * 手动转义通过在引号内使用反斜杠
 * 自动转义通过内置函数`addslashes()`来完成
 */

 /**
  * 计算长度
  * strlen()
  * 
  * utf-8字符集汉字为3个字符，可以指定字符集
  * mb_strlen()
  */

echo strlen("lol真好玩")."\n";
echo mb_strlen("lol真好玩")."\n";

/**
 * 字符串单词统计
 * str_word_count()
 * 只对英文生效
 */
$aa = "Better good neighbours near than relation far away";
$bb = "阅读使人充实，会谈使人敏捷，写作使人精确";
echo str_word_count($aa)."\n";
echo str_word_count($bb)."\n";

/**
 * 去空格
 * ltrim()  左边清除
 * rtrim()  右边清除
 * trim()   两边清除
 */

 /**
  * 字符串切分
  * explode()   切分后存入数组
  * strtok()    
  * implode()   数组中按照间隔组合成字符串
  * join()
  */
$aa = "how_to_split_this_sentance";
$bb = "把 这个 句子 拆分";
print_r( explode('_', $aa));

/**
 * 字符串截取
 * substr($str, $start_index, $end_index)
 * 结尾为负数时除最后视为除
 */
$aa = "create a substring of this string";
echo substr($aa, 0, 2)."\n";
echo substr($aa, 0 , -2)."\n";

/**
 * 字符串替换
 * substr_replace($target_str, $replace_str,$start_index, $str_len)
 */
$someinput = "ID:1234567890";
echo substr_replace($someinput, "***", 3, 9)."\n";

/**
 * 字符串查找
 * strstr()     区分大小写
 * stristr()    不区分大小写
 */
$aa = "I have a Dream that one day";
echo strstr($aa, "dream")."\n";
echo strstr($aa, "Dream")."\n";

/**
 * 大小写替换
 * strtolower()
 * strtoupper() 
 * ucfirst()    字符串首字母大写
 * ucwords()    以空格分隔的单词首字母大写
 */

 /**
  * 1.含有十六进制的字符串不再视为数字
  * 2.`\u{` 后面非法字符会报错
  */
  var_dump("0x123" == "291");
  var_dump(is_numeric("0x123"));
  var_dump("0xe" + "0x1");