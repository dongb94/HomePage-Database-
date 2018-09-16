<?php
    header("Content-Type: text/html;charset=UTF-8");
$conn = mysqli_connect("localhost", "root", "database123", "macdelivery");
$data_stream = "'".$_GET['name']."','".$_GET[`email`]."','".$_GET[`password`]."','".$_GET[`man`]."','".$_GET[`year`]."','".$_GET[`month`]."','".$_GET[`day`]."','".$_GET[`address`]."'";
$query = "insert into user(`name`,`email`, `Password`, `gender`, `birth`, `locate`) values (".$data_stream.")";
    $result = mysqli_query($conn, $query);
     
    if($result)
      echo "1";
    else
      echo "-1";
     
    mysqli_close($conn);
?>