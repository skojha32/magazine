<?php require "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

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
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Vachanam Balivediyil</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

	
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
<style>
.btn1{
    padding: 10px 10px;
    border: none;
    border-radius: 4px;
    transition-duration: 0.4s;
    background-color: #ff7902;
    color: white;
}
.btn1:hover {
  background-color: #688bfe;
  color: white;
  
}

</style>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="pixel-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="pixelNav">

                        <!-- Nav brand -->
                        <a href="home.html" class="nav-brand" style="color:white;">KJC</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Masters</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Congregation</a></li>
                                            <li><a href="#">Users</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Transactions</a>
                                        <ul class="dropdown">
                                            <li><a href="home.php">Subscription</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Reports</a>
                                        <ul class="dropdown">
                                            <li><a href="report.php">Subscription Report</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Settings</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Backup</a></li>
											<li><a href="add_admin.php">Add Admin</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <!-- Top Social Info -->
                                <div class="top-social-info ml-5">
                                    <button type="button" class="btn1">
                                        <span class="glyphicon glyphicon-log-out"></span> Log out
                                      </button>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/8.jpg);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Subscription</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
<style>
    #myDIV1 {
  padding: 50px 50px;
  

}
#myDIV2 {
  width: 100%;
  padding: 50px 50px;
  margin:auto;
  display:none;
}
</style>
    <!-- ##### Portfolio Area Start ###### -->
    <div class="pixel-portfolio-area section-padding-100">
        <!-- Portfolio Menu -->
        <div class="pixel-projects-menu">
            <div class="text-center portfolio-menu">
                <button style="outline:none" class="btn active" onclick="myFunction(1)">New</button>
                <button style="outline:none" class="btn" onclick="myFunction(2)">View</button>
            </div>
        </div>

        <style>            
           
            </style>
        

<?php
	if(isset($_GET['uid']))
	{	$uid_data = array();
		$uid = $_GET['uid'];
		$query =  mysqli_query($con,"SELECT * FROM `userdetail` WHERE uid=$uid");
		while($data = mysqli_fetch_assoc($query))
			{

				array_push($uid_data, $data['fname'],$data['mname'],$data['lname'],$data['conginitial'],$data['designation'],$data['hname'],$data['gender'],$data['oname'],$data['congname'],$data['cmobile'],$data['email'],$data['aphone'],$data['nationality'],$data['cstate'],$data['cdistrict'],$data['ccity'],$data['caddress'],$data['cpin'],$data['entrydate']);

			}
		$query =  mysqli_query($con,"SELECT * FROM `subscription` WHERE uid=$uid");	
		while($data = mysqli_fetch_assoc($query))
		{
			array_push($uid_data, $data['subid'],$data['type'],$data['comment'],$data['startdate'],$data['enddate'],$data['paymethod'],$data['comment1']);
		}
		

	}
