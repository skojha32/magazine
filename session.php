<?php 
require "config.php"; 
require "subs_count.php"; 
//Authentication Code
if(isset($_COOKIE['uname']) && isset($_COOKIE['sessionid'])){
    $uname = $_COOKIE['uname'];
    $csessionid = $_COOKIE['sessionid'];
}
else{
    echo "<script type='text/javascript'>alert('Something went wrong redirecting to login page!')</script>";
    echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
}

$fetchsess = mysqli_query($con,"SELECT sessionid FROM gateway WHERE username = '$uname'");
$dbsessarray = mysqli_fetch_assoc($fetchsess);
$dbsession = $dbsessarray['sessionid'];
if($csessionid != $dbsession)
{
echo "<script type='text/javascript'>alert('Something went wrong redirecting to login page!')</script>";
echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
}

?>