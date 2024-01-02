<?php
/**
 * `extends` 关键字确认子类和父类
 * ?? var 是什么
 */
class Vegetable{
    var $tomato = "西红柿";
    var $cucumber = "黄瓜";
}

class Vegetable_Type extends Vegetable{
    var $potato = "土豆";
    var $radish = "萝卜";
}
$va = new Vegetable_Type();
echo "蔬菜有".$va->tomato.",".$va->cucumber.",".$va->potato.",".$va->radish;