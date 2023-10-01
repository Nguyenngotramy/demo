 <?php
 $bien1 = '8';
 $bien2 = (int)$bien1;
 echo is_int($bien1);
 var_dump($bien2);

 $bien3 = 'true';
 $bien4 = (bool)$bien3;
 echo is_bool($bien4);
 var_dump($bien4);

 $bien5 = '12.5';
 $bien6 = (float)$bien5;
 echo is_float($bien6);
 var_dump($bien6);

 $bien7 = 1;
 $bien8 =(string) $bien7 ;  // chuyển về kiểu string
 var_dump($bien8);

 $bien9 = '1,2,3,4';
 $arr = (array)$bien9;
 var_dump($arr);
 ?>