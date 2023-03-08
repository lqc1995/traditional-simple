<?php

require './vendor/autoload.php';

use TraditionalSimple\HanziConvert;

//繁体转简体
$str = '号';
echo HanziConvert::convert($str);//默认是繁体转简体
echo "\n";

//简体转繁体
echo HanziConvert::convert($str,true);//第二个参数传入布尔真则是简体转繁体
