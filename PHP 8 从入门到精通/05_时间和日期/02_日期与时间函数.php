<?php
/**
 * 当前时间戳
 * 精确到秒
 */
echo "当前时间戳为[".time()."]\n";

/**
 * 日期
 * date()
 * Y m d H i s
 */
date_default_timezone_set("PRC");
echo date("Y-m-d H:i:s", time())."\n";

/**
* getdate()
* Array
* (
*    [seconds] => 33
*    [minutes] => 11
*    [hours] => 19
*    [mday] => 2
*    [wday] => 2
*    [mon] => 1
*    [year] => 2024
*    [yday] => 1
*    [weekday] => Tuesday
*    [month] => January
*    [0] => 1704193893
* )
*/
print_r(getdate());

/**
 * 检查日期有效性
 * checkdate(月, 日, 年)
 */
if(checkdate(2, 31, 2023)){
    echo "正确\n";
} else {
    echo "错误\n";
}

/**
 * php8 中过时
 * strftime()
 * %Y %m %d %H %M %S
 */
// echo strftime("%Y-%m-%d %H:%M:%S", time());

/**
 * 日期时间解析为时间戳
 * mktime(时, 分, 秒, 月, 日, 年)
 */
echo mktime(12, 57, 24, 23, 4, 2023);

