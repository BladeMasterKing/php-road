<?php
/**
 * 异常处理
 */
function check_sum($number){
    if($number > 1){
        throw new Exception("值必须小于1");
    }
    return true;
}
try{
    check_sum(2);
} catch (Exception $e){
    echo '异常['.$e->getMessage()."]\n";
}

/**
 * 自定义异常处理器
 */
class custom_exception extends Exception{
    public function error_message(){
        return "发生行[".$this->getLine()."] 发生文件[".$this->getFile()
        ."] 异常信息[".$this->getMessage()."]\n";
    }
}
$email = "someone@example.321com";
try{
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
        throw new custom_exception($email);
    }
} catch (custom_exception $e){
    echo $e->error_message();
}

/**
 * 顶层异常处理器
 */
function my_exception($exception){
    echo "异常是[".$exception->getMessage()."]\n";
}
set_exception_handler('my_exception');
throw new Exception("自定义异常处理器");