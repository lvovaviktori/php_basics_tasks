<?php

$age="myage";
if ((is_numeric($age)==false ) or ($age<0)){
    echo "����������� �������";
}else{
    if ($age>=18 and $age<60 ){
    echo "��� ��� �������� � ��������";}
    if ($age>59){
    echo "��� ���� �� ������";}
    if ($age>=0 and $age<=17 ){
    echo "��� ��� ���� ��������";}
}
?>