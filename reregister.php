<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: form.php");
//     exit;
// }
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = $_POST['username'];
	$select = "SELECT * from registration WHERE username = '".$username."'";
     $result = mysqli_query($link,$select);
    if(mysqli_num_rows($result)>0)
       {

       
       	header("location: reregister.php");
        die(0);
       }
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);

     }

    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables

                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
        			// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session

                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                                                       
                            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
 							 $sql = mysqli_query($link, "INSERT INTO register (`username`,`password`,`hashedpassword`) VALUES ('$username', '$password', '$hashed_password')" );  
                            // Redirect user to welcome page
                            header("location: form.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered is not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <meta name="description" content="Al-Aflaz Kiddies School, islamic school, abuja islamic school, lugbe airport road">
		<meta name="author" content="Al Aflaz Kiddies School">
		<link rel="shortcut icon" href="../images/logo.jpg">
		<!-- Fontawesome CSS -->
	    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	    <!-- Bootstrap CSS -->
		<link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
		<!-- Material Design Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
		<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
		<!-- Add animations -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<!-- end add animations -->
	    <!-- Main css -->
	    <style type="text/css">
	    	/*Main page style by message*/
			@import url(http://fonts.googleapis.com/css?family=Open+Sans);
			:root{
				--primary-color: #091429;
				--secondary-color: #0ABAB5;
				--dark-color: #262626;
				--light-color: #B1B1B1;
			}
			   /****************************/
			  /*------- main styles ------*/
			 /****************************/
			html{
				scroll-behavior: smooth;
			}
			body{
				font-family: 'Open Sans', sans-serif !important;
				font-size: calc(14px + (26 - 14) * ((100vw - 300px) / (1600 - 300)))  !important;
			}
			h1,
			.h1{
			  	font-weight: 600 !important;
				font-size: 3.5rem;
			  	font-size: calc(38px + 4 * (100vw - 767px) / 700);
			  	line-height: 120% !important;
				vertical-align: top !important;
			}
			h2,
			.h2 {
			  	font-size: 3.2rem;
			  	font-size: calc(28px + 4 * (100vw - 767px) / 700);
			  	font-weight: 700;
			}
			h3,
			.h3 {
			  	font-size: 2rem !important;
			  	font-size: calc(24px + 4 * (100vw - 767px) / 700) !important;
			  	font-weight: 600 !important;
				line-height: 150% !important;

			}
			h4,
			.h4 {
			  font-size: 1.6rem;
			}
			h5,
			.h5 {
			  	font-size: 1.2rem;
				font-weight: 700 !important;
				line-height: 150% !important;
			}
			h6,
			.h6 {
			  font-size: 1.4rem;
			}
			p{
				font-size: 16px !important;
				font-weight: normal;
				line-height: 32px;
			}
			p.bold{
				font-size: 18px !important;
				font-weight: 700;
				line-height: 32px;
			}
			.text-primary{
				color: var(--primary-color) !important;
			}
			.text-secondary{
				color: var(--secondary-color) !important;
			}
			.text-dark{
				color: var(--dark-color) !important;
			}
			.text-light{
				color: var(--light-color) !important;
			}
			.bg-primary{
				background-color: var(--primary-color) !important;
			}
			.bg-secondary{
				background-color: var(--secondary-color) !important;
			}
			.bg-light{
				background-color: var(--light-color) !important;
			}
			.bg-dark{
				background-color: var(--dark-color) !important;
			}
			.btn{
				border: none !important;
				display: inline-block;
				position: relative;
				overflow: hidden;
				transition: all ease-in-out .5s;
			}
			
			.btn::after {
				content: "";
				display: block;
				position: absolute;
				top: 0;
				left: 25%;
				height: 100%;
				width: 40%;
				background-color: #000;
				border-radius: 50%;
				opacity: 0;
				pointer-events: none;
				transition: all ease-in-out 1s;
				transform: scale(5, 5);
			}
			.btn:active::after {
				padding: 0;
				margin: 0;
				opacity: .2;
				transition: 0s;
				transform: scale(0, 0);
			}
			.btn-error{
				background-color: red !important;
				color: white;
			}
			.btn-primary{
				background-color: var(--primary-color) !important;

			}
			.btn-secondary{
				background-color: var(--secondary-color) !important;
			}
			.btn-primary-outline{
				background-color: transparent !important;
				color: var(--primary-color)  !important;
				border: 1px solid var(--primary-color)  !important;
			}
			.btn-secondary-outline{
				background-color: transparent !important;
				color: white  !important;
				border: 2px solid white  !important;
			}
			.btn-primary:hover, .btn-secondary:hover, .btn-primary-outline:hover, .btn-secondary-secondary:hover{
				border-color: inherit !important;
				opacity: 0.8 !important;
			}

			.fas{
				font-size: xx-large;
    			color: #10b541 !important;

			}

			#err{
				color: red;
			}


			   /****************************/
			  /*-----Landing Page---------*/
			 /****************************/
			/*------Navbar------------*/
			.navbar-main {
			    background-color: var(--primary-color);
			}
			.navbar-main .navbar-brand,
			.navbar-main .navbar-text {
			    color: rgba(255, 255, 255, 0.9);
			}
			.navbar-main .navbar-nav .nav-link {
				font-size: 1rem;
			    color: #4ddb70;
			    font: 15px sans-serif;
			}
			.navbar-main .nav-item.active .nav-link,
			.navbar-main .nav-item:hover .nav-link {
			    color: #30a14c;
			}
			/* for navbar toggler design */
			.icon-bar {
				width: 22px; 
				height: 2px;
				background-color: #B6B6B6;
				display: block;
				transition: all 0.2s;
				margin-top: 4px
			}
			.navbar-toggler {
			  border: none;
			  background: transparent !important;
			}
			.navbar-toggler:focus{
				outline: none !important;
			}
			/* navbar toggler animation*/
			.navbar-toggler .top-bar {
			  transform: rotate(45deg);
			  transform-origin: 10% 10%;
			} 
			.navbar-toggler .middle-bar {
			  opacity: 0;
			} 
			.navbar-toggler .bottom-bar {
			  transform: rotate(-45deg);
			  transform-origin: 10% 90%;
			}
			.navbar-toggler.collapsed .top-bar {
			  transform: rotate(0);
			} 
			.navbar-toggler.collapsed .middle-bar {
			  opacity: 1;
			}
			.navbar-toggler.collapsed .bottom-bar {
			  transform: rotate(0);
			}
			/*-----------footer list--------*/
			.list-unstyled li a{
				font-size: 17px !important;
				transition: 0.25s !important;
				font-style: normal;
				font-weight: normal;
			}
			.list-unstyled li a:hover{
				color: gray !important;
				text-decoration: none;
			}
			.text-head{
        color: #7aff33;
        text-shadow: 1px 1px 3px black;
        font-weight: bold; 
        margin-top: 10px;
        font-size: 
      }
			/*-----------Other styles--------*/
			.index-sec{
        margin-top: 5.4em;
      }
			.carousalhead{
				color: #fff;
        		text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
        		font: 40px sans-serif;
			}
			.carouselcolor{
				color: red;
			}
			p.double {border-style: none none double none;
						color: #3892f2;
						padding-bottom: 10px;
			}
			.card-color{
				background-color: #dffac5;
			}
			.card-title-color{
				color: #278024;
			}
			.card-text-color{
				color: #10b541;
				font: sans-serif;
			}
			.bg-cardinal{
				background-color: #047525;
			}
			.btn-card{
				background-color: #10b541;
				color: white;
			}
			.arrow{
				color: #10b541;
			}
			/*dropdown features*/
			
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  width: 160px;
  height: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size: 14px;
}

