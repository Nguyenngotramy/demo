<?php 
$arr = [
     $student1 = [
        'name'=> 'Nguyen ngo tra my',
        'phone'=>'0815996884'
     ],
     $tudent2 = [
        'name2'=>'Nguyen ngo quynh chi',
        'phone2'=>'0337517147'
     ],
     'classrom'=> '22ad'
    ];

if (!empty($arr)){
    foreach($arr as $item){
      if (is_array($item)){
        foreach($item as $item2){
            echo $item2.'<br>';
        } 
    }else {
            echo $item.'<br>';
        }
      }
    };
echo 'Mang k co key'.'<br>';
$arr2 = [
    'Cho doi k dang so',
    [
        'chi la khong biet cho den khi nao',
        'that ca vat',
        ' den bao nguoi có the quen nhung ki niem'
    ],
    'du la dung hay sai',
    'iu lop dai'
];
if (!empty($arr2)){
    for($i = 0 ; $i < count($arr2); $i++ ){
        if (is_array($arr2[$i])){
            if (!empty($arr2[$i])){
                for($j = 0; $j <count($arr2[$i]); $j++){
                    echo $arr2[$i][$j].'<br>';
              }
            } 
        }else {
            echo $arr2[$i].'<br>';
    }
       
    }
}

  



?>