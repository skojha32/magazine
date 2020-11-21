<?php

require "config.php";
//Authentication Check
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

echo "<br><br><table class='rwd-table' style='margin:auto;'>";


echo "<tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>SubPeriodFromDate</th>
    <th>SubPeriodToDate</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>";

if($_POST['ids'] == "active"){

$count = 1;
     
	 $query = mysqli_query($con, "SELECT userdetail.fname,userdetail.mname,userdetail.lname,userdetail.designation,userdetail.email,userdetail.cmobile,subscription.startdate,subscription.enddate,userdetail.uid FROM userdetail INNER JOIN subscription ON userdetail.uid = subscription.uid WHERE DATE_FORMAT(subscription.enddate, '%Y-%m-%d') >= CURDATE() ");
	 if(mysqli_num_rows($query) == 0)
	{
		echo "<tr><td colspan = '4'>no rows returned</td></tr>";
	}
	else
	{
	while($row = mysqli_fetch_row($query))
    	{
    		echo "<tr><td data-th='S.No'>{$count}</td><td data-th='Name'>"."{$row[3]}"."."." "."{$row[0]}"." "."{$row[1]}"." "."{$row[2]}"."</td><td data-th='Email'>{$row[4]}</td><td data-th='Mobile'>{$row[5]}</td><td data-th='SubPeriodFromDate'>{$row[6]}</td><td data-th='SubPeriodToDate'>{$row[7]}</td><input type='hidden' value={$row[8]} name='uid'><td data-th='Edit'><a href='./home.php?uid="."{$row[8]}"."' id='btn_read_HTML_Table' class='fa fa-edit' style='font-size: 20px;color:orange'></td>
                  <td data-th='Delete'><i class='fa fa-trash-o' style='font-size:20px;color:red'></i></td></tr>";
		    $count++;
    	}
		 echo "</table>";
    }
	
}
elseif($_POST['ids'] == "all"){
	
	$count = 1;
     
	 $query = mysqli_query($con, "SELECT userdetail.fname,userdetail.mname,userdetail.lname,userdetail.designation,userdetail.email,userdetail.cmobile,subscription.startdate,subscription.enddate,userdetail.uid FROM userdetail INNER JOIN subscription ON userdetail.uid = subscription.uid");
	 if(mysqli_num_rows($query) == 0)
	{
		echo "<tr><td colspan = '4'>no rows returned</td></tr>";
	}
	else
	{
	while($row = mysqli_fetch_row($query))
    	{
    		echo "<tr><td data-th='S.No'>{$count}</td><td data-th='Name'>"."{$row[3]}"."."." "."{$row[0]}"." "."{$row[1]}"." "."{$row[2]}"."</td><td data-th='Email'>{$row[4]}</td><td data-th='Mobile'>{$row[5]}</td><td data-th='SubPeriodFromDate'>{$row[6]}</td><td data-th='SubPeriodToDate'>{$row[7]}</td><input type='hidden' value={$row[8]} name='uid'><td data-th='Edit'> <a href='./home.php?uid="."{$row[8]}"."' id='btn_read_HTML_Table' class='fa fa-edit' style='font-size: 20px;color:orange'></td>
                  <td data-th='Delete'><i class='fa fa-trash-o' style='font-size:20px;color:red'></i></td></tr>";
		    $count++;
    	}
		 echo "</table>";
    }
	
}
elseif($_POST['ids'] == "inactive"){
	
	$count = 1;
	$ids = "";
	$body = "Hello!, Please Renew your subscription";
	$emailList = array();
     
	 $query = mysqli_query($con, "SELECT userdetail.fname,userdetail.mname,userdetail.lname,userdetail.designation,userdetail.email,userdetail.cmobile,subscription.startdate,subscription.enddate,userdetail.uid FROM userdetail INNER JOIN subscription ON userdetail.uid = subscription.uid WHERE DATE_FORMAT(subscription.enddate, '%Y-%m-%d') < CURDATE()");
	 if(mysqli_num_rows($query) == 0)
	{
		echo "<tr><td colspan = '4'>no rows returned</td></tr>";
	}
	else
	{
	while($row = mysqli_fetch_row($query))
    	{
			array_push($emailList,$row[4]);
    		echo "<tr><td data-th='S.No'>{$count}</td><td data-th='Name'>"."{$row[3]}"."."." "."{$row[0]}"." "."{$row[1]}"." "."{$row[2]}"."</td><td data-th='Email'>{$row[4]}</td><td data-th='Mobile'>{$row[5]}</td><td data-th='SubPeriodFromDate'>{$row[6]}</td><td data-th='SubPeriodToDate'>{$row[7]}</td><input type='hidden' value={$row[8]} name='uid'><td data-th='Edit'><a href='./home.php?uid="."{$row[8]}"."'  id='btn_read_HTML_Table' class='fa fa-edit' style='font-size: 20px;color:orange'></td>
                  <td data-th='Delete'><i class='fa fa-trash-o' style='font-size:20px;color:red'></i></td></tr>";
		    $count++;
    	}
		 echo "</table><br><br>";
	foreach($emailList as $email){
		
		$ids .= $email.";";
	
	}
	      echo "<button class='btn pixel-btn mt-15' onclick=\"location.href='mailto:?bcc=".$ids."&subject=". "Renew Subscription" . "&body=". $body. "'\">Send Mail</button>";
		 //echo "<form action= 'mailto:?bcc=".$ids."&subject=". "Renew Subscription" . "&body=". $body. "'><input type='submit' class='btn pixel-btn mt-15' id='mail' name='mail' value='Send Mail' /></form>";
    }
	
}

?>