.dropdown-content a {
  color: black;
  padding: 3px 18px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
/*dropdown features ends*/
.loader-img{
	height: 100px;
	display: block;
	position: absolute;
	

}

.loader {
  position: fixed;
  z-index: 99;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;

  background: #f1f2f3;
}

.loader.hidden{
	animation: fadeOut 1s;
	animation-fill-mode: forwards;
}
@keyframes fadeOut {
	100%{
		opacity: 0;
		visibility: hidden;
	}
}
#loader{
	margin-top: 12em;
}


			
.login-card{
	margin-top: 6em;
	display: flex;
   justify-content: center;
   align-items: center;
   position: relative;
}
.info{
	font-size: 14px;
	color: #10b541; 
}
	    </style>
		<title>Al Aflaz Kiddies</title>
	</head>
	<body>
		<!-- preloader starts -->
		<div class="loader">

  		<img class="loader-img" src="../images/logo1.svg" alt="Loading..." />
  		
  		<img id="loader" class="loader-img" src="../images/loader1.gif" alt="Loading..." />

		</div>
		<!-- preloader ends -->
		<header>
			<nav class="navbar fixed-top navbar-expand-lg navbar-main bg-white">
				<div class="container">
					<a class="navbar-brand" href="../index.html">
						<img src="../images/logo1.svg" alt="logo" class="img img-responsive" height="100" width="100">
					</a>
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
						<!-- <span class="navbar-toggler-icon"><i class="fa fa-bars fa-lg py-1 text-white"></i></span> -->
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<a class="nav-link" href="../index.html" data-toggle="tooltip" data-placement="bottom"  title="Home">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html" data-toggle="tooltip" data-placement="bottom"  title="About Us">About Us</a>
							</li>
							
						<li class="nav-item dropdown">
                <!-- <a class="nav-link" href="academics.html" data-toggle="tooltip" data-placement="bottom"  title="Academics">Academics</a> -->

    					<a class="nav-link dropdown-toggle" href="academics.html" role="button" 
   						 aria-haspopup="true" aria-expanded="true" data-toggle="tooltip" data-placement="right"  title="Academics">Academics</a>
    					<div class="dropdown-content">
     					<a class="" href="admission.html">Admission</a>
     					<a class="" href="islamiyyah.html">Islamiyyah Section</a>
      					<a class="" href="#">Results</a>
      					<!-- <a class="" href="#">Something else here</a>
      					<div class="dropdown-divider"></div>
      					<a class="" href="#">Separated link</a> -->
    					</div>
  						</li>
							<!-- </li> -->
							<li class="nav-item">
								<a class="nav-link" href="events.html" data-toggle="tooltip" data-placement="bottom"  title="Events">Events</a>
							</li> 
							<li class="nav-item">
								<a class="nav-link" href="contacts.php" data-toggle="tooltip" data-placement="bottom"  title="Contacts">Contacts</a>
							</li>                              
						</ul>

					</div>
					
				</div>
				
			</nav>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="color: red;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color: red;">Error Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <p class="info" style="color: red;">The user name already exist.</p>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">OK</button>
        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
      </div>
    </div>
  </div>
