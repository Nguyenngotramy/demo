<?php

$arr = ['tramy','thuyvan', 'hanhi','minhquy','thuyvan'];


// them phan tu vao cuoi mang
array_push($arr,'hoang yen');

echo '<pre>';
print_r ($arr);
echo '<pre>';



//xoa phan tu dau tien
$kq =array_shift($arr);
echo '<pre>';
print_r ($arr);
echo '<pre>';
echo $kq;
// them 1 hay nhieu ptu vao mang 
$rs = array_unshift($arr,'mycure78','mytra');
echo '<pre>';
print_r ($arr);
echo '<pre>';
echo $rs;
echo '<br>';
// kiemtra phan tu co ton tai hay k
echo in_array('mytra',$arr);
//sap xep mang
echo '<br>';
sort($arr);
echo '<pre>';
print_r ($arr);
echo '<pre>';echo '<br>';
var_dump(sort($arr));
// dao nguoc vi tri 
echo '<br>';
$arr2 = array_reverse($arr);
echo '<pre>';
print_r ($arr2);
echo '<pre>';
echo '<br>';
// Gom hai mang thanh mot
$arr3 = ['1234', '73'];
$arr4 = array_merge($arr, $arr3);
echo '<pre>';
print_r ($arr4);
echo '<pre>';
echo '<br>';
// Lay ra key ngau nhien trong mang voi so luong mong muon
$arr6 = array_rand($arr , 3);
echo '<pre>';
print_r ($arr6);
echo '<pre>';

echo '=================================';
// Hàm array_search
$arrsearch =array_search('mytra', $arr);
echo 'Day la vi tri cua my tra '.$arrsearch;
// hàm aarray slaicw
$Arrsl =array_slice($arr,1,3);
echo '<br>';
echo '<pre>';
print_r ($Arrsl);
echo '<pre>';
// ham array_unique
$uniqueArr = array_unique($arr);
echo '<br>';
echo '<pre>';
print_r ($uniqueArr);
echo '<pre>';