?>
            <!-- Single gallery Item -->
            <div id="myDIV1" class="new" data-wow-delay="0.2s">
               
                <div class="new1">


                      <form class="form-group-lg" method="POST" action=<?php echo $_SERVER['PHP_SELF']; ?>>
                        
                       	<div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="entrydate">Entry Date:</label>
                            <input type="date" class="form-control" id="entrydate" name="entrydate" required value=<?php if(isset($uid_data)){ echo "'".$uid_data[18]."'" ; }?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="fname">First Name:</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required value=<?php if(isset($uid_data)){  echo "'".$uid_data[0]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="mname">Middle Name:</label>
                            <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name" value=<?php if(isset($uid_data)){  echo "'".$uid_data[1]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="lname">Last Name:</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value=<?php if(isset($uid_data)){  echo "'".$uid_data[2]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="conginitial">Initial Of Congregation:</label>
                            <input type="text" class="form-control" id="conginitial" name="conginitial" placeholder="" value=<?php if(isset($uid_data)){  echo "'".$uid_data[3]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="designation">Designation</label>
                            <select id="designation" name="designation" class="form-control" required value=<?php if(isset($uid_data)){  echo "'".$uid_data[4]."'";}?>>
                              <option disabled selected value> -- Select an option -- </option>
							  <option>Fr</option>
                              <option>Sr</option>
                              <option>Mr</option>
                              <option>Mrs</option>
							  <option>Miss</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="hname">House Name:</label>
                            <input type="text" class="form-control" id="hname" name="hname" placeholder="" value=<?php if(isset($uid_data)){ echo   "'".$uid_data[5]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" class="form-control" required value=<?php if(isset($uid_data)){  echo "'".$uid_data[6]."'";}?>>
                              <option disabled selected value> -- Select an option -- </option>
							  <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="oname">Official Name:</label>
                            <input type="text" class="form-control" id="oname" name="oname" placeholder="" value=<?php if(isset($uid_data)){  echo "'".$uid_data[7]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="congname">Congregation/Diocese Name:</label>
                            <input type="text" class="form-control" id="congname"  name="congname" placeholder="" value=<?php if(isset($uid_data)){  echo "'".$uid_data[8]."'";} ?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="cmobile">Mobile:</label>
                            <input type="tel" class="form-control" id="cmobile" name="cmobile" placeholder="" required value=<?php if(isset($uid_data)){  echo "'".$uid_data[9]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="" required value=<?php if(isset($uid_data)){  echo "'".$uid_data[10]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="" value=<?php  if(isset($uid_data)){ echo "'".$uid_data[11]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="nationality">Nationality:</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="" required value=<?php  if(isset($uid_data)){echo "'".$uid_data[12]."'"; }?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="cstate">State:</label>
                            <input type="text" class="form-control" id="cstate" name="cstate" placeholder="" required value=<?php if(isset($uid_data)){ echo "'".$uid_data[13]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="ccity">City:</label>
                            <input type="text" class="form-control" id="ccity" name="ccity" placeholder="" value=<?php if(isset($uid_data)){ echo "'".$uid_data[14]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="cdistrict">District:</label>
                            <input type="text" class="form-control" name="cdistrict" id="cdistrict" placeholder="" required value=<?php if(isset($uid_data)){ echo "'".$uid_data[15]."'";}?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="caddress">Address:</label>
                            <input type="text" class="form-control" id="caddress" name="caddress" placeholder="1234 Main St" required value=<?php if(isset($uid_data)){ echo "'".$uid_data[16]."'" ; }?>>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="cpin">PIN:</label>
                            <input type="pin" class="form-control" id="cpin" name="cpin" placeholder="" required value=<?php if(isset($uid_data)){ echo "'".$uid_data[17]."'" ; }?>>
                          </div>
                          <!--<input type="hidden" name="uid" value="0">-->
						  </div>
                        <style>
                            .chk1 label{
                                    margin-left: 15px;
                            }
                        </style>
                         <div class="form-row">
  <div class="form-group">
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">


  <input type="hidden" class="form-control" id="subid" name="subid" placeholder="" value=<?php if(isset($uid_data)){ echo "'".$uid_data[19]."'";}?>>

    <div class="form-group col-md-6">
        <label for="type">
            Subscription Type:</label>
        <select id="type" name="type" class="form-control" required value=<?php if(isset($uid_data)){ echo "'".$uid_data[20]."'" ; }?>>
          <option disabled selected value> -- Select an option -- </option>
		  <option>Paid</option>
          <option>Complementary</option>
          <option>Others</option>
        </select>
      </div>
  <div class="form-group col-md-6">
  <label for="comment">Other Details:</label>
  <input type="text" class="form-control" id="comment" name="comment" placeholder="" value=<?php if(isset($uid_data)){ echo "'".$uid_data[21]."'"; }?>>
  </div>
  <div class="form-group col-md-6">
  <label for="startdate">Period From:</label>
  <input type="date" class="form-control" id="startdate" name="startdate" placeholder=""  required value=<?php if(isset($uid_data)){ echo "'".$uid_data[22]."'" ; }?>>
  </div>
  <div class="form-group col-md-6">
    <label for="enddate">Period To:</label>
    <input type="date" class="form-control" id="enddate" name="enddate" placeholder="" required value=<?php if(isset($uid_data)){ echo "'".$uid_data[23]."'" ; }?>>
    </div>
    <div class="form-group col-md-6">
        <label for="paymethod">
            Method Of Payment:</label>
        <select id="paymethod" name="paymethod" class="form-control" required value=<?php if(isset($uid_data)){ echo "'".$uid_data[24]."'" ; }?>>
          <option disabled selected value> -- Select an option -- </option>
		  <option>Cash</option>
          <option>Cheque</option>
          <option>Bank</option>
          <option>Others</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="comment1">Other Details:</label>
        <input type="text" class="form-control" id="comment1" name="comment1" placeholder="" value=<?php if(isset($uid_data)){ echo "'".$uid_data[25]."'" ; }?>>
        </div>

  </div>
</div>
                        <button name="sbmt" type="submit" class="btn pixel-btn mt-15">Save</button>
                        <button type="reset" class="btn pixel-btn mt-15">Clear</button>
                      </form>
                </div>
                
            </div>


<?php

    function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
    if(isset($_POST['sbmt']))
    {
        $fname = test_input($_POST['fname']);
        $lname = test_input($_POST['lname']);
        $mname = test_input($_POST['mname']);
        $entrydate = test_input($_POST['entrydate']);
        $conginitial = test_input($_POST['conginitial']);
        $designation = test_input($_POST['designation']);
        $hname = test_input($_POST['hname']);
        $gender = test_input($_POST['gender']);
        $oname = test_input($_POST['oname']);
        $congname = test_input($_POST['congname']);
        $cmobile =  test_input($_POST['cmobile']);
        $email = test_input($_POST['email']);
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $phone = test_input($_POST['phone']);
        $nationality = test_input($_POST['nationality']);
        $cstate  = test_input($_POST['cstate']);
        $ccity = test_input($_POST['ccity']);
        $caddress = test_input($_POST['caddress']);
        $cpin = test_input($_POST['cpin']);
        $type = test_input($_POST['type']);
        $comment = test_input($_POST['comment']);
        $startdate = test_input($_POST['startdate']);
        $enddate = test_input($_POST['enddate']);
        $paymethod = test_input($_POST['paymethod']);
        //$renew = test_input($_POST['renew']);
        $comment1 = test_input($_POST['comment1']);
        //$renew_date = test_input($_POST['renew_date']);
        //$cancel = test_input($_POST['cancel']);
        $cdistrict = test_input($_POST['cdistrict']);
        //$uid = $_POST['uid'];
        $uid = 0;

        if ($comment == ""){
          $comment = "NULL";
        } 
        if ($comment1 == ""){
          $comment1 = "NULL";
        }  
       if($fname =="" ||  $entrydate=="" ||  $gender =="" || $cmobile=="" || $email=="" || $nationality == "" || $cstate == "" || $cdistrict == "" || $caddress == "" || $cpin == "" || $type == "" || $paymethod == "" || $startdate == "" || $enddate == ""   ){
           echo "<script type='text/javascript'>alert('Enter All the details Carefully')</script>";
           echo "<script type='text/javascript'>window.location.assign('home.php')</script>";
        }
	     // Validate e-mail
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             echo "<script type='text/javascript'>alert('Invalid Email')</script>";
             echo "<script type='text/javascript'>window.location.assign('home.php')</script>";
	    }
         // Validate Name and Address
         elseif(is_numeric($fname) || is_numeric($mname) || is_numeric($lname) || is_numeric($conginitial) || is_numeric($hname) || is_numeric($oname) || is_numeric($congname) || is_numeric($nationality) || is_numeric($cstate) || is_numeric($ccity) || is_numeric($caddress) || is_numeric($cdistrict))
         {
			 echo "<script type='text/javascript'>alert('Invalid Name or Address')</script>";
             echo "<script type='text/javascript'>window.location.assign('home.php')</script>";
			 
		 }
		 //Validate Pin
         elseif(!is_numeric($cpin) || strlen($cpin) <> 6) 
		 {
             echo "<script type='text/javascript'>alert('Invalid PinCode')</script>";
             echo "<script type='text/javascript'>window.location.assign('home.php')</script>";
			
		 }
         elseif($enddate < $startdate)
         {
			 echo "<script type='text/javascript'>alert('Invalid Subscription period')</script>";
             echo "<script type='text/javascript'>window.location.assign('home.php')</script>";
		 }	
		 
		 //Validate Phone
         elseif(!is_numeric($cmobile) || strlen($cmobile) <> 10)
         {
             echo "<script type='text/javascript'>alert('Invalid Mobile Number')</script>";
             echo "<script type='text/javascript'>window.location.assign('home.php')</script>";
		
		 }
		 elseif($phone != "" && is_numeric($phone))
		 {
			 if(strlen($phone) >10)
            {
				echo "<script type='text/javascript'>alert('Phone Number must be only 10 digits')</script>";
             echo "<script type='text/javascript'>window.location.assign('home.php')</script>";
			}
		 }
         elseif($phone != "" && !is_numeric($phone))
		 {
		     echo "<script type='text/javascript'>alert('Phone Number must be numeric')</script>";
             echo "<script type='text/javascript'>window.location.assign('home.php')</script>";
			
		 }
		 		 
		       				
        else
        {   
            if ($uid == 0){        
            
            $query =  mysqli_query($con,"INSERT INTO `userdetail`( `fname`, `mname`, `lname`, `conginitial`, `designation`, `hname`, `gender`, `oname`, `congname`, `cmobile`, `email`, `aphone`, `nationality`, `cstate`, `cdistrict`, `ccity`, `caddress`, `cpin`, `entrydate`) VALUES ('$fname','$mname','$lname','$conginitial','$designation','$hname','$gender','$oname','$congname','$cmobile','$email','$phone','$nationality','$cstate','$cdistrict','$ccity','$caddress','$cpin','$entrydate')");
                          
              
            if($query)
            {
			   $query = mysqli_query($con,"SELECT uid from `userdetail` where email='$email'");
               $uid_r = mysqli_fetch_assoc($query);
               $uid = $uid_r['uid'];
               $query = mysqli_query($con,"INSERT INTO `subscription`( `uid`, `type`, `paymethod`, `startdate`, `enddate`, `comment`,`comment1`) VALUES ($uid,'$type','$paymethod','$startdate','$enddate','$comment','$comment1')");
               if($query){
				   echo "<script type='text/javascript'>alert('Success')</script>";
			   }
			   else{
				   
				   echo "<script type='text/javascript'>alert('New Record Failed')</script>";
			   }
				
                #echo "<script type='text/javascript'>window.location.assign('home.php')</script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('New Record Failed')</script>";
                #echo "<script type='text/javascript'>window.location.assign('home.php')</script>";
            }
        }

        
      }  
    }
?>
            <!-- Single gallery Item -->
            <div id="myDIV2" class="view" data-wow-delay="0.4s">

<script>
            $(document).ready(function(){
                $("#active").click(function(){
					var Id = this.id;
                    $.ajax({
                        url:'data.php',
                        type:'post',
						data: {
							ids:Id
						},
						success:function(result){
							$("#result").html(result);
							}
                    });
                });
				$("#all").click(function(){
					var Id = this.id;
                    $.ajax({
                        url:'data.php',
                        type:'post',
						data: {
							ids:Id
						},
						success:function(result){
							$("#result").html(result);
							}
                    });
                });
				$("#inactive").click(function(){
					var Id = this.id;
                    $.ajax({
                        url:'data.php',
                        type:'post',
						data: {
							ids:Id
						},
						success:function(result){
							$("#result").html(result);
							}
                    });
                });
            });
</script>
			<input type="submit" class="btn pixel-btn mt-15" id="all" name="all" value="All" />
			<input type="submit" class="btn pixel-btn mt-15" id="active" name="active" value="Active" />
			<input type="submit" class="btn pixel-btn mt-15" id="inactive" name="inactive" value="Inactive" />
			<span id="result"></span> 
            
            </div>
            <link rel="stylesheet" href="./tstyle.css">
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
            
            <script>
                function myFunction(btnsel) {
                  if(btnsel===1){
                    var x = document.getElementById("myDIV1");
                    var y = document.getElementById("myDIV2");
                      x.style.display = "block";
                      y.style.display = "none";
                  }
                  if(btnsel===2){
                    var x = document.getElementById("myDIV1");
                    var y = document.getElementById("myDIV2");
                      x.style.display = "none";
                      y.style.display = "block";
                      
                  }  
                  
                }
                </script>
        


           

           

       

      
    </div>
    <br>
    <br>
    <!-- ##### Portfolio Area End ###### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-30-0">
        

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="copywrite-content">
                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
