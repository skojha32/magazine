<?php require "config.php";






$query =  mysqli_query($con,"INSERT INTO `userdetail`( `fname`, `mname`, `lname`, `conginitial`, `designation`, `hname`, `gender`, `oname`, `congname`, `cmobile`, `email`, `aphone`, `nationality`, `cstate`, `cdistrict`, `ccity`, `caddress`, `cpin`, `entrydate`) VALUES ('dasd','dasd','gdgfd','asd','sdfs','34','male','dasdas','sdasd','9997255049','gangwar@gmail.com','45654','indian','uttar pradesh','bareilly','bareilly','x-1 shastri nagar','243122','01-11-2020')");

if ($query){
	echo "true done";

}
else
{
	echo "no";
}


?>

#INSERT INTO `subscription`( `uid`, `type`, `paymethod`, `renew`, `startdate`, `enddate`,  `cancel`, `comment`) VALUES (16,'paid','cash','no','01-11-2020','02-12-2021','no','comment')