</div>
<section class="login-card">
				<div class="card " style="width: 18rem;">
  <img src="https://res.cloudinary.com/dwszstiol/image/upload/v1587652605/al-aflaz/logo1_mt1hbx.svg" class="card-img-top" height="100" width="100" alt="...">
  <div class="card-body">
    <h5 class="card-title">Login Details</h5>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

    <label class="info" >UserName</label>
    <input name="username" type="text"  class="form-control form-text" value="<?php echo $username; ?>" id="userName" placeholder="Enter UserName">
                <span id="err" class="help-block info"><?php echo $username_err; ?></span>
  </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

    <label  class="info">Password</label>
    <input name="password" type="password"  class="form-control form-text"  placeholder="Enter Password">
    <span class="help-block info" id="err"><?php echo $password_err; ?></span>
  </div>
   <input type="submit" name="submit" class="btn btn-card" value="Login">

  

</form>
</div>
</div>
<div class="modal fade" id="errorModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <p class="info">Enter the Login Details provided to you  by the school's admin</p>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-card" data-dismiss="modal">OK</button>
        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
      </div>
    </div>
  </div>
</div>
</section>

						

		  	<section class="bg-cardinal">
		  		<div class="container mt-4 py-4">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<h3 class="text-white py-4 mb-4 text-center" data-aos="zoom-in">Our three cardinal <br> points</h3>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-4">
		  					<div class="text-center text-white">
		  						<img class="rounded" src="../images/nigerian.jpg" class="img img-responsive" height="auto" width="100%">
		  						<p class="text-white text-bold mt-4">Nigerian</p>
		  					</div>
		  				</div>
		  				<div class="col-md-4">
		  					<div class="text-center text-white">
		  						<img class="rounded" src="../images/british.jpg" class="img img-responsive" height="230.30px" width="100%">
		  						<p class="text-white text-bold mt-4">British</p>
		  					</div>
		  				</div>
		  				<div class="col-md-4">
		  					<div class="text-center text-white">
		  						<img class="rounded" src="../images/islamic.jpg" class="img img-responsive" height="auto" width="100%">
		  						<p class="text-white text-bold mt-4">Islamic</p>
		  					</div>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<p class="text-center">
			  					<a href="academics.html" target="_blank" class="btn btn-secondary-outline btn-lg breath ">Learn More</a>
			  				</p>
		  				</div>
		  			</div> 
		  		</div>
		  		<div id="divText">
		  			testing
		  		</div>
		  	</section>
		</main>

		
		<footer class="bg-white pt-4 " data-aos="fade-down">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-2">
						<img src="../images/logo1.svg" alt="" class="img img-responsive mb-2" height="70" width="auto">
						<ul class="list-unstyled">
							<li><a class="text-dark" href="academics.html">Academics</a></li>
							<li><a class="text-dark" href="about.html">About Us</a></li>
							<li><a class="text-dark" href="events.html">Events</a></li>
							<!-- <li><a class="text-dark" href="faq.html">FAQ</a></li> -->
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h5>Opening Hours</h5>
						
							<p>Monday to Friday 7:30am to 6:00pm</p>
							<p>Saturday and Sunday 10:00am to 4:00pm</p>
							<p>Islamiyyah for Adults also available</p>
							
						
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h5>Reach us</h5>
						<p class="text-dark small">
								Al Aflaz Kiddies School
								Lugbe, Airport Road,
								Abuja,
								Nigeria.
								08063702081
						</p>
						<h5 class="">
							<a href="https://facebook.com" class="text-dark mr-2"><i class="fab fa-facebook-square"></i></a> 
							<a href="https://twitter.com" class="text-dark"><i class="fab fa-twitter-square"></i></a>
						</h5>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-2">
						<h5>Stay up to date</h5>
						<p class="text-dark small">
							Get emails about our newest events you can visit. 
						</p>
						<form class="form-inline">
							<div class="form-group mb-2 mr-2">
								<label for="staticEmail2" class="sr-only">Email</label>
								<input type="email" class="form-control" id="staticEmail2" value="" placeholder="Email Address" required>
							</div>
							<button type="submit" class="btn btn-card mb-2">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
			<div class="bg-white text-left py-2 mt-0">
				<div class="container">
					<p class="float-right">
			    	<a href="#" ><i class="fas fa-arrow-up "></i></a>
				    </p>
				    <p>&copy; AL AFLAZ 2020.</p>
				</div>
			</div>
		</footer>
		<!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!-- <script type="text/javascript" src="js/main.js"></script> -->
		<script type="text/javascript">
  window.addEventListener("load", function(){
  	const loader = document.querySelector(".loader");
  	loader.className += " hidden";
  });
</script>
		<script>
			AOS.init();

			$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
		  </script>
		  <script type="text/javascript">
		  	
		  	function login(){
		  		const userName = document.getElementById("userName").value;
		  	const password = document.getElementById("password").value;
		  		if (userName == "admin" && password == "admin"){
		  			alert ("Login successfully");

		  			window.location = "form.html";
		  			return false;
		  		} 
		  		else{
		  			alert("Incorrect Login details");
		  		}
		  	}
		  	
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });


		  </script>
	</body>
</html>
