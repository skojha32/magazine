<?php require "session.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <style>
    table{
    	width: 100%;
    	height: 100%;
    }
    </style>
</head>
<body>
<div class="container-fluid">
<table>

<?php


//Authentication Check


echo "<tr>";

$radio_option = $_GET['radio_option'];
$select_option = $_GET['select_option'];
if($radio_option == "District")
{
	   
	 $query = mysqli_query($con, "SELECT userdetail.fname,userdetail.mname,userdetail.lname,userdetail.designation,userdetail.cmobile,userdetail.caddress,userdetail.ccity,userdetail.cdistrict,userdetail.cstate,userdetail.cpin,subscription.startdate,subscription.enddate FROM userdetail INNER JOIN subscription ON userdetail.uid = subscription.uid WHERE (DATE_FORMAT(subscription.enddate, '%Y-%m-%d') >= CURDATE()) AND (userdetail.cdistrict = '$select_option') ORDER BY userdetail.fname");
		
}
elseif($radio_option == "subtype")
{
	
	
	 $query = mysqli_query($con, "SELECT userdetail.fname,userdetail.mname,userdetail.lname,userdetail.designation,userdetail.cmobile,userdetail.caddress,userdetail.ccity,userdetail.cdistrict,userdetail.cstate,userdetail.cpin,subscription.startdate,subscription.enddate FROM userdetail INNER JOIN subscription ON userdetail.uid = subscription.uid WHERE (DATE_FORMAT(subscription.enddate, '%Y-%m-%d') >= CURDATE()) AND (subscription.type = '$select_option') ORDER BY userdetail.fname");

}
elseif($radio_option == "paytype")
{
	  
	$query = mysqli_query($con, "SELECT userdetail.fname,userdetail.mname,userdetail.lname,userdetail.designation,userdetail.cmobile,userdetail.caddress,userdetail.ccity,userdetail.cdistrict,userdetail.cstate,userdetail.cpin,subscription.startdate,subscription.enddate FROM userdetail INNER JOIN subscription ON userdetail.uid = subscription.uid WHERE (DATE_FORMAT(subscription.enddate, '%Y-%m-%d') >= CURDATE()) AND (subscription.paymethod = '$select_option') ORDER BY userdetail.fname");
		
}
$count = 1;
if(mysqli_num_rows($query) == 0)
{
		echo "<tr><td colspan = '4'>no rows returned</td></tr>";
}
else
{
	while($row = mysqli_fetch_row($query))
    	{	
    		echo "<td><address>"."{$row[3]}"."."." "."{$row[0]}"." "."{$row[1]}"." "."{$row[2]}"."<br>{$row[5]},{$row[6]}<br>{$row[7]},{$row[8]}<br>PO NO. {$row[9]}</td>";
		    $count++;
		    if ($count % 3 == 0){
    				echo "</tr>";
    			}
    	}
}

?>

</table>
</div>
</body>
</html>
