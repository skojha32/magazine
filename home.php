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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="portfolio.html">Masters</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Congregation Master</a></li>
                                            <li><a href="about.html">User Master</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio.html">Transactions</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Subscription</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio.html">Reports</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Subscription Report</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio.html">Settings</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Backup</a></li>
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
        

            <!-- Single gallery Item -->
            <div id="myDIV1" class="new" data-wow-delay="0.2s">
               
                <div class="new1">


                      <form class="form-group-lg" method="POST" action="home.php">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="entrydate">Entry Date:</label>
                            <input type="date" class="form-control" id="entrydate" name="entrydate">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="fname">First Name:</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="mname">Middle Name:</label>
                            <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="lname">Last Name:</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="conginitial">Initial Of Congregation:</label>
                            <input type="text" class="form-control" id="conginitial" name="conginitial" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="designation">Designation</label>
                            <select id="designation" name="designation" class="form-control">
                              <option selected>Fr</option>
                              <option>Sr</option>
                              <option>Bro</option>
                              <option>Mr</option>
                              <option>Mrs</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="hname">House Name:</label>
                            <input type="text" class="form-control" id="hname" name="hname" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" class="form-control">
                              <option selected>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="oname">Official Name:</label>
                            <input type="text" class="form-control" id="oname" name="oname" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="congname">Congregation/Diocese Name:</label>
                            <input type="text" class="form-control" id="congname"  name="congname" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="cmobile">Mobile:</label>
                            <input type="tel" class="form-control" id="cmobile" name="cmobile" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="nationality">Nationality:</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="cstate">State:</label>
                            <input type="text" class="form-control" id="cstate" name="cstate" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="ccity">City:</label>
                            <input type="text" class="form-control" id="ccity" name="ccity" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="cdistrict">District:</label>
                            <input type="text" class="form-control" name="cdistrict" id="cdistrict" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="caddress">Permanent Address:</label>
                            <input type="text" class="form-control" id="caddress" name="caddress" placeholder="1234 Main St">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="cpin">PIN:</label>
                            <input type="pin" class="form-control" id="cpin" name="cpin" placeholder="">
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

    <div class="form-group col-md-6">
        <label for="type">
            Subscription Type:</label>
        <select id="type" name="type" class="form-control">
          <option selected>Paid</option>
          <option>Complementary</option>
          <option>Others</option>
        </select>
      </div>
  <div class="form-group col-md-6">
  <label for="comment">Other Details:</label>
  <input type="text" class="form-control" id="comment" name="comment" placeholder="">
  </div>
  <div class="form-group col-md-6">
  <label for="startdate">Period From:</label>
  <input type="date" class="form-control" id="startdate" name="startdate" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="enddate">Period To:</label>
    <input type="date" class="form-control" id="enddate" name="enddate" placeholder="">
    </div>
    <div class="form-group col-md-6">
        <label for="paymethod">
            Method Of Payment:</label>
        <select id="paymethod" name="paymethod" class="form-control">
          <option selected>Cash</option>
          <option>Cheque</option>
          <option>Bank</option>
          <option>Others</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="comment1">Other Details:</label>
        <input type="text" class="form-control" id="comment1" name="comment1" placeholder="">
        </div>

        <div class="form-group col-md-6">
            <label for="renew">
                Renew:</label>
            <select id="renew" name="renew" class="form-control">
              <option selected>No</option>
              <option>Yes</option>
            </select>
          </div>
  <div class="form-group col-md-6">
  <label for="renew_date">Renew Period To:</label>
  <input type="date" class="form-control" id="renew_date" name="renew_date" placeholder="">
  </div>

  <div class="form-group col-md-6">
    <label for="cancel">
        Cancel:</label>
    <select id="cancel" name="cancel" class="form-control">
      <option selected>No</option>
      <option>Yes</option>
    </select>
  </div>

  </div>
</div>
                        <button name="sbmt" type="submit" class="btn pixel-btn mt-15">Save</button>
                        <button type="submit" class="btn pixel-btn mt-15">Cancel</button>
                      </form>
                </div>
                
            </div>


<?php
    if(isset($_POST['sbmt']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mname = $_POST['mname'];
        $entrydate = $_POST['entrydate'];
        $conginitial = $_POST['conginitial'];
        $designation = $_POST['designation'];
        $hname = $_POST['hname'];
        $gender = $_POST['gender'];
        $oname = $_POST['oname'];
        $congname = $_POST['congname'];
        $cmobile =  $_POST['cmobile'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $nationality = $_POST['nationality'];
        $cstate  = $_POST['cstate'];
        $ccity = $_POST['ccity'];
        $caddress = $_POST['caddress'];
        $cpin = $_POST['cpin'];
        $type = $_POST['type'];
        $comment = $_POST['comment'];
        $startdate = $_POST['startdate'];
        $enddate = $_POST['enddate'];
        $paymethod = $_POST['paymethod'];
        $renew = $_POST['renew'];
        $comment1 = $_POST['comment1'];
        $renew_date = $_POST['renew_date'];
        $cancel = $_POST['cancel'];
        $cdistrict = $_POST['cdistrict'];
        //$uid = $_POST['uid'];
        $uid = 0;

        if ($comment == ""){
          $comment = 'null';
        } 
        if ($comment1 == ""){
          $comment1 = 'null';
        } 
        if ($renew_date == ""){
          $renew_date = 'null';
        } 
       if($fname =="" ||  $entrydate=="" ||  $gender =="" || $cmobile=="" || $email=="" || $nationality == "" || $cstate == "" || $cdistrict == "" || $caddress == "" || $cpin == "" || $type == "" || $paymethod == "" || $startdate == "" || $enddate == ""   ){
      echo "<script type='text/javascript'>alert('Enter All the details Carefully')</script>";
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
               $query = mysqli_query($con,"INSERT INTO `subscription`( `uid`, `type`, `paymethod`, `renew`, `startdate`, `enddate`, `renewdate`, `cancel`, `comment`,`comment1`) VALUES ($uid,'$type','$paymethod','$renew','$startdate','$enddate','$renew_date','$cancel','$comment','$comment1')");
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
