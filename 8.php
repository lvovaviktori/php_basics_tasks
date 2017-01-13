<?php

$age="myage";
if ((is_numeric($age)==false ) or ($age<0)){
    echo "неизвестный возраст";
}else{
    if ($age>=18 and $age<60 ){
    echo "вам еще работать и работать";}
    if ($age>59){
    echo "вам пора на пенсию";}
    if ($age>=0 and $age<=17 ){
    echo "вам еще рано работать";}
}
?>