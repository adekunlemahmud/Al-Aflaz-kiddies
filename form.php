
<?php

session_start();
    // Include config file
$localhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "alaflaz";

$link = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if(isset($_SESSION['username'])){
    // echo ($_SESSION['username']);
    $username = $_SESSION['username'];
$select = mysqli_query($link, "SELECT * from registration");
    while ($output = mysqli_fetch_assoc($select)){
         $admission = $output['s/n'];
         $admission = $admission + 1;
         $admissionNo = "AF14420".$admission ;
         //  addmission number concatenated
             
    }

     
}



if (isset($_POST["submit"])){
	// file name with random number so that similar file don't get replaced
	
	$fileName = $_FILES["inFile"]["name"];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$permanent_file_name = uniqid('', true).".".$fileActualExt;

	// temporary file name to store file
	$tempname = $_FILES["inFile"]["tmp_name"];

	// upload directory path
	$uploads_dir = 'uploads/'.$permanent_file_name;

	// moving uploaded to specific location
	move_uploaded_file($tempname, $uploads_dir);




	// second file for birth certificate
	$fileNameB = $_FILES["birth_certificate"]["name"];
	$fileExtB = explode('.', $fileNameB);
	$fileActualExtB = strtolower(end($fileExtB));
	$permanent_file_nameB = uniqid('', true).".".$fileActualExtB;

	$tempnameB = $_FILES["birth_certificate"]["tmp_name"];
	$uploads_dirB = 'birth_cert/'.$permanent_file_nameB;
	move_uploaded_file($tempnameB, $uploads_dirB);

	
	// third file
	$fileNameL = $_FILES["last_result"]["name"];
	$fileExtL = explode('.', $fileNameL);
	$fileActualExtL = strtolower(end($fileExtL));
	$permanent_file_nameL = uniqid('', true).".".$fileActualExtL;

	$tempnameL = $_FILES["last_result"]["tmp_name"];
	$uploads_dirL = 'last_result/'.$permanent_file_nameL;
	move_uploaded_file($tempnameL, $uploads_dirL);
	
	// $username_err = '';

$username = $_SESSION['username'];
	// Attempt to empty all variables for security
// $username = mysqli_real_escape_string($link, $_REQUEST['username']);
// $unhashed_password = mysqli_real_escape_string($link, $_REQUEST['password']);
// $hashed_password = password_hash($unhashed_password, PASSWORD_BCRYPT);
// $admissionNo = "AF14410";
$surname = mysqli_real_escape_string($link, $_REQUEST['surname']);
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$othername = mysqli_real_escape_string($link, $_REQUEST['othername']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
// $age = mysqli_real_escape_string($link, $_REQUEST['age']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
$state_of_origin = mysqli_real_escape_string($link, $_REQUEST['ostate']);
$lga = mysqli_real_escape_string($link, $_REQUEST['lga']);
$language = mysqli_real_escape_string($link, $_REQUEST['language']);
$admitted_class = mysqli_real_escape_string($link, $_REQUEST['class']);
$present_class = mysqli_real_escape_string($link, $_REQUEST['class']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$last_school = mysqli_real_escape_string($link, $_REQUEST['last-school']);
$last_class = mysqli_real_escape_string($link, $_REQUEST['last-class']);
$date_of_leaving = mysqli_real_escape_string($link, $_REQUEST['date_of_leaving']);
$reason_for_leaving = mysqli_real_escape_string($link, $_REQUEST['reason_for_leaving']);
$Fsurname = mysqli_real_escape_string($link, $_REQUEST['Fsurname']);
$Fothernames = mysqli_real_escape_string($link, $_REQUEST['Fothernames']);
$Femail = mysqli_real_escape_string($link, $_REQUEST['Femail']);
$Fphone_no = mysqli_real_escape_string($link, $_REQUEST['Fphone-no']);
$Faddress = mysqli_real_escape_string($link, $_REQUEST['Faddress']);
$Foccupation = mysqli_real_escape_string($link, $_REQUEST['Foccupation']);
$Femployer = mysqli_real_escape_string($link, $_REQUEST['Femployer']);
$Fbusinessaddress = mysqli_real_escape_string($link, $_REQUEST['Fbusinessaddress']);
$Msurname = mysqli_real_escape_string($link, $_REQUEST['Msurname']);
$Mothernames = mysqli_real_escape_string($link, $_REQUEST['Mothernames']);
$Memail = mysqli_real_escape_string($link, $_REQUEST['Memail']);
$Mphone_no = mysqli_real_escape_string($link, $_REQUEST['Mphone-no']);
$Maddress = mysqli_real_escape_string($link, $_REQUEST['Maddress']);
$Moccupation = mysqli_real_escape_string($link, $_REQUEST['Moccupation']);
$Memployer = mysqli_real_escape_string($link, $_REQUEST['Memployer']);
$Mbusinessaddress = mysqli_real_escape_string($link, $_REQUEST['Mbusinessaddress']);
$health_issues = mysqli_real_escape_string($link, $_REQUEST['health_issues']);
$health_issues_description = mysqli_real_escape_string($link, $_REQUEST['health_issues_description']);
$allergies = mysqli_real_escape_string($link, $_REQUEST['allergies']);
$allergies_description = mysqli_real_escape_string($link, $_REQUEST['allergies-description']);
$immunization = mysqli_real_escape_string($link, $_REQUEST['immunization']);
$peculiar_illness = mysqli_real_escape_string($link, $_REQUEST['peculiar-illness']);
$medications = mysqli_real_escape_string($link, $_REQUEST['medications']);




// function alert(){

// <script>
// $('username').on('change', function() {
//   // alert( this.value );
//   $('#loginValidate').modal('show');
// });
// </script>

// } 


// $sql = "UPDATE registration SET `username`='$username',`surname`='$surname', `firstname`= '$firstname', `othername`= '$othername', `passport`='$permanent_file_name', `dob`= '$dob', `gender`= '$gender', `country`= '$country', `state`= '$state_of_origin', `lga`= '$lga', `language_spoken`= '$language', `admitted_class`='$admitted_class', `contact_address`= '$address', `last_school`= '$last_school', `last_class`= '$last_class', `date_of_leaving`= '$date_of_leaving', `reasons_for_leaving`= '$reason_for_leaving', `F_surname`= '$Fsurname', `F_othernames`= '$Fothernames', `F_email`= '$Femail', `F_phone_number`= '$Fphone_no', `F_home_address`= '$Faddress', `F_occupation`= '$Foccupation', `F_employer`= '$Femployer', `F_business_address`= '$Fbusinessaddress',`M_surname`='$Msurname', `M_othernames`= '$Mothernames', `M_email`= '$Memail', `M_phone_number`= '$Mphone_no', `M_home_address`= '$Maddress', `M_occupation`= '$Moccupation', `M_employer`= '$Memployer', `M_business_address`= '$Mbusinessaddress', `health_problems?`= '$health_issues', `descriptions`= '$health_issues_description', `allergies?`= '$allergies',  `allergies_reaction`= '$allergies_description', `government_immunization?`= '$immunization', `peculiar_illness?`= '$peculiar_illness', `special_reactions?`= '$medications', `birth_certificate`= '$permanent_file_nameB', `last_result`= '$permanent_file_nameL',  `created_on`= NOW() WHERE username ='$username' ";


// Attempt insert query execution
$sql = "INSERT INTO registration ( `admission_no`, `username`, `surname`, `firstname`, `othername`, `passport`, `dob`, `gender`, `country`, `state`, `lga`, `language_spoken`, `admitted_class`,`present_class`, `contact_address`, `last_school`, `last_class`, `date_of_leaving`, `reasons_for_leaving`, F_surname, F_othernames, F_email, F_phone_number, F_home_address, F_occupation, F_employer, F_business_address, `M_surname`, `M_othernames`, `M_email`, `M_phone_number`, `M_home_address`, `M_occupation`, `M_employer`, `M_business_address`, `health_problems?`, `descriptions`, `allergies?`, `allergies_reaction`, `government_immunization?`, `peculiar_illness?`, `special_reactions?`, `birth_certificate`, `last_result`, `created_on`) VALUES ('$admissionNo', '$username','$surname', '$firstname', '$othername', '$permanent_file_name', '$dob', '$gender', '$country', '$state_of_origin', '$lga', '$language', '$admitted_class','$present_class', '$address', '$last_school', '$last_class', '$date_of_leaving', '$reason_for_leaving', '$Fsurname', '$Fothernames', '$Femail', '$Fphone_no', '$Faddress', '$Foccupation', '$Femployer', '$Fbusinessaddress', '$Msurname', '$Mothernames', '$Memail', '$Mphone_no', '$Maddress', '$Moccupation', '$Memployer', '$Mbusinessaddress', '$health_issues', '$health_issues_description', '$allergies', '$allergies_description', '$immunization', '$peculiar_illness', '$medications', '$permanent_file_nameB', '$permanent_file_nameL', NOW())";
if(mysqli_query($link, $sql)){
    // echo "Records added successfully.";
    $select = mysqli_query($link, "SELECT * from registration WHERE username = '$username'");

     // $selectCheck = mysqli_num_rows($select);
     // if($selectCheck > 0){
     	while ($output = mysqli_fetch_assoc($select)) {
     		# code...
     		$name = $output['username'];
     		echo $name;
    		$_SESSION['name'] = $name;
     	}
     // }
   
    	
    header("location: dashboard.php");
} else{
    echo "ERROR: Could not able to execute $link->error ";
    // print($link->error);
}
 
// Close connection
// mysqli_close($link);
// $sql = mysqli_query($link, "INSERT INTO payment (`pupil_name`,`class`,`admission_no`,`amount_payable`,`amount_paid`,`payment_date`, `amount_paid2`, `payment_date2`, `amount_paid3`, `payment_date3`, `total_payment`, `Balance`, `purpose_of_payment`, `payment_status`, `created_on`) 
// SELECT  concat(concat(firstname, ' '), surname), present_class, admission_no, '$amountpayable', 0, NOW(), 0, NOW(), 0, NOW(), 0, '$amountpayable', '$paypurpose', 'Not Paid', NOW() FROM registration");

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

			.btn-error{
				background-color: red;
				color: white;
			}

			.fas{
				font-size: xx-large;
    			color: #10b541 !important;

			}

			.form-text{
				text-transform: capitalize;
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

      .p{
      	text-align: center;
      	margin-top: 15px;
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

.close-error{
	color: red;
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

.info1{
	font-size: 20px;
	color: #10b541;
	font-weight: bolder; 
	}
#img-logo{
	margin-top: 2em;
}

/*passport preview styles*/
.img-preview{
	width: 200px;
	min-height: 200px;
	border: 2px solid #10b541;
	margin-top: 15px;

	display: flex;
	align-items: center;
	justify-content: center;
	font-weight: bold;
	color: #85aff2;

}

.img-preview--img{
	display: none;
	width: 100%;
}

.center-div{
	position: relative;
	align-items: center;
	justify-content: center;
	display: flex;
	
}
#others,#pg2,#pg3,#health_issues,#allergies,#lga1,#state1{
	display: none;
}
.left{
	position: relative;
	float: left;
}

#customControlAutosizing {
	background-color: #10b541; 
}

#input {
	border-color: red;
}
/*media queries*/

@media only screen and (min-width: 500px){
	/*.center-div{
	position: relative;
	margin-left: 7.8em;
	
}*/
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
			<nav class="navbar  navbar-expand-lg navbar-main bg-white">
				<div class="container">
					<a class="navbar-brand" href="index.html">
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
								<a class="nav-link" href="index.html" data-toggle="tooltip" data-placement="bottom"  title="Home">Home <span class="sr-only">(current)</span></a>
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
			<section class="login-card">
				<!-- card begins -->



				<div class="card " style="width: 50rem;">
  <img id="img-logo" src="https://res.cloudinary.com/dwszstiol/image/upload/v1587652605/al-aflaz/logo1_mt1hbx.svg" class="card-img-top" height="100" width="100" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">REGISTRATION FORM</h5>
   <form method="post" enctype="multipart/form-data" action="form.php" novalidate="" id="form">
   	<div class="center-div">

   		<!-- passport process starts-->
   		<div class="img-preview" id="imgPreview">
   			<img src="" alt="img Preview" class="img-preview--img">
  		<span class="info"  id="custom-text">No Passport Upload, yet</span>
   			<!-- <span class="img-preview--default-text">Passport Preview</span> -->
   		</div>

   	</div>
   	<div class="center-div">
   		<input onchange="validateSize(this)" class="info" type="file" name="inFile" id="inFile" hidden="hidden" accept="image/*">
  		<button  type="button" id="custom-button" class="btn btn-card">Upload Passport</button>
  		<!-- <span class="info"  id="custom-text">No Passport Upload, yet</span> -->
  		</div>

  		<!-- passport modal starts -->
<div id="myModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Passport Too Large</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Passport size should not exceed 50KB</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- passport modal ends -->
   		<!-- passport process ends-->

<div><!-- form contents starts-->
	<!-- validation modal -->
<div id="modalValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Your input is required</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly provide this info as it is required</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div id="fatherValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Father's Details Incorrect</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly provide the father's detail(s) before submission</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div id="motherValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mother's Details Incorrect</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly provide the mother's detail(s) before submission</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div id="modalNameValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Incorrect pupil's name</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly provide correct names as your input is invalid</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div id="modalDobValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">DOB or gender not entered</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly provide your DOB or gender as the input is empty</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<div id="modalCountryValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nationality or State of origin or LGA not entered</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly provide the details as required before submission</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div id="modalClassValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Admitted Class not entered</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly provide a valid class before submission</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div id="healthValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Health Details Incomplete</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly provide complete health details before submission</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div id="certificateValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Birth Certificate not Uploaded</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly upload birth certificate before submission</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div id="confirmValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly click to confirm before submission</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div id="modalAddressValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Address not Entered</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kindly provide pupil's contact address before submission</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<div id="inputValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Input incorrect</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Your input is incorrect, provide a valid input</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- validation modal ends -->
<div id="passportValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Your Passport is required</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Upload your passport to submit this form</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<div id="pg1"> <!-- page 1 starts -->

<!-- <div id="passwordValidate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Password Error</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Password conflict, enter correct passowrd</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div> -->

	
<!-- validation Dob -->
<div id="modalDob" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pupil too young</h5>
        <button type="button" class="close close-error" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Pupil's age can not be less than one year old</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- validationDob ends -->
<!-- <div>
	<h4 class="info1">SIGNUP DETAILS</h4>
	</div>
   	<div class="form-group">
    <label class="info" >Change Your Username and Password</label><br>
    <div class="row">
    <div class="form-group col-sm-4">
    <label class="info" >Username</label>
    <input name="username" type="text"  id="username" class="form-control"  placeholder="Enter Username">
  </div>
 
  <div class="form-group col-sm-4">
    <label class="info" >Password</label>
    <input name="password" type="password" id="password" class="form-control"  placeholder="Enter Password" >
</div>
<div class="form-group col-sm-4">
    <label class="info" >Confirm Password</label>
    <input name="cpassword" type="password" id="cpassword" class="form-control"  placeholder="Confirm Password">
</div>
</div>
</div> -->	
<div>
	<h4 class="info1">PUPIL'S DETAILS</h4>
	</div>
   	<div class="form-group">
    <label class="info" >Surname</label>
    <input name="surname" type="text" onblur="validateEmpty(this)" id="surname" class="form-control form-text"  placeholder=" Surname">
  </div>
 
  <div class="form-group">
    <label class="info" >First Name</label>
    <input name="firstname" type="text" id="firstname" class="form-control form-text"  placeholder="First Name" onblur="validateEmpty(this)">
</div>
  
  <div class="form-group">
    <label class="info" >Other Name</label>
    <input name="othername" type="text" required="" class="form-control form-text" id="othername" placeholder=" Other Names">
  </div>
  <div class="row">
  	 <div class="col-sm-6">
    <label class="info" >Date of Birth</label>
    <div class="input-group">
  <input type="date" name="dob" onchange="getAge()" class="form-control dob" id="dob" placeholder="Pick Date of Birth" onblur="validateEmpty(this)"  >
  <div class="input-group-append">
    <span readonly="" id="age" name='age' class="input-group-text" >0</span>
  </div>
  </div>
  </div>
   <div class="col-sm-6">
    <label class="info" >Gender</label>
    <select name="gender" class="custom-select" id="inputGroupSelect02" onblur="validateEmpty(this)" >
    <option selected>Choose...</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
 
  </div>
  </div>

<div class="row">
  	 <div class="col-sm-4">
    <label class="info" >Nationality</label>
    <div class="input-group">
 <select class="custom-select" id="country" name="country" onchange="loadCountry()" onblur="validateEmpty(this)">
    <option selected>Select Country</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Others">Others, Please specify</option>
    
  </select>

  </div>
  </div>
   <div class="col-sm-4" id="state1" >
    <label class="info" >State of Origin</label>
                  <select class="custom-select" name="ostate" id="ostate" onblur="validateEmpty(this)" >
                  <option selected="selected">Select State...</option>
                  <option value='Abia'>Abia</option>
                  <option value='Adamawa'>Adamawa</option>
                  <option value='AkwaIbom'>AkwaIbom</option>
                  <option value='Anambra'>Anambra</option>
                  <option value='Bauchi'>Bauchi</option>
                  <option value='Bayelsa'>Bayelsa</option>
                  <option value='Benue'>Benue</option>
                  <option value='Borno'>Borno</option>
                  <option value='CrossRivers'>CrossRivers</option>
                  <option value='Delta'>Delta</option>
                  <option value='Ebonyi'>Ebonyi</option>
                  <option value='Edo'>Edo</option>
                  <option value='Ekiti'>Ekiti</option>
                  <option value='Enugu'>Enugu</option>
                  <option value='FCT'>FCT</option>
                  <option value='Gombe'>Gombe</option>
                  <option value='Imo'>Imo</option>
                  <option value='Jigawa'>Jigawa</option>
                  <option value='Kaduna'>Kaduna</option>
                  <option value='Kano'>Kano</option>
                  <option value='Katsina'>Katsina</option>
                  <option value='Kebbi'>Kebbi</option>
                  <option value='Kogi'>Kogi</option>
                  <option value='Kwara'>Kwara</option>
                  <option value='Lagos'>Lagos</option>
                  <option value='Nasarawa'>Nasarawa</option>
                  <option value='Niger'>Niger</option>
                  <option value='Ogun'>Ogun</option>
                  <option value='Ondo'>Ondo</option>
                  <option value='Osun'>Osun</option>
                  <option value='Oyo'>Oyo</option>
                  <option value='Plateau'>Plateau</option>
                  <option value='Rivers'>Rivers</option>
                  <option value='Sokoto'>Sokoto</option>
                  <option value='Taraba'>Taraba</option>
                  <option value='Yobe'>Yobe</option>
                  <option value='Zamfara'>Zamafara</option>
                </select>
                
 
  </div>

  <div class="col-sm-4" id="lga1">
    <label class="info" >LGA</label>
    <select  class="custom-select" name="lga" id="lga" onblur="validateEmpty(this)" >
                  <option selected="selected">Select LGA...</option>
                </select>
 
  </div>
  <div class="col-sm-8"  id="others">
    <label class="info" >Others</label>
  <input class="form-control " type="" name="country" id="other" onchange="loadCountry()">
  	
  </div>
  </div>
  <div class="row">
  	 <div class="col-sm-8">
    <label class="info" >Languages Spoken</label>
    <input name="language" type="text" id="languge" required="" class="form-control form-text"  placeholder="Enter Languages Spoken">
  </div>
  	 <div class="col-sm-4">
  	 	<label class="info" >Class Admitted to</label>
    <select name="class" class="custom-select" id="class" onblur="validateEmpty(this)" >
    <option selected>Choose...</option>
    <option value="Play Class">Play Class</option>
    <option value="Preparatory Class">Preparatory Class</option>
    <option value="Nursery 1">Nursery 1</option>
    <option value="Nursery 2">Nursery 2</option>
    <option value="Grade 1">Grade 1</option>
    <option value="Grade 2">Grade 2</option>
    <option value="Grade 3">Grade 3</option>
    <option value="Grade 4">Grade 4</option>
    <option value="Grade 5">Grade 5</option>

  </select>

  	 </div>
</div>
  <div class="form-group">
    <label class="info" >Contact Address</label>
    <textarea name="address" onblur="validateEmpty(this)"  class="form-control form-text" id="address" rows="5" placeholder="Enter Contact Address"></textarea>
    
  </div>


<div>
	<h5 class="info1">Details of Previous School Attended</h5>
</div>
   	<div class="form-group">
    <label class="info" >Last School Attended</label>
    <input name="last-school" type="text" id="last_school"  class="form-control form-text"  placeholder="Enter School Attended">
  </div>
  <div class="row">
  	<div class="col-sm-6">
  	<div class="form-group">
    <label class="info" >Last Class Attended</label>
    <input name="last-class" type="text" class="form-control form-text"  placeholder="Enter Last Class Attended">
  </div>
</div>
  	 <div class="col-sm-6">
    <label class="info" >Date of Leaving</label>
    <div class="input-group">
  <input type="date" name="date_of_leaving"  class="form-control" id="date_of_leaving" placeholder="Pick Date " >
  
  </div>
  </div>
  </div>
	
  
  <div class="form-group">
    <label class="info" >Reason(s) for Leaving</label>
    <textarea name="reason_for_leaving" class="form-control form-text" id="reason_for_leaving" rows="5" placeholder=""></textarea>
  </div>
  <button type="button" name="button" onclick="hide_show('pg1','pg2')" id="next" class="btn btn-card">Next</button>
  
</div> <!-- page 1 ends -->


<div id="pg2"> <!-- page 2 begins -->

<div>
	<h3 class="info1 p">Parent's/Guardian's Details</h3>
	<div> <!-- father's info starts -->
	<h5 class="info1">Father's Details</h5>
  <div class="row">
  	<div class="col-sm-6">
  	<div class="form-group">
    <label class="info" >Surname</label>
    <input name="Fsurname" type="text" onblur="validateEmpty(this)"  id="father's_surname" class="form-control form-text"  placeholder="Enter Surname">
  </div>  
</div>
  	 <div class="col-sm-6">
    <label class="info" >Other Names</label>
    <input name="Fothernames" type="text" onblur="validateEmpty(this)"  id="father's_othernames" class="form-control form-text"  placeholder="Enter Other Names">
  </div>
  </div>
  <div class="row">
  	<div class="col-sm-6">
  	<div class="form-group">
    <label class="info" >Email</label>
    <input name="Femail" type="email"  id="father's_email" class="form-control"  placeholder="Enter Email" onblur="validateEmpty(this)">
  </div>
</div>
  	 <div class="col-sm-6">
    <label class="info" >Phone Number</label>
    <input name="Fphone-no" type="tel"  id="father's_phone_no" class="form-control form-text" onblur="validateEmpty(this)"   placeholder="Enter Phone No">
  </div>
  </div>
  <div class="form-group">
    <label class="info" >Home Address</label>
    <textarea name="Faddress" onblur="validateEmpty(this)"  class="form-control form-text" id="home-addr" rows="5" placeholder=""></textarea>
  </div>
  <div class="row">
  	<div class="col-sm-6">
  	<div class="form-group">
    <label class="info" >Occupation</label>
    <input name="Foccupation" type="text"  id="father's_occupation" class="form-control form-text"  placeholder="Enter Occupation" onblur="validateEmpty(this)">
  </div>
</div>
  	 <div class="col-sm-6">
    <label class="info" >Name of Employer</label>
    <input name="Femployer" type="text"  id="father's_employer" class="form-control form-text"  placeholder="Enter Employer" onblur="validateEmpty(this)">
  </div>
  </div>
  <div class="form-group">
    <label class="info" >Business Address</label>
    <textarea name="Fbusinessaddress"  class="form-control form-text" id="busi-addr" rows="5" placeholder="" onblur="validateEmpty(this)"></textarea>
  </div>
  </div> <!-- father's info ends -->

  <div> <!-- mother's info starts -->
	<h5 class="info1">Mother's Details</h5>
  <div class="row">
  	<div class="col-sm-6">
  	<div class="form-group">
    <label class="info" >Surname</label>
    <input name="Msurname" type="text" onblur="validateEmpty(this)"  id="mother's_surname" class="form-control form-text"  placeholder="Enter Surname">
  </div>
</div>
  	 <div class="col-sm-6">
    <label class="info" >Other Names</label>
    <input name="Mothernames" type="text" onblur="validateEmpty(this)"  id="mother's_othernames" class="form-control form-text"  placeholder="Enter Other Names">
  </div>
  </div>
  <div class="row">
  	<div class="col-sm-6">
  	<div class="form-group">
    <label class="info" >Email</label>
    <input name="Memail" type="email"  id="mother's_email" class="form-control"  placeholder="Enter Email" onblur="validateEmpty(this)">
  </div>
</div>
  	 <div class="col-sm-6">
    <label class="info" >Phone Number</label>
    <input name="Mphone-no" type="tel"  id="mother's_phone_no" class="form-control form-text" onblur="validateEmpty(this)"   placeholder="Enter Phone No">
  </div>
  </div>
  <div class="form-group">
    <label class="info" >Home Address</label>
    <textarea name="Maddress"  class="form-control form-text" id="mother's_home-addr" rows="5" placeholder="" onblur="validateEmpty(this)"></textarea>
  </div>
  <div class="row">
  	<div class="col-sm-6">
  	<div class="form-group">
    <label class="info" >Occupation</label>
    <input name="Moccupation" type="text"  id="mother's_occupation" class="form-control form-text"  placeholder="Enter Occupation" onblur="validateEmpty(this)">
  </div>
</div>
  	 <div class="col-sm-6">
    <label class="info" >Name of Employer</label>
    <input name="Memployer" type="text"  id="mother's_employer" class="form-control form-text"  placeholder="Enter Employer" onblur="validateEmpty(this)">
  </div>
  </div>
  <div class="form-group">
    <label class="info" >Business Address</label>
    <textarea name="Mbusinessaddress"  class="form-control form-text" id="mother-busi-addr" rows="5" placeholder="" onblur="validateEmpty(this)"></textarea>
  </div>
  </div> <!-- mother's info ends -->
</div>
  <button type="button" name="button" onclick="hide_show('pg2','pg1')" id="Previous" class="btn btn-card left">Previous</button>
  <button type="button" name="button" onclick="hide_show('pg2','pg3')" id="Previous" class="btn btn-card left">Next</button>
  <!-- <button type="button" name="button" id="previous" class="btn btn-card">Next</button> -->
  
</div> <!-- pg2 ends -->

<div id="pg3"><!--  pg3 begins -->



<div>
	<h4 class="info1">Pupil's Health History</h4>
	<div>
	<div class="form-check form-check-inline">
    <label class="info col-form-label" >Does your child have any known health problems?</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" onclick="show1('health_issues')" name="health_issues" id="healthIssues" value="Yes">
  <label class="info form-check-label"  for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" onclick="hideAllergy('health_issues','health_issues_description')" name="health_issues" id="healthIssues" value="No">
  <label class="info form-check-label"  for="inlineRadio2">No</label>
</div>
</div>
<div id="health_issues">
	<div class="form-group">
    <label class="info" >Kindly provide brief description</label>
    <textarea name="health_issues_description"  class="form-control form-text" id="health_issues_description" rows="5" placeholder="" ></textarea>
  </div>
	
</div>
<div>
	<div class="form-check form-check-inline">
    <label class="info col-form-label" >Does your child have any known allergies?</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" onclick="show1('allergies')" name="allergies" id="allergiesConfirm" value="Yes">
  <label class="info form-check-label"  for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" onclick="hideAllergy('allergies','allergies-description')" name="allergies" id="allergiesConfirm" value="No">
  <label class="info form-check-label"  for="inlineRadio2">No</label>
</div>
</div> 
<div id="allergies">
	<div class="form-group">
    <label class="info" >What are they and what are your child's reactions?</label>
    <textarea name="allergies-description"  class="form-control form-text" id="allergies-description" rows="5" placeholder="" onblur="makeEmpty()"></textarea>
  </div>
	
</div>
<div>
	<div class="form-check form-check-inline">
    <label class="info col-form-label" >Should your child be administered the Government's Immunization?</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="immunization" id="immunizationConfirm" value="Yes, both oral and injection" onblur="validateEmpty(this)" >
  <label class="info form-check-label"  for="inlineRadio1">Yes, both oral and injection</label> 
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="immunization" id="immunizationConfirm" value="Yes, only oral">
  <label class="info form-check-label"  for="inlineRadio1">Yes, only oral</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="immunization" id="immunizationConfirm" value="No, not at all">
  <label class="info form-check-label"  for="inlineRadio2">No, not at all</label>
</div>
</div>

<div id="illness">
	<div class="form-group">
    <label class="info" >State any peculiar illness to your child if any:</label>
    <textarea name="peculiar-illness"  class="form-control form-text" id="mother-busi-addr" rows="5" placeholder=""></textarea>
  </div>
	
</div>
<div >
	<div class="form-group">
    <label class="info" >Any special medications and/or restrictions?</label>
    <label class="info" >If any please list the name of the medications and the medical condition for which it is taken</label>

    <textarea name="medications"  class="form-control form-text" id="mother-busi-addr" rows="5" placeholder=""></textarea>
  </div>
	
</div>
<h4 class="info1">Consent to Medical Care and Treatment</h4>
	<div>
	<div class="form-check form-check-inline">
    <label class="info col-form-label" >In the event that I can not be contacted immediately, medical or surgical treatment can be administered to my child in the case of an accident or emergency as prescribed by a qualified physician, and I hold <b>AL AFLAZ KIDDIES SCHOOL</b> and her employees harmless. </label>
</div>

  <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
    <label class="custom-control-label info" for="customControlValidation1">I agree</label>
    
  </div>
  </div>
</div>
<h4 class="info1">Documents Upload</h4>
	<div>
	<div class="form-check form-check-inline">
    <label class="info col-form-label" >Kindly upload the following documents. </label>
</div><br>
<div class="form-check form-check-inline">
    <label class="info col-form-label" >Birth Certificate </label>
</div>
<div class="custom-file">
  <input type="file" class="custom-file-input info" name="birth_certificate" id="birth_certificate" onblur="validateEmpty(this)">
  <label class="custom-file-label info" for="customFile">Choose file</label>
</div>
<div class="form-check form-check-inline">
    <label class="info col-form-label" >The last result from previous school attended </label>
</div>
<div class="custom-file">
  <input type="file" class="custom-file-input info" name="last_result" id="last_result">
  <label class="custom-file-label info" for="customFile">Choose file</label>
</div>
</div>
	<div>
  <button type="button" name="button" onclick="hide_show('pg3','pg2') " id="Previous" class="btn btn-card left">Previous</button>

  <!-- modal for submit and new for signup page -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button> -->

  <div class="modal fade" id="modalSubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<button type="submit" name="submit" class="btn btn-card" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Submit</button>
<!-- Button trigger modal -->
<!-- <button type="submit" name="submit" class="btn btn-card" data-toggle="modal" data-target="#exampleModal">
 Submit
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  
</div>


</div> <!-- pg3 ends -->
</div> <!-- card ends -->


  </form>
<!-- form contents ends-->
</div>
</div>

			</section>

						

		  	

		
		<footer class="bg-white pt-4 " >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-2">
						<img src="../images/logo1.svg" alt="" class="img img-responsive mb-2" height="70" width="auto">
						<ul class="list-unstyled">
							<li><a class="text-dark" href="academics.html">Academics</a></li>
							<li><a class="text-dark" href="about.html">About Us</a></li>
							<li><a class="text-dark" href="events.html">Events</a></li>
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
		  	const inFile = document.getElementById('inFile');
		  	const previewContainer = document.getElementById('imgPreview');
		  	const previewImg = previewContainer.querySelector('.img-preview--img');
		  	const previewDefaultText = previewContainer.querySelector('.img-preview--default-text');



		  	inFile.addEventListener('change', function(){
		  		const file = this.files[0];

		  		if (file) {
		  			const reader = new FileReader();

		  			// previewDefaultText.style.display = "none";
		  			previewImg.style.display = "block";


		  			reader.addEventListener("load", function(){
		  				console.log(this);
		  				previewImg.setAttribute("src", this.result);

		  			});

		  			reader.readAsDataURL(file);

		  		} else {
		  			// previewDefaultText.style.display = null;
		  			previewImg.style.display = null;
		  			previewImg.setAttribute("src", "");
		  		}
		  	});

		  	const realFileBtn = document.getElementById("inFile");
		  	const customBtn = document.getElementById("custom-button");
		  	const customTxt = document.getElementById("custom-text");

		  	customBtn.addEventListener("click", function(){
		  		realFileBtn.click();
		  	});
		  	realFileBtn.addEventListener("change", function(){
		  		// if(realFileBtn.value){
		  		// 	customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
		  		// } else {
		  		// 	customTxt.innerHTML = "No Passport Upload, yet";
		  		// }

		  		if(!realFileBtn.value){
		  			
		  			customTxt.innerHTML = "No Passport Upload, yet";
		  			customBtn.innerHTML = "Upload Passport"

		  		 } else {
		  			customTxt.innerHTML = "";
		  			customBtn.innerHTML = "Passport Uploaded"
		  		}

		  	});

		  	// const modal = previewContainer.querySelector('.modal');

		function validateSize(file) {
        var FileSize = file.files[0].size / 512 / 512; // in KB
        if (FileSize > 0.2) {

        	$('#myModal').modal('show');
            // alert('Passport size exceeds 50 KB');
           $(file).val(''); //for clearing with Jquery
        } else {


        }
    }

function hideAllergy(hide,clear){
const allergy = document.getElementById(hide);
 var allergyDescribe = document.getElementById(clear);
allergy.style.display = 'none';
allergyDescribe.value = '';
}



    function validateEmpty(inputTxt){
    	if(inputTxt.value == '' ){
    		$('#modalValidate').modal('show');
    		inputTxt.style.borderColor = 'red';
    	} else{
    		inputTxt.style.borderColor = '#e6e6e6';

    	}
    }
		
    const form = document.getElementById('form');
    const passport = document.getElementById('inFile');
    const surname = document.getElementById('surname');
    const firstname = document.getElementById('firstname');
    const dob = document.getElementById('dob');
    const gender = document.getElementById('inputGroupSelect02');
    const country = document.getElementById('country');
    const lga = document.getElementById('lga');
    const state = document.getElementById('ostate');
    const otherCountry = document.getElementById('other');
    const presentClass = document.getElementById('class');
    const fSurname = document.getElementById('father\'s_surname');
    const fOtherNames = document.getElementById('father\'s_othernames');
    const fEmail = document.getElementById('father\'s_email');
    const fPhoneNo = document.getElementById('father\'s_phone_no');
    const fAddress = document.getElementById('home-addr');
    const fOccupation = document.getElementById('father\'s_occupation');
    const fEmployer = document.getElementById('father\'s_employer');
    const fBusinessAddress = document.getElementById('busi-addr');
    const mSurname = document.getElementById('mother\'s_surname');
    const mOtherNames = document.getElementById('mother\'s_othernames');
    const mEmail = document.getElementById('mother\'s_email');
    const mPhoneNo = document.getElementById('mother\'s_phone_no');
    const mAddress = document.getElementById('mother\'s_home-addr');
    const mOccupation = document.getElementById('mother\'s_occupation');
    const mEmployer = document.getElementById('mother\'s_employer');
    const mBusinessAddress = document.getElementById('mother-busi-addr');
    const healthIssues = document.getElementsByName('health_issues');
    const allergiesConfirm = document.getElementsByName('allergies');
    const immunizationConfirm  = document.getElementsByName('immunization');
    const confirm = document.getElementById('customControlValidation1');
    const birth_certificate = document.getElementById('birth_certificate');
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const cpassword = document.getElementById('cpassword');
      
   
    form.addEventListener('submit', (e) =>{
    	if (passport.value === '' ){
    		$('#passportValidate').modal('show');
    		e.preventDefault();
    		previewImg.style.borderColor =  'red';

    	}else{
    		previewImg.style.borderColor =  '#10b541';

    	}

    	var word = /^[a-zA-Z]+$/
    	if (surname.value ==='' || !word.test(surname.value) || surname.value ===null || firstname.value ===null || firstname.value ==='' || !word.test(firstname.value)){
    		$('#modalNameValidate').modal('show');
    		e.preventDefault();
    	surname.style.borderColor = firstname.style.borderColor = 'red';
    	} else{
    		surname.style.borderColor = firstname.style.borderColor = '#e6e6e6';

    	}
    	if(dob.value === '' || dob.value === null || gender.value === 'Choose...'){
    		$('#modalDobValidate').modal('show');
    		e.preventDefault();
    		dob.style.borderColor = gender.style.borderColor = 'red';
    	} else{
    		gender.style.borderColor = dob.style.borderColor = '#e6e6e6';

    	}

    	if(country.value === 'Select Country'  || state.value === 'Select State...'  || lga.value === 'Select item...' ){
    		$('#modalCountryValidate').modal('show');
    		e.preventDefault();

    		country.style.borderColor = state.style.borderColor = lga.style.borderColor = 'red';
    	} else{
    		country.style.borderColor = state.style.borderColor = lga.style.borderColor = '#e6e6e6';

    	}


    	// if (country.value !='Select Country' && otherCountry.value === ''){
    	// 	$('#modalCountryValidate').modal('show');
    	// 	e.preventDefault();
    	// }

    	if(presentClass.value === 'Choose...'){
    		$('#modalClassValidate').modal('show');
    		e.preventDefault();
    		presentClass.style.borderColor = 'red';
    	} else{
    		presentClass.style.borderColor = '#e6e6e6';
    	}

    	if(address.value === '' || address.value === null){
    		$('#modalAddressValidate').modal('show');
    		e.preventDefault();
    		address.style.borderColor = 'red';
    	} else{
    		address.style.borderColor = '#e6e6e6';
    	}

		if(fSurname.value === ''|| fSurname.value ===null){
    		$('#fatherValidate').modal('show');
    		e.preventDefault();
    		fSurname.style.borderColor = 'red';
    	} else{
    		fSurname.style.borderColor = '#e6e6e6';
    	}
    	if(fOtherNames.value === '' || fOtherNames.value === null){
    		$('#fatherValidate').modal('show');
    		e.preventDefault();
    		fOtherNames.style.borderColor = 'red'; 
    		
    	}else{
    		fOtherNames.style.borderColor = '#e6e6e6';
    	}
    	
    	if(fEmail.value === '' || fEmail.value === null){
    		$('#fatherValidate').modal('show');
    		e.preventDefault();
    		fEmail.style.borderColor = 'red'; 
    		
    	}else{
    		fEmail.style.borderColor = '#e6e6e6';
    	}

    	if(fPhoneNo.value === '' || fPhoneNo.value === null){
    		$('#fatherValidate').modal('show');
    		e.preventDefault();
    		fPhoneNo.style.borderColor = 'red'; 
    		
    	}else{
    		fPhoneNo.style.borderColor = '#e6e6e6';
    	}

    	if(fAddress.value === '' || fAddress.value === null){
    		$('#fatherValidate').modal('show');
    		e.preventDefault();
    		fAddress.style.borderColor = 'red'; 
    		
    	}else{
    		fAddress.style.borderColor = '#e6e6e6';
    	}

    	if(fOccupation.value === '' || fOccupation.value === null){
    		$('#fatherValidate').modal('show');
    		e.preventDefault();
    		fOccupation.style.borderColor = 'red'; 
    		
    	}else{
    		fOccupation.style.borderColor = '#e6e6e6';
    	}

    	if(fBusinessAddress.value === '' || fBusinessAddress.value === null){
    		$('#fatherValidate').modal('show');
    		e.preventDefault();
    		fBusinessAddress.style.borderColor = 'red'; 
    		
    	}else{
    		fBusinessAddress.style.borderColor = '#e6e6e6';
    	}

    	if(fEmployer.value === '' || fEmployer.value === null){
    		$('#fatherValidate').modal('show');
    		e.preventDefault();
    		fEmployer.style.borderColor = 'red'; 
    		
    	}else{
    		fEmployer.style.borderColor = '#e6e6e6';
    	}


    	if(mSurname.value === ''|| mSurname.value ===null){
    		$('#motherValidate').modal('show');
    		e.preventDefault();
    		mSurname.style.borderColor = 'red';
    	} else{
    		mSurname.style.borderColor = '#e6e6e6';
    	}
    	if(mOtherNames.value === '' || mOtherNames.value === null){
    		$('#motherValidate').modal('show');
    		e.preventDefault();
    		mOtherNames.style.borderColor = 'red'; 
    		
    	}else{
    		mOtherNames.style.borderColor = '#e6e6e6';
    	}
    	
    	if(mEmail.value === '' || mEmail.value === null){
    		$('#motherValidate').modal('show');
    		e.preventDefault();
    		mEmail.style.borderColor = 'red'; 
    		
    	}else{
    		mEmail.style.borderColor = '#e6e6e6';
    	}

    	if(mPhoneNo.value === '' || mPhoneNo.value === null){
    		$('#motherValidate').modal('show');
    		e.preventDefault();
    		mPhoneNo.style.borderColor = 'red'; 
    		
    	}else{
    		mPhoneNo.style.borderColor = '#e6e6e6';
    	}

    	if(mAddress.value === '' || mAddress.value === null){
    		$('#motherValidate').modal('show');
    		e.preventDefault();
    		mAddress.style.borderColor = 'red'; 
    		
    	}else{
    		mAddress.style.borderColor = '#e6e6e6';
    	}

    	if(mOccupation.value === '' || mOccupation.value === null){
    		$('#motherValidate').modal('show');
    		e.preventDefault();
    		mOccupation.style.borderColor = 'red'; 
    		
    	}else{
    		mOccupation.style.borderColor = '#e6e6e6';
    	}

    	if(mBusinessAddress.value === '' || mBusinessAddress.value === null){
    		$('#motherValidate').modal('show');
    		e.preventDefault();
    		mBusinessAddress.style.borderColor = 'red'; 
    		
    	}else{
    		mBusinessAddress.style.borderColor = '#e6e6e6';
    	}

    	if(mEmployer.value === '' || mEmployer.value === null){
    		$('#fatherValidate').modal('show');
    		e.preventDefault();
    		mEmployer.style.borderColor = 'red'; 
    		
    	}else{
    		mEmployer.style.borderColor = '#e6e6e6';
    	}
 
    	if(form.healthIssues.value == ''){
    		$('#healthValidate').modal('show');
    		e.preventDefault();
    	
    	}


    	if(form.allergiesConfirm.value == ''){
    		$('#healthValidate').modal('show');
    		e.preventDefault();
    	
    	}

    	if(form.immunizationConfirm.value == '') {
    		$('#healthValidate').modal('show');
    		e.preventDefault();
    	
    	}

 
    	if(!customControlValidation1.checked){
    		$('#confirmValidate').modal('show');
    		e.preventDefault();
    		customControlValidation1.style.borderColor = 'red'; 
    		
    	}else{
    		customControlValidation1.style.borderColor = '#e6e6e6';
    	}

    	if(birth_certificate.value === '' || birth_certificate.value === null){
    		$('#certificateValidate').modal('show');
    		e.preventDefault();
    		birth_certificate.style.borderColor = 'red'; 
    		
    	}else{
    		birth_certificate.style.borderColor = '#e6e6e6';
    	}

    	if(username.value === '' || username.value === null){
    		$('#loginValidate').modal('show');
    		e.preventDefault();
    		username.style.borderColor = 'red'; 
    		
    	}else{
    		username.style.borderColor = '#e6e6e6';
    	}


    	if(password.value === '' || password.value === null){
    		$('#loginValidate').modal('show');
    		e.preventDefault();
    		password.style.borderColor = 'red'; 
    		
    	}else{
    		password.style.borderColor = '#e6e6e6';
    	}

    	if(cpassword.value === '' || cpassword.value === null){
    		$('#loginValidate').modal('show');
    		e.preventDefault();
    		cpassword.style.borderColor = 'red'; 
    		
    	}else{
    		cpassword.style.borderColor = '#e6e6e6';
    	}

    	if(password.value != cpassword.value ){
    		$('#passwordValidate').modal('show');
    		e.preventDefault();
    		password.style.borderColor = 'red';
    		cpassword.style.borderColor = 'red';

    		
    	}else{
    		password.style.borderColor = '#e6e6e6';
    		cpassword.style.borderColor = '#e6e6e6';

    	}


    });

		  </script>

		  <script type="text/javascript">
  			
		  	function getAge(date) {
		  	var dobs = document.querySelector(".dob");
		  	const dob1 = document.querySelector(".dob").value;
		  	const ageValue = document.getElementById('age');
		  	var age = "";
		  	var birthDate =  dob1.split('-');
    		var day = new Date(birthDate[0],birthDate[1],birthDate[2]);
    		var today = new Date();
    		var age = today - day;
    		 age = Math.round(age/ (1000 * 60 * 60 * 24 * 365));
    		 if(age < 1){
    		 	$('#modalDob').modal('show');
    		dobs.style.borderColor = 'red';
    		 	ageValue.innerHTML = 0;
    		 	document.getElementById('dob').innerHTML = 'Pick Date of Birth';
    		 	return false;
    		 } else{
    		ageValue.innerHTML = age + 'yrs';
    		dobs.style.borderColor = '#e6e6e6';


    		 }

			}

		 
		  	function loadCountry(){
		  	const country = document.getElementById('country');
		  	const state = document.getElementById('state1');
		  	const lga = document.getElementById('lga1');
		  	const others = document.getElementById('others');
    		const otherCountry = document.getElementById('other');


		  	if(country.value == 'Nigeria'){
		  		others.style.display = 'none';
		  		state.style.display = 'block';
		  		lga.style.display = 'block';
		  		otherCountry.value = '';
		  	} else{
		  		others.style.display = 'block';
		  		state.style.display = 'none';
		  		lga.style.display = 'none';

		  		var self = $('#ostate');
     			self.val(self.find('option[selected]').val());

     			var self1 = $('#lga');
     			self1.val(self1.find('option[selected]').val());

     			if(otherCountry.value == 'Nigeria'){
    		 	$('#inputValidate').modal('show');
    		 	otherCountry.style.borderColor = 'red';
     			}else{
    		 	otherCountry.style.borderColor = '#e6e6e6';

     			}
		  		
		  	}

		  	}

		  	function passwordConflict(){
		  		var password = document.getElementById('password');
		  		var cpassword = document.getElementById('cpassword');
		  		if(password.value != cpassword.value){
    		 	$('#passwordValidate').modal('show');
    		 	cpassword.style.borderColor = 'red';
    		 	return false;

		  		} else{
    		 	cpassword.style.borderColor = '#e6e6e6';

		  		}
		  	}

		  	
		  	function hide1(id){
		  		 const change = document.getElementById(id);
		  		change.style.display = 'none';
		  		change.value = '';
		  	}

		  	function show1(id){
		  		 const change = document.getElementById(id);
		  		change.style.display = 'block';
		  		

		  	}

		  	function hide_show(id1,id2){
		  		 const change = document.getElementById(id1);
		  		change.style.display = 'none';
		  		const change1 = document.getElementById(id2);
		  		change1.style.display = 'block';
		  		

		  	}
		  	// function acceptNumber(n){
		  	// 	 var value = document.getElementById(n).value;
		  		
		  	// 	if(value != NaN){
		  	// 		alert('Only numbers accepted');
		  	// 		// value = ' ';
		  	// 		return false;
		  	// 	}
		  		

		  	// }
		  	
		  </script>

		  <!-- ********************** Teststing ***********************************
		  ******************************************************************** -->
		  <script type="text/javascript">
		  	var Abia = ['Select item...', 'Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Obi Ngwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', 'Umuahia North', 'muahia South', 'Umu Nneochi'];
var Adamawa = ['Select item...', 'Demsa', 'Fufure', 'Ganye', 'Gayuk', 'Gombi', 'Grie', 'Hong', 'Jada', 'Larmurde', 'Madagali', 'Maiha', 'Mayo Belwa', 'Michika', 'Mubi North', 'Mubi South', 'Numan', 'Shelleng', 'Song', 'Toungo', 'Yola North', 'Yola South'];
var AkwaIbom = ['Select item...', 'Abak', 'Eastern Obolo', 'Eket', 'Esit Eket', 'Essien Udim', 'Etim Ekpo', 'Etinan', 'Ibeno', 'Ibesikpo Asutan', 'Ibiono-Ibom', 'Ika', 'Ikono', 'Ikot Abasi', 'Ikot Ekpene', 'Ini', 'Itu', 'Mbo', 'Mkpat-Enin', 'Nsit-Atai', 'Nsit-Ibom', 'Nsit-Ubium', 'Obot Akara', 'Okobo', 'Onna', 'Oron', 'Oruk Anam', 'Udung-Uko', 'Ukanafun', 'Uruan', 'Urue-Offong Oruko', 'Uyo'];
var Anambra = ['Select item...', 'Aguata', 'Anambra East', 'Anambra West', 'Anaocha', 'Awka North', 'Awka South', 'Ayamelum', 'Dunukofia', 'Ekwusigo', 'Idemili North', 'Idemili South', 'Ihiala', 'Njikoka', 'Nnewi North', 'Nnewi South', 'Ogbaru', 'Onitsha North', 'Onitsha South', 'Orumba North', 'Orumba South', 'Oyi'];
var Bauchi = ['Select item...', 'Alkaleri', 'Bauchi', 'Bogoro', 'Damban', 'Darazo', 'Dass', 'Gamawa', 'Ganjuwa', 'Giade', 'Itas-Gadau', 'Jama are', 'Katagum', 'Kirfi', 'Misau', 'Ningi', 'Shira', 'Tafawa Balewa', ' Toro', ' Warji', ' Zaki'];
var Bayelsa = ['Select item...', 'Brass', 'Ekeremor', 'Kolokuma Opokuma', 'Nembe', 'Ogbia', 'Sagbama', 'Southern Ijaw', 'Yenagoa'];
var Benue = ['Select item...', 'Agatu', 'Apa', 'Ado', 'Buruku', 'Gboko', 'Guma', 'Gwer East', 'Gwer West', 'Katsina-Ala', 'Konshisha', 'Kwande', 'Logo', 'Makurdi', 'Obi', 'Ogbadibo', 'Ohimini', 'Oju', 'Okpokwu', 'Oturkpo', 'Tarka', 'Ukum', 'Ushongo', 'Vandeikya'];
var Borno = ['Select item...', 'Abadam', 'Askira-Uba', 'Bama', 'Bayo', 'Biu', 'Chibok', 'Damboa', 'Dikwa', 'Gubio', 'Guzamala', 'Gwoza', 'Hawul', 'Jere', 'Kaga', 'Kala-Balge', 'Konduga', 'Kukawa', 'Kwaya Kusar', 'Mafa', 'Magumeri', 'Maiduguri', 'Marte', 'Mobbar', 'Monguno', 'Ngala', 'Nganzai', 'Shani'];
var CrossRiver = ['Select item...', 'Abi', 'Akamkpa', 'Akpabuyo', 'Bakassi', 'Bekwarra', 'Biase', 'Boki', 'Calabar Municipal', 'Calabar South', 'Etung', 'Ikom', 'Obanliku', 'Obubra', 'Obudu', 'Odukpani', 'Ogoja', 'Yakuur', 'Yala'];
var Delta = ['Select item...', 'Aniocha North', 'Aniocha South', 'Bomadi', 'Burutu', 'Ethiope East', 'Ethiope West', 'Ika North East', 'Ika South', 'Isoko North', 'Isoko South', 'Ndokwa East', 'Ndokwa West', 'Okpe', 'Oshimili North', 'Oshimili South', 'Patani', 'Sapele', 'Udu', 'Ughelli North', 'Ughelli South', 'Ukwuani', 'Uvwie', 'Warri North', 'Warri South', 'Warri South West'];
var Ebonyi = ['Select item...', 'Abakaliki', 'Afikpo North', 'Afikpo South', 'Ebonyi', 'Ezza North', 'Ezza South', 'Ikwo', 'Ishielu', 'Ivo', 'Izzi', 'Ohaozara', 'Ohaukwu', 'Onicha'];
var Edo = ['Select item...', 'Akoko-Edo', 'Egor', 'Esan Central', 'Esan North-East', 'Esan South-East', 'Esan West', 'Etsako Central', 'Etsako East', 'Etsako West', 'Igueben', 'Ikpoba Okha', 'Orhionmwon', 'Oredo', 'Ovia North-East', 'Ovia South-West', 'Owan East', 'Owan West', 'Uhunmwonde'];
var Ekiti = ['Select item...', 'Ado Ekiti', 'Efon', 'Ekiti East', 'Ekiti South-West', 'Ekiti West', 'Emure', 'Gbonyin', 'Ido Osi', 'Ijero', 'Ikere', 'Ikole', 'Ilejemeje', 'Irepodun-Ifelodun', 'Ise-Orun', 'Moba', 'Oye'];
var Enugu = ['Select item...', 'Aninri', 'Awgu', 'Enugu East', 'Enugu North', 'Enugu South', 'Ezeagu', 'Igbo Etiti', 'Igbo Eze North', 'Igbo Eze South', 'Isi Uzo', 'Nkanu East', 'Nkanu West', 'Nsukka', 'Oji River', 'Udenu', 'Udi', 'Uzo Uwani'];
var FCT = ['Select item...', 'Abaji', 'Bwari', 'Gwagwalada', 'Kuje', 'Kwali', 'Municipal Area Council'];
var Gombe = ['Select item...', 'Akko', 'Balanga', 'Billiri', 'Dukku', 'Funakaye', 'Gombe', 'Kaltungo', 'Kwami', 'Nafada', 'Shongom', 'Yamaltu-Deba'];
var Imo = ['Select item...', 'Aboh Mbaise', 'Ahiazu Mbaise', 'Ehime Mbano', 'Ezinihitte', 'Ideato North', 'Ideato South', 'Ihitte-Uboma', 'Ikeduru', 'Isiala Mbano', 'Isu', 'Mbaitoli', 'Ngor Okpala', 'Njaba', 'Nkwerre', 'Nwangele', 'Obowo', 'Oguta', 'Ohaji-Egbema', 'Okigwe', 'Orlu', 'Orsu', 'Oru East', 'Oru West', 'Owerri Municipal', 'Owerri North', 'Owerri West', 'Unuimo'];
var Jigawa = ['Select item...', 'Auyo', 'Babura', 'Biriniwa', 'Birnin Kudu', 'Buji', 'Dutse', 'Gagarawa', 'Garki', 'Gumel', 'Guri', 'Gwaram', 'Gwiwa', 'Hadejia', 'Jahun', 'Kafin Hausa', 'Kazaure', 'Kiri Kasama', 'Kiyawa', 'Kaugama', 'Maigatari', 'Malam Madori', 'Miga', 'Ringim', 'Roni', 'Sule Tankarkar', 'Taura', 'Yankwashi'];
var Kaduna = ['Select item...', 'Birnin Gwari', 'Chikun', 'Giwa', 'Igabi', 'Ikara', 'Jaba', 'Jema a', 'Kachia', 'Kaduna North', 'Kaduna South', 'Kagarko', 'Kajuru', 'Kaura', 'Kauru', 'Kubau', 'Kudan', 'Lere', 'Makarfi', 'Sabon Gari', 'Sanga', 'Soba', 'Zangon Kataf', 'Zaria'];
var Kano = ['Select item...', 'Ajingi', 'Albasu', 'Bagwai', 'Bebeji', 'Bichi', 'Bunkure', 'Dala', 'Dambatta', 'Dawakin Kudu', 'Dawakin Tofa', 'Doguwa', 'Fagge', 'Gabasawa', 'Garko', 'Garun Mallam', 'Gaya', 'Gezawa', 'Gwale', 'Gwarzo', 'Kabo', 'Kano Municipal', 'Karaye', 'Kibiya', 'Kiru', 'Kumbotso', 'Kunchi', 'Kura', 'Madobi', 'Makoda', 'Minjibir', 'Nasarawa', 'Rano', 'Rimin Gado', 'Rogo', 'Shanono', 'Sumaila', 'Takai', 'Tarauni', 'Tofa', 'Tsanyawa', 'Tudun Wada', 'Ungogo', 'Warawa', 'Wudil'];
var Katsina = ['Select item...', 'Bakori', 'Batagarawa', 'Batsari', 'Baure', 'Bindawa', 'Charanchi', 'Dandume', 'Danja', 'Dan Musa', 'Daura', 'Dutsi', 'Dutsin Ma', 'Faskari', 'Funtua', 'Ingawa', 'Jibia', 'Kafur', 'Kaita', 'Kankara', 'Kankia', 'Katsina', 'Kurfi', 'Kusada', 'Mai Adua', 'Malumfashi', 'Mani', 'Mashi', 'Matazu', 'Musawa', 'Rimi', 'Sabuwa', 'Safana', 'Sandamu', 'Zango'];
var Kebbi = ['Select item...', 'Aleiro', 'Arewa Dandi', 'Argungu', 'Augie', 'Bagudo', 'Birnin Kebbi', 'Bunza', 'Dandi', 'Fakai', 'Gwandu', 'Jega', 'Kalgo', 'Koko Besse', 'Maiyama', 'Ngaski', 'Sakaba', 'Shanga', 'Suru', 'Wasagu Danko', 'Yauri', 'Zuru'];
var Kogi = ['Select item...', 'Adavi', 'Ajaokuta', 'Ankpa', 'Bassa', 'Dekina', 'Ibaji', 'Idah', 'Igalamela Odolu', 'Ijumu', 'Kabba Bunu', 'Kogi', 'Lokoja', 'Mopa Muro', 'Ofu', 'Ogori Magongo', 'Okehi', 'Okene', 'Olamaboro', 'Omala', 'Yagba East', 'Yagba West'];
var Kwara = ['Select item...', 'Asa', 'Baruten', 'Edu', 'Ekiti', 'Ifelodun', 'Ilorin East', 'Ilorin South', 'Ilorin West', 'Irepodun', 'Isin', 'Kaiama', 'Moro', 'Offa', 'Oke Ero', 'Oyun', 'Pategi'];
var Lagos = ['Select item...', 'Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti Osa', 'Ibeju-Lekki', 'Ifako-Ijaiye', 'Ikeja', 'Ikorodu', 'Kosofe', 'Lagos Island', 'Lagos Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere'];
var Nassarawa = ['Select item...', 'Akwanga', 'Awe', 'Doma', 'Karu', 'Keana', 'Keffi', 'Kokona', 'Lafia', 'Nasarawa', 'Nasarawa Egon', 'Obi', 'Toto', 'Wamba'];
var Niger = ['Select item...', 'Agaie', 'Agwara', 'Bida', 'Borgu', 'Bosso', 'Chanchaga', 'Edati', 'Gbako', 'Gurara', 'Katcha', 'Kontagora', 'Lapai', 'Lavun', 'Magama', 'Mariga', 'Mashegu', 'Mokwa', 'Moya', 'Paikoro', 'Rafi', 'Rijau', 'Shiroro', 'Suleja', 'Tafa', 'Wushishi'];
var Ogun = ['Select item...', 'Abeokuta North', 'Abeokuta South', 'Ado-Odo Ota', 'Egbado North', 'Egbado South', 'Ewekoro', 'Ifo', 'Ijebu East', 'Ijebu North', 'Ijebu North East', 'Ijebu Ode', 'Ikenne', 'Imeko Afon', 'Ipokia', 'Obafemi Owode', 'Odeda', 'Odogbolu', 'Ogun Waterside', 'Remo North', 'Shagamu'];
var Ondo = ['Select item...', 'Akoko North-East', 'Akoko North-West', 'Akoko South-West', 'Akoko South-East', 'Akure North', 'Akure South', 'Ese Odo', 'Idanre', 'Ifedore', 'Ilaje', 'Ile Oluji-Okeigbo', 'Irele', 'Odigbo', 'Okitipupa', 'Ondo East', 'Ondo West', 'Ose', 'Owo'];
var Osun = ['Select item...', 'Atakunmosa East', 'Atakunmosa West', 'Aiyedaade', 'Aiyedire', 'Boluwaduro', 'Boripe', 'Ede North', 'Ede South', 'Ife Central', 'Ife East', 'Ife North', 'Ife South', 'Egbedore', 'Ejigbo', 'Ifedayo', 'Ifelodun', 'Ila', 'Ilesa East', 'Ilesa West', 'Irepodun', 'Irewole', 'Isokan', 'Iwo', 'Obokun', 'Odo Otin', 'Ola Oluwa', 'Olorunda', 'Oriade', 'Orolu', 'Osogbo'];
var Oyo = ['Select item...', 'Afijio', 'Akinyele', 'Atiba', 'Atisbo', 'Egbeda', 'Ibadan North', 'Ibadan North-East', 'Ibadan North-West', 'Ibadan South-East', 'Ibadan South-West', 'Ibarapa Central', 'Ibarapa East', 'Ibarapa North', 'Ido', 'Irepo', 'Iseyin', 'Itesiwaju', 'Iwajowa', 'Kajola', 'Lagelu', 'Ogbomosho North', 'Ogbomosho South', 'Ogo Oluwa', 'Olorunsogo', 'Oluyole', 'Ona Ara', 'Orelope', 'Ori Ire', 'Oyo', 'Oyo East', 'Saki East', 'Saki West', 'Surulere'];
var Plateau = ['Select item...', 'Bokkos', 'Barkin Ladi', 'Bassa', 'Jos East', 'Jos North', 'Jos South', 'Kanam', 'Kanke', 'Langtang South', 'Langtang North', 'Mangu', 'Mikang', 'Pankshin', 'Qua an Pan', 'Riyom', 'Shendam', 'Wase'];
var Rivers = ['Select item...', 'Abua Odual', 'Ahoada East', 'Ahoada West', 'Akuku-Toru', 'Andoni', 'Asari-Toru', 'Bonny', 'Degema', 'Eleme', 'Emuoha', 'Etche', 'Gokana', 'Ikwerre', 'Khana', 'Obio Akpor', 'Ogba Egbema Ndoni', 'Ogu Bolo', 'Okrika', 'Omuma', 'Opobo Nkoro', 'Oyigbo', 'Port Harcourt', 'Tai'];
var Sokoto = ['Select item...', 'Binji', 'Bodinga', 'Dange Shuni', 'Gada', 'Goronyo', 'Gudu', 'Gwadabawa', 'Illela', 'Isa', 'Kebbe', 'Kware', 'Rabah', 'Sabon Birni', 'Shagari', 'Silame', 'Sokoto North', 'Sokoto South', 'Tambuwal', 'Tangaza', 'Tureta', 'Wamako', 'Wurno', 'Yabo'];
var Taraba = ['Select item...', 'Ardo Kola', 'Bali', 'Donga', 'Gashaka', 'Gassol', 'Ibi', 'Jalingo', 'Karim Lamido', 'Kumi', 'Lau', 'Sardauna', 'Takum', 'Ussa', 'Wukari', 'Yorro', 'Zing'];
var Yobe = ['Select item...', 'Bade', 'Bursari', 'Damaturu', 'Fika', 'Fune', 'Geidam', 'Gujba', 'Gulani', 'Jakusko', 'Karasuwa', 'Machina', 'Nangere', 'Nguru', 'Potiskum', 'Tarmuwa', 'Yunusari', 'Yusufari'];
var Zamfara = ['Select item...', 'Anka', 'Bakura', 'Birnin Magaji Kiyaw', 'Bukkuyum', 'Bungudu', 'Gummi', 'Gusau', 'Kaura Namoda', 'Maradun', 'Maru', 'Shinkafi', 'Talata Mafara', 'Chafe', 'Zurmi'];
jQuery(window).on('load',function() {
        $("#ostate").change(function(){            
            var id = $(this).val(); 
            if (!id){
            opt.innerHTML = null;
            opt.value = null;
             var c = lga.appendChild(opt);
             lga.disabled = true;
            // $('select').selectmenu('refresh', true);
            

            }
           
          else{
          	var sid = eval(id); 
            var lga = document.getElementById('lga')
            for (let i=0; len=sid.length, i<len; i++) {
            var opt = document.createElement("option");
            opt.innerHTML = sid[i];
            opt.value = sid[i];
            // opt.innerHTML.value = sid[i];
            // lga =  sid[i];
       		lga.add(opt);
       		// lga.disabled = false;

             }
          	
          }

    const allergies = document.getElementsByName('allergies');

            console.log(lga);
            console.log(sid);
            console.log(allergies);

});
        });



function setRegions()
{
	for (region in countries)
		document.write('<option value="' + region + '">' + region + '</option>');
}

function set_country(oRegionSel, oCountrySel, oCity_StateSel)
{
	var countryArr;
	oCountrySel.length = 0;
	oCity_StateSel.length = 0;
	var region = oRegionSel.options[oRegionSel.selectedIndex].text;
	if (countries[region])
	{
		oCountrySel.disabled = false;
		oCity_StateSel.disabled = true;
		oCountrySel.options[0] = new Option('SELECT COUNTRY','');
		countryArr = countries[region].split('|');
		for (var i = 0; i < countryArr.length; i++)
			oCountrySel.options[i + 1] = new Option(countryArr[i], countryArr[i]);
		document.getElementById('txtregion').innerHTML = region;
		document.getElementById('txtplacename').innerHTML = '';
	}
	else oCountrySel.disabled = true;
}

function set_city_state(oCountrySel, oCity_StateSel)
{
	var city_stateArr;
	oCity_StateSel.length = 0;
	var country = oCountrySel.options[oCountrySel.selectedIndex].text;
	if (city_states[country])
	{
		oCity_StateSel.disabled = false;
		oCity_StateSel.options[0] = new Option('SELECT NEAREST DIVISION','');
		city_stateArr = city_states[country].split('|');
		for (var i = 0; i < city_stateArr.length; i++)
			oCity_StateSel.options[i+1] = new Option(city_stateArr[i],city_stateArr[i]);
		document.getElementById('txtplacename').innerHTML = country;
	}
	else oCity_StateSel.disabled = true;
}

function print_city_state(oCountrySel, oCity_StateSel)
{
	var country = oCountrySel.options[oCountrySel.selectedIndex].text;
	var city_state = oCity_StateSel.options[oCity_StateSel.selectedIndex].text;
	if (city_state && city_states[country].indexOf(city_state) != -1)
		document.getElementById('txtplacename').innerHTML = city_state + ', ' + country;
	else document.getElementById('txtplacename').innerHTML = country;
}




		  </script>

		  <!-- ********************** Teststing Ends ***********************************
		  ******************************************************************** -->
	</body>
</html>
