<?php 
 if (!empty($_POST)){
    $err = [];
    if(empty($_POST['hoten'])){
        $err['hoten']['loitrong']='Vui lòng nhập hoten';
        
    } else {
        if (strlen($_POST['hoten'])<5){
         $err['hoten']['thieukt']='Vui lòng nhập tên hơn 4 kí tự';
        }
    }
    if(empty($_POST['gmail'])){
        $err['gmail']['loitrong']='Vui lòng nhập gmail';
        
    } else {
        if (filter_var($_POST['gmail'],FILTER_VALIDATE_EMAIL)){
         $err['hoten']['validate']='vui lòng nhập đúng gmail';
        }
    }
    if (empty($err)){
        echo 'Thanh cong';
    } else {
        echo 'co loi xay ra';
    }

 }
?>

<form method ="post" action = "">
    <p>Họ và tên</p>
     <p>
        <input type="text" name="hoten"/>
     </p>
     <p>Gmail</p>
     <p>
        <input type="email" name="gmail"/>
     </p>
     <p>
        <input type ="submit" name="Nộp"/>
     </p>
</form>