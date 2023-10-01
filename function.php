<?php 
function total ($a, $b){
    $tong = $a + $b;
    echo $tong;
}
if (!function_exists('total')){
    function total ($a, $b){
        echo 'Hay tao function new dde!';
    }
}
$bien = 100;
function doCount(){
    // global $bien;cach su dung bien toan cuc
    // echo $bien;
    static $num = 0; //bien tinh
    $num++;
    return $num;
}
echo doCount();
echo doCount();
?>