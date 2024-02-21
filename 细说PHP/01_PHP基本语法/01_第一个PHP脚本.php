<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf8">
    <title>第一个PHP程序</title>
</head>
<body>
<?php
    $sys_version = PHP_VERSION;
    $allow_url = ini_get('allow_url_fopen') ? "支持" : "不支持";
    $max_upload = ini_get('file_uploads') ? ini_get('upload_max_filesize') : "Disabled";
    $max_execute_time = ini_get('max_execution_time')."秒";

    date_default_timezone_set("PRC");
    $sys_time = date("Y-m-d H:i:s", time());
    echo "<table align='center' cellpadding='0' cellspacing='0'>".
        "<caption><h2>系统信息</h2></caption>".
        "<tr><td>PHP版本：</td><td>$sys_version</td></tr>".
        "<tr><td>远程文件获取：</td><td>$allow_url</td></tr>".
        "<tr><td>最大上传限制：</td><td>$max_upload</td></tr>".
        "<tr><td>最大执行时间：</td><td>$max_execute_time</td></tr>".
        "<tr><td>服务器时间：</td><td>$sys_time</td></tr>".
        "</table>";
?>
</body>
</html>
