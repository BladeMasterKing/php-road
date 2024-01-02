<?php
/**
 * 设置方法
 * 1.修改`php.ini`,`date.timezone=Asia/Hong_Kong`
 * 2.应用程序中, `date_default_timezone_set("Asia/Hong_Kong")`
 */
echo date_default_timezone_get()."\n";
date_default_timezone_set("Asia/Hong_Kong");
echo date_default_timezone_get()."\n";