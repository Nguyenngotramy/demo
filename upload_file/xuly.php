<?php

if(!empty($_SERVER['REQUEST_METHOD'])){
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
         
}

    $result = move_uploaded_file($_FILES['uploadimg']['tmp_name'] ,'C:/xampp/htdocs/demo/upload_file/img/'.$_FILES['uploadimg']['name']);
    var_dump($result);
?>



