<?php
 $chuoi1 = 'Hoc| lap| trinh| PHP';
// hàm explode 
 $arr = explode('|',$chuoi1);
 var_dump($chuoi1);
 echo '<br>';
 var_dump($arr);
 echo '<br>';
 // hàm implode
 $chuoi2 = implode('',$arr);
 echo $chuoi2;
 //hàm strlen
 echo '<br>';
echo strlen($chuoi2);
// hàm str_word_count
echo '<br>';
echo str_word_count($chuoi2);
// hàm str_repeat
echo '<br>';
$chuoi3 = 'Nguyen ngo tra my';
echo str_repeat($chuoi3,5).'<br>';
// hàm str_replace
$chuoi4= 'Truong dai hoc Viet Han men yeu';
echo str_replace(' ','_',$chuoi4);
echo '<br>';
// ham ma haoa
echo md5($chuoi4);
echo '<br>';
echo sha1($chuoi4);
echo '<br>';
//ham cat chuoi
$chuoi5 = 'Nguyen thi minh lan';
echo substr($chuoi5,0,4);
echo '<br>';
//ham strstr
$chuoi6 = 'Chao mung ban den voi khoa hoc php';
echo strstr ($chuoi6, 'ban');
echo '<br>';
//Tim chuoi con trong chuoi me
$chuoi7 = 'php';
echo strpos($chuoi6,$chuoi7);
echo '<br>';
//thay the
echo substr_replace($chuoi6,$chuoi5,10,10);
//chuyen tat ca ki tu ve chu thuong
echo '<br>';
$chuoi8 = 'NGuyEN NgOO TRa MY';
echo strtolower($chuoi8);