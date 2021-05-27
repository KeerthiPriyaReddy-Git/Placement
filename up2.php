<?php

$sid=$_REQUEST['pid'];



  
        $con=mysqli_connect("remotemysql.com","Bvi6TRjeoH","aD13zcazgh","Bvi6TRjeoH");

	session_start();
   $m="DISQUALIFIED";
	$result = "UPDATE `stureg_tbl` SET `result`='$m' WHERE `StuID`='$sid'";
	$ret = mysqli_query( $con, $result);
    echo "result updated";
?>
