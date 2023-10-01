<?php
//khai bao mang
$arr = array('html','css','javascipt');
$arr2 = ['address1'=>'nodejs','address2'=>'css'];
// them phan tu vao mang
$arr2[]= 'C++';
$arr2[]= 'Python';
$arr2['address3']= 'Java';
//in mang
echo '<pre>';
   print_r($arr2);
echo '</pre>';

echo '<br>';
// them nhieu phan tu vao mang
array_push($arr,'C++','NguyenNgoTraMy','HanhpHuc','GGGG');

echo '<pre>';
   print_r($arr);
echo '</pre>';

echo '--------------------------------------------'.'<br>';
//doc maang
$bien = $arr[2];
echo $bien.'<br>';
//dung vong lap for
// if (!empty($arr)){
//     for ($i = 0; $i < count($arr); $i++){
//         echo $arr[$i].' ,';
//     }
// }
//sua mang
 $arr2[1] ='hehehe';
 unset($arr2[1]);
// dung vong lap foreach
if (!empty($arr2)){
    foreach($arr2 as $key => $item){
        echo  $item.' ,';
    }
}
?>