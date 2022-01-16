<?php 
    $data = file_get_contents("php://input");
    $wrong='ERROR';
    if($data==null){
    echo $wrong;
   }
    $obj = json_decode($data,true);
    $longitude=$obj['longitude'];
    $dimensionality=$obj['dimensionality'];
    $link = mysqli_connect("localhost", "Paper", "A65180998a", "csv_db 6");
    $link -> set_charset("UTF8");
    $link -> query("INSERT INTO `test0` (LG, DL)
              VALUES ($longitude,$dimensionality)");
    echo "complish";
   
    
    $link -> close(); 
    
    ?>