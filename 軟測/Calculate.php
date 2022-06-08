<?php
 switch ($_POST['text']) 
 {
   case 1:
     $money = 400 * $_POST['text-1'];
     if($_POST['text-2']=="5G") $money=$money*1.3;
     else if(($_POST['text-2']=="4G"));
     else $money = "並非4G或5G";
     break;
   case 2:
     $money = 300 * $_POST['text-1'];
     if($_POST['text-2']=="5G") $money=$money*1.2;
     else if(($_POST['text-2']=="4G"));
     else $money = "並非4G或5G";
     break;
   case 3:
     $money = 200 * $_POST['text-1'];
     if($_POST['text-2']=="5G") $money=$money*1.1;
     else if(($_POST['text-2']=="4G"));
     else $money = "並非4G或5G";
     break;
   case 4:
     $money = 100 * $_POST['text-1'];
     if($_POST['text-2']=="5G") $money=$money*1.0;
     else if(($_POST['text-2']=="4G"));
     else $money = "並非4G或5G";
     break; 
   default:
     $money = "無此方案";
 }
?>