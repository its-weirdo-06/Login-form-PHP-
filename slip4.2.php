<?php
    session_start();
    $t=$_REQUEST['etime'];
    $exp=date("1,d-m-y h:i:s",time());
    if($t<$exp)
        echo "<br><center><h1>Page Time Expired</h1></center>";
    else
    {
        echo "<h2>Name : ".$_REQUEST['uname']."</h2>";
        echo "<h2>City : ".$_REQUEST['city']."</h2>";
        echo "<h2>Phone NO : ".$_REQUEST['pno']."</h2>";
        session_destroy();
    }          
?>