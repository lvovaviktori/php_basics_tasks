<?php

$day=9;
   
    switch ($day){
    case 0:
        echo "����������� ����";
        break;
    case ($day >=1 and $day <=5 ):
        echo "��� ������� ����";
        break;
    case ($day ==6 or $day ==7 ):
        echo "��� �������� ����";
        break;
    default:
        echo "����������� ����";
        break;        
}
?>