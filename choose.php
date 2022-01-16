<<?php
   header("Content-type: text/html; charset=utf-8");
   $data = file_get_contents("php://input");
   $wrong='ERROR';
   if($data==null){
     echo $wrong;
   }
   else{
    $obj = json_decode($data,true);
    $option=$obj['option'];
    $link = mysqli_connect("localhost", "Paper", "A65180998a", "csv_db 6");
    $link -> set_charset("UTF8");
    $link->query("set names utf8");
    if($obj['option']=='taipei'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '臺北市%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }   
    }
    else if($obj['option']=='xinbei'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '新北市%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    else if($obj['option']=='xinzhu'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '新竹市%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    
     if($obj['option']=='songshan'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%松山區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }   
    }
    else if($obj['option']=='zhongzhen'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%中正區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
     else if($obj['option']=='datong'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%大同區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
     else if($obj['option']=='zhongshan'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%中山區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
     else if($obj['option']=='zhongzhen'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%中正區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    else if($obj['option']=='daan'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%大安區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    else if($obj['option']=='wanhua'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%萬華區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    else if($obj['option']=='xinyi'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%信義區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    else if($obj['option']=='shilin'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%士林區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    else if($obj['option']=='beitou'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%北投區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    else if($obj['option']=='neihu'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%內湖區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    else if($obj['option']=='nangang'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%南港區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    else if($obj['option']=='wenshan'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%文山區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
    
     if($obj['option']=='banqiao'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%板橋區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }   
    }
     else if($obj['option']=='sanchong'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%三重區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
     else if($obj['option']=='zhonghe'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%中和區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
     else if($obj['option']=='xinzhuang'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%新莊區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
     else if($obj['option']=='xindian'){
        $result = $link -> query("SELECT *  FROM `unionn` WHERE `PLACE` LIKE '%新店區%' ");
        while ($row = $result->fetch_assoc()) {
        echo $row["SUM"],"\n",$row["PLACE"],"\n";
        }        
    }
        
   }

   ?>