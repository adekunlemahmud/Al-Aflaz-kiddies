
<?php

if (isset($_POST["submit"])) {
    
    $name=$_POST["name"];
    $mailFrom=$_POST["mail"];
    $phone=$_POST["phone"];
    $message=$_POST["message"];



    $mailTo = "mahmudabumahmud@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "You received a mail from ".$name.".\n\n".$message;


    mail($mailTo, $txt, $headers);
     //header("Location: index.php?mailsent");
    echo "message sent";
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
		<link rel="shortcut icon" href="https://res.cloudinary.com/dwszstiol/image/upload/v1587652905/al-aflaz/logo_mggujt.jpg">
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
			/*h4,
			.h4 {
			  font-size: 1.6rem;
			}*/
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
				color: var(--secondary-color)  !important;
				border: 2px solid var(--secondary-color)  !important;
			}
			.btn-primary:hover, .btn-secondary:hover, .btn-primary-outline:hover, .btn-secondary-secondary:hover{
				border-color: inherit !important;
				opacity: 0.8 !important;
			}

			.fas{
				font-size: xx-large;
    color: #10b541 !important;

			}

			/* .breath{
				animation-name: breath;
    animation-duration: 2s;
    animation-direction: alternate;
    animation-timing-function: ease-in-out;
    animation-iteration-count: infinite;
			}
			@keyframes breath {
	0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);}	
	40% {-webkit-transform: translateY(-15px);}
	
} */


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
			/*-----------Other styles--------*/
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
      .breadcrumb{
        align-content: center;
        background-color:  #7ae835;
        border-radius: 0px;
      }
      .breadcrumb-item{
        color: white;
        margin-left: 50px;
        font-weight: bolder;
        font: serif;
        font-family: monospace;
        text-shadow: 2px 2px 3px black; 
      }
      .text-head{
        color: #10b541;
        text-shadow: 1px 1px 2px #10b541;
        /*font-weight: bold; */
        margin-top: 10px;
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
.bg{
	background-image:  linear-gradient(to bottom, rgba(213, 240, 209, 0.52), rgba(117, 19, 93, 0.73)),
url('https://res.cloudinary.com/dwszstiol/image/upload/v1587653378/al-aflaz/bg1_hxc4ag.jpg');
	 
	height: 200px;
	
}
.center{
	 text-align: center;
	
}
.p-dec{
	color: #10b541;
	font-size: 24px;

}
.acad-sec{
	margin-top: 5.4em;
}
.acad-head{
	color: white;
	padding-left: 60px;
	padding-top: 2em  ; 
}
.st-anch{
	color: white;
	font-size: 14px;
	margin-bottom: 1em;

}
.st-anch a:hover{
				color: white !important;
				text-decoration: none;
				font-weight: bold;
			}
			.form-head{
				font-size: 18px;
				color: #10b541;
			}
			.form-text{
				font-size: 14px;
				
			}
			/*<loader> */
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
/*</loader>*/

      
	    </style>
		<title>Al Aflaz Kiddies</title>
	</head>
	<body>
		<!-- preloader starts -->
		<div class="loader">

  		<img class="loader-img" src="https://res.cloudinary.com/dwszstiol/image/upload/v1587652605/al-aflaz/logo1_mt1hbx.svg" alt="Loading..." />
  		
  		<img id="loader" class="loader-img" src="https://res.cloudinary.com/dwszstiol/image/upload/v1588514791/al-aflaz/loader1_qwivsd.gif" alt="Loading..." />

		</div>
		<!-- preloader ends -->
		<header>
			<nav class="navbar fixed-top navbar-expand-lg navbar-main bg-white">
				<div class="container">
					<a class="navbar-brand" href="../index.html">
						<img src="https://res.cloudinary.com/dwszstiol/image/upload/v1587652605/al-aflaz/logo1_mt1hbx.svg" alt="logo" class="img img-responsive" height="100" width="100">
					</a>
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
						<!-- <span class="navbar-toggler-icon"><i class="fa fa-bars fa-lg py-1 text-white"></i></span> -->
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item ">
                <a class="nav-link" href="../index.html" data-toggle="tooltip" data-placement="bottom"  title="Home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="about.html" data-toggle="tooltip" data-placement="bottom"  title="About Us">About Us</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="academics.html">Academics</a> -->
            <li class="nav-item dropdown ">
                <!-- <a class="nav-link" href="academics.html" data-toggle="tooltip" data-placement="bottom"  title="Academics">Academics</a> -->

              <a class="nav-link dropdown-toggle" href="academics.html" role="button" 
   						 aria-haspopup="true" aria-expanded="true" data-toggle="tooltip" data-placement="right"  title="Academics">Academics</a>
    					<div class="dropdown-content">
     					<a class="" href="admission.html">Admission</a>
      					<a class="" href="islamiyyah.html">Islamiyyah Section</a>
      					<a class="" href="#">Results</a>
      					<!-- <div class="dropdown-divider"></div>
      					<a class="" href="#">Separated link</a> -->
    					</div>
              </li>
              <!-- </li> -->
              <li class="nav-item">
                <a class="nav-link" href="events.html" data-toggle="tooltip" data-placement="bottom"  title="Events">Events</a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="contacts.php" data-toggle="tooltip" data-placement="bottom"  title="Contacts">Contacts</a>
              </li>                              
            </ul>

          </div>
          
        </div>
				
			</nav>

						<!--<marquee>NURTURING FOR EXCELLENCE IN BOTH WORLDS</marquee>-->
				<!--Carousel begins-->
		
		</header>
		<section class="acad-sec">
			<div class="bg">
				<h3 class="acad-head">Contact Us</h3>
				<span class="acad-head st-anch"><i class="fa fa-home" aria-hidden="true"></i>/<a class="st-anch" href="../index.html">Home</a>/<a class="st-anch" href="#">Contact Us</a></span>
			</div>
		</section>
		<section id="section-id-1579638807800" class="sppb-section  double_border_bottom"  ><div class="sppb-row-container"><div class="sppb-row"><div class="sppb-col-md-6"><div id="column-id-1579638807801" class="sppb-addon-container" ><div id="sppb-addon-1579638807804" class="clearfix" ><div class="sppb-addon sppb-addon-alert ">
		<main>
			
		  	<section class="mt-3 mb-3 pt-5">
		  		
              

          <div class="container">
		  			<div class="row">
		  				<div class="col-md-6">
		  					
		  			
		  		<div class="text-left ">
                  <h4 class="text-head">Get in touch with us here</h4>
                 
			  		<form method="post" action="contacts.php">
  <div class="form-group">
    <label class="form-head" for="exampleFormControlInput1">Name</label>
    <input name="name" type="text" required="" class="form-control form-text" id="exampleFormControlInput1" placeholder="Full Name">
  </div>
  <div class="form-group">
    <label  class="form-head" for="exampleFormControlInput1">Email</label>
    <input name="mail" type="email" required="" class="form-control form-text" id="exampleFormControlInput1" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="form-head" for="exampleFormControlInput1">Phone</label>
    <input name="phone" type="text" required="" class="form-control form-text" id="exampleFormControlInput1" placeholder="Phone">
  </div>

  
  <div class="form-group">
    <label class="form-head" for="exampleFormControlTextarea1">Message</label>
    <textarea name="message" required="" class="form-control form-text" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-card">Send</button>
  
</form >
		  				</div>
		  			</div>
		  				<div class="col-md-6">
		  					<div class="text-center">
		  						<div class="row">
		  							<div class="col-md-6 p-dec">
		  								<p><i class="far fa-address-card"></i></p>
		  								<p>Behind LEA Primary School, Lugbe Zone 9, Abuja</p>
		  							</div>
		  							
		  							<div class="col-md-6 p-dec">
		  								<p><i class="fas fa-phone-square-alt"></i></p>
		  								<p>08063702081 | 08154655990</p>
		  								
		  							</div>
		  						</div>
		  						
		  						 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1970.5250788553813!2d7.3714176578979185!3d8.967525747816838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e736d174b15fb%3A0xe5191d19031806aa!2sAl%20Aflaz%20Kiddies%20School%2C%20Lugbe!5e0!3m2!1sen!2sng!4v1587500590467!5m2!1sen!2sng" width="500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		  					</div>
		  				</div>
		  		
		  		
		  	</div>
		  </div>


        
       
            
          <!--   <div class="container">
                  <div class="card">
  					<div class="card-body center">
    					<p class="p-center">For enquiries contact us on - 08063702081, 08154655990 </p>
    					<p class="p-center">Email: alaflazkiddies@gmail.com</p>
  					</div>
				</div>
			  					
                </div> -->
  		
		  	
</div>
</section>
		  	
		</main>

		
		<footer class="bg-white pt-4 " data-aos="">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-2">
						<img src="https://res.cloudinary.com/dwszstiol/image/upload/v1587652605/al-aflaz/logo1_mt1hbx.svg" alt="" class="img img-responsive mb-2" height="70" width="auto">
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
		<script>
			AOS.init();
		  </script>
		  <script type="text/javascript">
  window.addEventListener("load", function(){
  	const loader = document.querySelector(".loader");
  	loader.className += " hidden";
  });
</script>
	</body>
</html>
