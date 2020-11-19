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


                      <form class="form-group-lg">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Entry Date:</label>
                            <input type="date" class="form-control" id="inputEmail4">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">First Name:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="First Name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Middle Name:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Middle Name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Last Name:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Initial Of Congregation:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Designation</label>
                            <select id="inputState" class="form-control">
                              <option selected>Fr</option>
                              <option>Sr</option>
                              <option>Bro</option>
                              <option>Mr</option>
                              <option>Mrs</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">House Name:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Gender</label>
                            <select id="inputState" class="form-control">
                              <option selected>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Official Name:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Congregation/Diocese Name:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Mobile:</label>
                            <input type="tel" class="form-control" id="inputPassword4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Email:</label>
                            <input type="email" class="form-control" id="inputPassword4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Phone:</label>
                            <input type="tel" class="form-control" id="inputPassword4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Nationality:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">State:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">City:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">Current Address:</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">PIN:</label>
                            <input type="pin" class="form-control" id="inputPassword4" placeholder="">
                          </div>

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
        <label for="inputState">
            Subscription Type:</label>
        <select id="inputState" class="form-control">
          <option selected>Paid</option>
          <option>Complementary</option>
          <option>Others</option>
        </select>
      </div>
  <div class="form-group col-md-6">
  <label for="inputPassword4">Other Details:</label>
  <input type="text" class="form-control" id="inputPassword4" placeholder="">
  </div>
  <div class="form-group col-md-6">
  <label for="inputPassword4">Period From:</label>
  <input type="date" class="form-control" id="inputPassword4" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="inputPassword4">Period To:</label>
    <input type="date" class="form-control" id="inputPassword4" placeholder="">
    </div>
    <div class="form-group col-md-6">
        <label for="inputState">
            Method Of Payment:</label>
        <select id="inputState" class="form-control">
          <option selected>Cash</option>
          <option>Cheque</option>
          <option>Bank</option>
          <option>Others</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Other Details:</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="">
        </div>

        <div class="form-group col-md-6">
            <label for="inputState">
                Renew:</label>
            <select id="inputState" class="form-control">
              <option selected>No</option>
              <option>Yes</option>
            </select>
          </div>
  <div class="form-group col-md-6">
  <label for="inputPassword4">Renew Period To:</label>
  <input type="date" class="form-control" id="inputPassword4" placeholder="">
  </div>

  <div class="form-group col-md-6">
    <label for="inputState">
        Cancel:</label>
    <select id="inputState" class="form-control">
      <option selected>No</option>
      <option>Yes</option>
    </select>
  </div>

  </div>
</div>
                        <button type="submit" class="btn pixel-btn mt-15">Save</button>
                        <button type="submit" class="btn pixel-btn mt-15">Cancel</button>
                      </form>
                </div>
                
            </div>

            <!-- Single gallery Item -->
            <div id="myDIV2" class="view" data-wow-delay="0.4s">
			<table class="rwd-table" style="margin:auto;" id="table">
			<tr>
    <th>S.No</th>
    <th>Name</th>
	<th>Email</th>
	<th>Mobile</th>
    <th>SubPeriodFromDate</th>
    <th>SubPeriodToDate</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>

<?php
  
    
     $count = 1;
     
	 $query = mysqli_query($con, "SELECT userdetail.fname,userdetail.mname,userdetail.lname,userdetail.designation,userdetail.email,userdetail.cmobile,subscription.startdate,subscription.enddate FROM userdetail INNER JOIN subscription ON userdetail.uid = subscription.uid");
	 if(mysqli_num_rows($query) == 0)
	{
		echo "<tr><td colspan = '4'>no rows returned</td></tr>";
	}
	else
	{
	while($row = mysqli_fetch_row($query))
    	{
    		echo "<tr><td data-th='S.No'>{$count}</td><td data-th='Name'>"."{$row[3]}"."."." "."{$row[0]}"." "."{$row[1]}"." "."{$row[2]}"."</td><td data-th='Email'>{$row[4]}</td><td data-th='Mobile'>{$row[5]}</td><td data-th='SubPeriodFromDate'>{$row[6]}</td><td data-th='SubPeriodToDate'>{$row[7]}</td><td data-th='Edit'><i id='btn_read_HTML_Table' class='fa fa-edit' style='font-size: 20px;color:orange'></td>
                  <td data-th='Delete'><i class='fa fa-trash-o' style='font-size:20px;color:red'></i></td></tr>";
		    $count++;
    	}
    }
	    

?>

</table>

            
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
