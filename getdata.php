
  <?php
  
   
    $link = mysqli_connect("localhost", "Paper", "A65180998a", "csv_db 6");
    $link -> set_charset("UTF8");

    
    $result = $link -> query("SELECT SUM,PLACE,LG,DL FROM `uniongw`");
    while ($row = $result->fetch_assoc()) 
    {
        $output[] = $row; 
       echo $row["SUM"],"\n",$row["PLACE"],"\n",$row["LG"],"\n",$row["DL"];
    }

   
    
    //print(json_encode($output, JSON_UNESCAPED_UNICODE));
    $link -> close(); 
  
  
 ?>
    

