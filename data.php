<?php 
    $data = file_get_contents("php://input");
    $wrong='ERROR';
    if($data==null){
    echo $wrong;
   }
    $obj = json_decode($data,true);
    $link = mysqli_connect("localhost", "Paper", "A65180998a", "csv_db 6");
    $link -> set_charset("UTF8");
    $result = $link -> query("SELECT SUM,PLACE,LG,DL FROM `unionn`");
    $con=0;
    $place;
    
    while ($row = $result->fetch_assoc()) 
    {
     
     $len_type = 1;
     $lat1=(double)$obj['dimensionality'];
     $lng1=(double)$obj['longitude'];
     $lat2=(double)$row["DL"];
     $lng2=(double)$row["LG"];
     $radLat1 = $lat1 * PI ()/ 180.0; 
     $radLat2 = $lat2 * PI() / 180.0;
     $a = $radLat1 - $radLat2;
     $b = ($lng1 * PI() / 180.0) - ($lng2 * PI() / 180.0);
     $s = 2 * asin(sqrt(pow(sin($a/2),2) + cos($radLat1) * cos($radLat2) * pow(sin($b/2),2)));
     $s = $s * 6378.137;
     $s = round($s * 1000);
     if ($len_type --> 1){
       $s /= 1000;
     }
     if($s<100){
         $con=1;
         $place=$row['PLACE'];
     }
    }
    if($con!=1){
        echo "false";
    }
    else{
        echo "true" ;
    }
        
   
    
    $link -> close(); 
    
    ?>