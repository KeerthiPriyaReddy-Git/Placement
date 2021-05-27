<?php

$sid=$_REQUEST['rid'];



  
       $con=mysqli_connect("remotemysql.com","Bvi6TRjeoH","aD13zcazgh","Bvi6TRjeoH");

	session_start();
   $m="QUALIFIED";
	$result = "UPDATE `stureg_tbl` SET `result`='$m' WHERE `StuID`='$sid'";
	$ret = mysqli_query( $con, $result);
    echo "result updated";
?>
