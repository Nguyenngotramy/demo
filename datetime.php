<?php  
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date =date('Y-m-d H:i:s');
echo $date;
echo '<br>';
echo date_default_timezone_get();
echo '<br>';
echo 'Timelase đến thời điểm hiện tại'.time().'<br>';
echo 'Timelape now: '.strtotime('now').'<br>';
echo 'Timelape 20 July 2023: '.strtotime('20 July 2023').'<br>';
echo 'Timelape next week: '.strtotime('next week');

?>