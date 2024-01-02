<?php
$timestame_future = mktime(0, 0, 0, 12, 31, 2024);
$timestamp_now = time();
$timeout = $timestame_future - $timestamp_now;
$days = round($timeout/86400);
echo "今天是".date('Y-m-d')."距离".date('Y-m-d',$timestame_future)."还有 $days \n";

/**
 * 使用微秒
 * microtime(true)
 */
echo time()."\n";
echo microtime(true);