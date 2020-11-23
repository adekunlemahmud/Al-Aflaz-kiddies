<?php
session_start();

    // Include config file
$localhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "alaflaz";

$link = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
// if(isset($_SESSION['username'])){
//     // echo ($_SESSION['username']);
//     $username = $_SESSION['username'];

//     $query = $_GET['admin_no'];
//     // gets value sent over search form
     
//     $min_length = 3;
//     // you can set minimum length of the query if you want
     
//     if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
//         $query = htmlspecialchars($query); 
//         // changes characters used in html to their equivalents, for example: < to &gt;
         
//         $query = mysqli_real_escape_string($link,$query);
//         // makes sure nobody uses SQL injection
         
//         $raw_results = mysqli_query($link, "SELECT * FROM payment WHERE (`admission_no` LIKE '%".$query."%')");
             
//         // * means that it selects all fields, you can also write: `id`, `title`, `text`
//         // articles is the name of our table
         
//         // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
//         // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
//         // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
//         // if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
//             // while($results = mysqli_fetch_array($raw_results)){
//             // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
//                 // echo "<p><h3>".$results['pupil_name']."</h3>".$results['purpose_of_payment']."</p>";
//                 // posts results gotten from database(title and text) you can also show id ($results['id'])
//             // }
             
//         // }
//         // else{ // if there is no matching rows do following
//             // echo "No results";
//         // }
         
//     // }
//     // else{ // if query length is less than minimum
//         // echo "Minimum length is ".$min_length;
//     // }
// }


if (isset($_POST["submit"])){

    $username = $_SESSION['username'];
          
    $select = mysqli_query($link, "SELECT * from payment");
    while ($output = mysqli_fetch_assoc($select)){
         $name = $output['pupil_name'];
         $amount_paid1 = $output['amount_paid'];
         $amount_paid2 = $output['amount_paid2'];
         $amount_paid3 = $output['amount_paid3'];
         $balance = $output['Balance'];
         $amountpayable = $output['amount_payable'];       
    }
   
    $pupiladminno = mysqli_real_escape_string($link, $_REQUEST['pupiladminno']);
    $amtpaid = mysqli_real_escape_string($link, $_REQUEST['amtpaid']);
    $paydate = mysqli_real_escape_string($link, $_REQUEST['paydate']);
    $paypurpose = mysqli_real_escape_string($link, $_REQUEST['paypurpose']);
    $paystatus  = mysqli_real_escape_string($link, $_REQUEST['paystatus']);
    $totalPayment = $amtpaid + $amount_paid1 + $amount_paid2 + $amount_paid3;
    $balance = $amountpayable -  $totalPayment;
   


     

   $query = mysqli_query($link, "SELECT `admission_no`,`purpose_of_payment` FROM payment WHERE `admission_no`= '$pupiladminno' AND purpose_of_payment =  '$paypurpose'");
   if(mysqli_num_rows($query) > 0){


          if($paypurpose == 'First Term') {
      if($amount_paid1 == 0){
      $sql = "UPDATE payment SET `amount_paid`='$amtpaid',`payment_date`='$paydate', `payment_status`= '$paystatus', `total_payment`= `amount_paid` + `amount_paid2` + `amount_paid3`, `Balance`= `amount_payable` - `total_payment`,`created_on`= NOW() WHERE admission_no ='$pupiladminno' AND purpose_of_payment = 'First Term'"; 
   } elseif($amount_paid2 == 0) {
    $sql = "UPDATE payment SET `amount_paid2`='$amtpaid',`payment_date2`='$paydate', `payment_status`= '$paystatus', `total_payment`= `amount_paid` + `amount_paid2` + `amount_paid3` , `Balance`=`amount_payable` - `total_payment`,`created_on`= NOW() WHERE admission_no ='$pupiladminno' AND purpose_of_payment = 'First Term'"; 
   }else {
    $sql = "UPDATE payment SET `amount_paid3`='$amtpaid',`payment_date3`='$paydate', `payment_status`= '$paystatus', `total_payment`= `amount_paid` + `amount_paid2` + `amount_paid3`, `Balance`=`amount_payable` - `total_payment`,`created_on`= NOW() WHERE admission_no ='$pupiladminno' AND purpose_of_payment = 'First Term'"; 
   }

    } elseif ($paypurpose == 'Second Term') {
       if($amount_paid1 == 0){
      $sql = "UPDATE payment SET `amount_paid`='$amtpaid',`payment_date`='$paydate', `payment_status`= '$paystatus', `total_payment`= `amount_paid` + `amount_paid2` + `amount_paid3`, `Balance`= `amount_payable` - `total_payment`,`created_on`= NOW() WHERE admission_no ='$pupiladminno' AND purpose_of_payment = 'Second Term'"; 
   } elseif($amount_paid2 == 0) {
    $sql = "UPDATE payment SET `amount_paid2`='$amtpaid',`payment_date2`='$paydate', `payment_status`= '$paystatus', `total_payment`= `amount_paid` + `amount_paid2` + `amount_paid3` , `Balance`=`amount_payable` - `total_payment`,`created_on`= NOW() WHERE admission_no ='$pupiladminno' AND purpose_of_payment = 'Second Term'"; 
   }else {
    $sql = "UPDATE payment SET `amount_paid3`='$amtpaid',`payment_date3`='$paydate', `payment_status`= '$paystatus', `total_payment`= `amount_paid` + `amount_paid2` + `amount_paid3`, `Balance`=`amount_payable` - `total_payment`,`created_on`= NOW() WHERE admission_no ='$pupiladminno' AND purpose_of_payment = 'Second Term'"; 
   }


    } elseif ($paypurpose == 'Third Term') {
       if($amount_paid1 == 0){
      $sql = "UPDATE payment SET `amount_paid`='$amtpaid',`payment_date`='$paydate', `payment_status`= '$paystatus', `total_payment`= `amount_paid` + `amount_paid2` + `amount_paid3`, `Balance`= `amount_payable` - `total_payment`,`created_on`= NOW() WHERE admission_no ='$pupiladminno' AND purpose_of_payment = 'Third Term'"; 
   } elseif($amount_paid2 == 0) {
    $sql = "UPDATE payment SET `amount_paid2`='$amtpaid',`payment_date2`='$paydate', `payment_status`= '$paystatus', `total_payment`= `amount_paid` + `amount_paid2` + `amount_paid3`, `Balance`=`amount_payable` - `total_payment`,`created_on`= NOW() WHERE admission_no ='$pupiladminno' AND purpose_of_payment = 'Third Term'"; 
   }else {
    $sql = "UPDATE payment SET `amount_paid3`='$amtpaid',`payment_date3`='$paydate', `payment_status`= '$paystatus', `total_payment`= `amount_paid` + `amount_paid2` + `amount_paid3`, `Balance`=`amount_payable` - `total_payment`,`created_on`= NOW() WHERE admission_no ='$pupiladminno' AND purpose_of_payment = 'Third Term'"; 
   }

    } 
    

 
if(mysqli_query($link, $sql)){
    
echo '<script>alert("Updated Successfully")</script>'; 

} else{
    echo "ERROR: Could not able to execute $link->error ";
    // print($link->error);
}

   }else{

    echo '<script>alert("Pay Purpose Does Not Exist")</script>';
   }

  
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Al Aflaz Kiddies</title>
        <link rel="shortcut icon" href="../images/logo.jpg">

    <!-- <link rel="shortcut icon"
        href="https://res.cloudinary.com/ddu0ww15f/image/upload/c_scale,h_16/v1571841777/icons8-home-office-24_veiqea.png"
        type="image/x-icon"> -->
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <!-- Fontawesome CSS -->
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
        <!-- Bootstrap CSS -->
        <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
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
    <!-- Custom CSS -->
    <style type="text/css">
        /*Main page style by message*/
        @import url(http://fonts.googleapis.com/css?family=Open+Sans);

        :root {
            --primary-color: #091429;
            --secondary-color: #0ABAB5;
            --dark-color: #262626;
            --light-color: #B1B1B1;
        }

        /****************************/
        /*------- main styles ------*/
        /****************************/
        .text-primary {
            color: var(--primary-color) !important;
        }

        .text-secondary {
            color: var(--secondary-color) !important;
        }

        .text-dark {
            color: var(--dark-color) !important;
        }

        .text-light {
            color: var(--light-color) !important;
        }

        .bg-primary {
            background-color: #fff !important;
        }

        .bg-secondary {
            background-color: var(--secondary-color) !important;
        }

        .bg-light {
            background-color: var(--light-color) !important;
        }

        .bg-dark {
            background-color: var(--dark-color) !important;
        }

        .btn {
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

        .btn-primary {
            background-color: #8e4efc !important;
        }

        .btn-secondary {
            background-color: #7eed7e !important;
        }

        .btn-primary-outline {
            background-color: transparent !important;
            color: var(--primary-color) !important;
            border: 1px solid var(--primary-color) !important;
        }

        .btn-secondary-outline {
            background-color: transparent !important;
            color: var(--secondary-color) !important;
            border: 2px solid var(--secondary-color) !important;
        }

        .btn-primary:hover,
        .btn-secondary:hover,
        .btn-primary-outline:hover,
        .btn-secondary-secondary:hover {
            border-color: #e9eef7 !important;
            opacity: 0.8 !important;
        }

        .btn-bty{
            width: 3em;
        }

       .cent{
        margin-left: 42%;
        margin-bottom: 0%;
       }
        /*------Nav bar---------*/
        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding-top: 0px;
            padding-bottom: 0px;
            background-color: #fff;
            border: none;
            height: 70px;
            border-radius: 0;
            margin-bottom: 10px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .navbar-nav .nav-item .nav-link:hover {
            transition: 0.25s;
            background-color: #ecf3ff;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        .wrapper #content {}

        .dropdown-menu {

            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .dropdown-item {
            font-family: Open Sans;
            font-style: normal;
            line-height: 30px;
            color: #EEEEEE;
        }

        .dropdown-menu {
            right: 3px;
        }

        .pass{
            border-radius: 50%;
           margin-top: 35px;
        }
        .wel{
            margin-top: 35px;
        }
        .intro{
            size: 30px;
        }
        .info{
           font-family: cursive;
            font-size: 18px;
            color:#ca0bd4;
            /*text-shadow: 2px 1px #005c9e;*/
        }
        .info-head{
            color: #bf7eed;
            font-family: serif;
            margin-bottom: 0.2em;
        }
        .info-head1{
            color: #000;
            font-family: serif;
            margin-bottom: 0.2em;
        }

        .relp{
            font-weight: bold;
            font-size: 16px !important;
            font-family: sans-serif;
            color: #ca0bd4;
        }

        /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */
        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
            perspective: 1500px;
        }

        #sidebar {
            min-width: 220px;
            max-width: 220px;
            background: #fff;
            color: black;
            transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
            transform-origin: bottom left;
            border-right: 2px solid #3892f2;
        }

        #sidebar.active {
            margin-left: -250px;
            transform: rotateY(100deg);
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: white;
        }

        #sidebar ul.components {
            padding: 20px 0;
            /*border-bottom: 1px solid var(--primary-color);*/
        }

        #sidebar ul p {
            color: #000;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 1.2rem 0rem;
            padding-left: 40px;
            font-size: 1em;
            font-weight: 600;
            display: block;
            transition: 0.4;
        }

        #sidebar ul li a:hover {
            color: #ffffff;
            background: #e9eef7;
        }

        #sidebar ul li a img {
            margin-top: -4px !important;
            margin-left: 4px;
            margin-right: 4px;
        }

        #sidebar.active ul li a span {
            vertical-align: text-bottom !important;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #000;
            background: #e9eef7;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #e9eef7;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article,
        a.article:hover {
            background: rgba(19, 41, 82, 1) !important;
            color: #fff !important;
        }

        /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */

        span {
            color: black;
        }
        #content {
            width: 100%;
            min-height: 100vh;
            transition: all 0.3s;
        }

        #sidebarCollapse {
            width: 40px;
            height: 40px;
            background: #f5f5f5;
            cursor: pointer;
            
        }

        #sidebarCollapse span {
            width: 80%;
            height: 2px;
            margin: 0 auto;
            display: block;
            background: #555;
            transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
            transition-delay: 0.2s;
        }

        #sidebarCollapse span:first-of-type {
            transform: rotate(45deg) translate(2px, 2px);
        }

        #sidebarCollapse span:nth-of-type(2) {
            opacity: 0;
        }

        #sidebarCollapse span:last-of-type {
            transform: rotate(-45deg) translate(1px, -1px);
        }

        #sidebarCollapse.active span {
            transform: none;
            opacity: 1;
            margin: 5px auto;
        }

        .alert.alert-primary.py-0.px-2.small.m-0.pending {
            color: #F67A06;
            font-weight: bold;
            background-color: rgba(201, 133, 70, 0.3);
            border-color: rgba(201, 133, 70, 0.3);
        }

        .py-0 {

            padding: 5px 15px !important;
            border-radius: 0;
            border: none
        }

        .alert.alert-primary.py-0.px-2.small.m-0.active {
            color: #179615;
            font-weight: bold;
            background-color: #C4C4C4;
            border-color: #C4C4C4;
        }

        .container-fluid .input-group {
            margin-left: 400px;
            width: 350px;
        }

        .container-fluid .mydrop-down {
            width: 300px;
        }
        i.fas{
            size: 50px;
            color: green;
        }
        .form-text{
            text-transform: capitalize;
        }

        input::placeholder {
                color: #179615;
                text-align: center;
        }

        /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */
        @media (max-width: 616px) {
            #sidebar {
                margin-left: -220px;
                transform: rotateY(90deg);
            }

            #sidebarCollapse {
                width: 40px;
                height: 40px;
                background: #f5f5f5;
                cursor: pointer;
                display: block;
            }

            #sidebar.active {
                margin-left: 0;
                transform: none;
            }

            #sidebarCollapse span:first-of-type,
            #sidebarCollapse span:nth-of-type(2),
            #sidebarCollapse span:last-of-type {
                transform: none;
                opacity: 1;
                margin: 5px auto;
            }

            #sidebarCollapse.active span {
                margin: 0 auto;
            }

            #sidebarCollapse.active span:first-of-type {
                transform: rotate(45deg) translate(2px, 2px);
            }

            #sidebarCollapse.active span:nth-of-type(2) {
                opacity: 0;
            }

            #sidebarCollapse.active span:last-of-type {
                transform: rotate(-45deg) translate(1px, -1px);
            }

            .container-fluid .input-group {
                margin-left: -20px;
                width: 220px;
            }

            .container-fluid .mydrop-down {
                width: 100%;
            }

            .container-fluid .mydrop-down {
                width: 100%;
            }

            .container-fluid {
                margin-left: 40px;
            }
        }

        @media (max-width: 533px) {
            #sidebar {
                margin-left: -220px;
                transform: rotateY(90deg);
            }

            #sidebarCollapse {
                width: 40px;
                height: 40px;
                background: #f5f5f5;
                cursor: pointer;
                display: block;
            }

            #sidebar.active {
                margin-left: 0;
                transform: none;
            }

            #sidebarCollapse span:first-of-type,
            #sidebarCollapse span:nth-of-type(2),
            #sidebarCollapse span:last-of-type {
                transform: none;
                opacity: 1;
                margin: 5px auto;
            }

            #sidebarCollapse.active span {
                margin: 0 auto;
            }

            #sidebarCollapse.active span:first-of-type {
                transform: rotate(45deg) translate(2px, 2px);
            }

            #sidebarCollapse.active span:nth-of-type(2) {
                opacity: 0;
            }

            #sidebarCollapse.active span:last-of-type {
                transform: rotate(-45deg) translate(1px, -1px);
            }

            .container-fluid .input-group {
                margin-left: -100px;
                width: 100px;
                padding-left: -200px;
            }

            .container-fluid .mydrop-down {
                width: 100%;
            }

            .container-fluid {
                margin-left: -40px;
            }
        }

        @media (max-width: 1024px) {
            #sidebar {
                margin-left: -220px;
                transform: rotateY(90deg);
            }

            #sidebarCollapse {
                width: 40px;
                height: 40px;
                background: #f5f5f5;
                cursor: pointer;
                display: block;
            }

            #sidebar.active {
                margin-left: 0;
                transform: none;
            }

            #sidebarCollapse span:first-of-type,
            #sidebarCollapse span:nth-of-type(2),
            #sidebarCollapse span:last-of-type {
                transform: none;
                opacity: 1;
                margin: 5px auto;
            }

            #sidebarCollapse.active span {
                margin: 0 auto;
            }

            #sidebarCollapse.active span:first-of-type {
                transform: rotate(45deg) translate(2px, 2px);
            }

            #sidebarCollapse.active span:nth-of-type(2) {
                opacity: 0;
            }

            #sidebarCollapse.active span:last-of-type {
                transform: rotate(-45deg) translate(1px, -1px);
            }

            #content .container-fluid {
                margin-left: 0px;

            }

            .container-fluid .input-group {
                margin-left: 60px;
                width: 150px;
            }

            .container-fluid .mydrop-down {
                width: 100%;
            }

            .container-fluid .mydrop-down {
                width: 100%;
            }
        }




        /* ---------------------------------------------------
            Table
        ----------------------------------------------------- */

        table.project-table {
            border-collapse: separate;
            border-spacing: 0 1em;
        }

        table.project-table tbody tr {
            padding-bottom: 10px !important;
            width: 100px;
        }

        table.project-table tbody tr td span.text-small {
            font-size: 8px;
        }

        table.project-table tbody tr td,
        table.project-table thead tr th {
            max-width: 200px;

            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .dropleft .dropdown-toggle::before {
            display: none;
        }

        /*------------floating button---------*/
        #add-something {
            /*position: fixed;*/
            bottom: 20px;
            left: 320px;
            z-index: 12;
        }
    </style>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
               <a href="../index.html" data-toggle="tooltip" data-placement="bottom"  title="Homepage"><img src="https://res.cloudinary.com/dwszstiol/image/upload/v1587652605/al-aflaz/logo1_mt1hbx.svg" alt="logo" class="img img-responsive" height="100" width="100"></a>
                
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="admin.php">
                        <i class="fas fa-home"></i>
                        <!-- <img src="https://lancer-app.000webhostapp.com/images/svg/home.svg" height="20" width="auto" style="color: #000"> -->
                        <span> Dashboard</span></a>
                </li>
                <li>
                    <a href="pupilsinfo.php">
                        <i class="fas fa-user"></i> <span> Pupils' Info</span>
                    </a>
                </li>
                <li class="">
                    <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">

                            <i class="fas fa-money-check"></i><span> Payments</span></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="paymentview.php" class="pl-4">View Payment</a>
                        </li>
                        <li>
                            <a href="paymentupload.php" class="pl-4">Create Payment</a>
                        </li>
                        <li>
                            <a href="paymentupdate.php" class="pl-4">Update Payment</a>
                        </li>
                        <li>
                            <a href="paymentbreakdown.php" class="pl-4">Payment Breakdown</a>
                        </li>
                        <li>
                            <a href="debtissues.php" class="pl-4">Debt Issues</a>
                        </li>

                        

                    </ul>
                </li>
                <li class="">
                    <a href="#class" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">

                            <i class="fas fa-school"></i><span> Class Allocation</span></a>
                    <ul class="collapse list-unstyled" id="class">
                        
                        <li>
                            <a href="unitclassupdate.php" class="pl-4">Unit Class Update</a>
                        </li>
                        <li>
                            <a href="bulkclassupdate.php" class="pl-4">Bulk Class Update</a>
                        </li>
                        
                </ul>
            </li>

               <li>
                    <a href="generate.php">
                       <i class="fas fa-calendar"></i><span> Generate Cred.</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-chalkboard-teacher"></i> <span> Results</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i  class="fas fa-sign-out-alt"></i> <span> Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
       
        <div id="content" style="overflow: auto; height: 400px;">
            <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                       <div class="wel">
                        <table class="table table-borderless">
                        <thead>
                        <th scope="col" id="thead" class="relp" data-aos = "zoom-in" data-aos-duration="3000" >Update Payments</th>
                        
                        </thead>
                        </table>
                        
                    </div>                  
                </div>
            </nav>
            <div class="container" data-aos = "zoom-in" data-aos-duration="3000">
                <div class="cent">
                        <h3 class="info-head1"></h3> <br>
                    </div>
                    
                    <div> 
                                    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
  
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="info" >Enter Admission Number</label>
                </div>
                <div class="col-sm-6">
                <input name="pupiladminno" id="padminno" type="text" required="" onchange ="modalInfo1()" onblur="validateEmpty(this)"  class="form-control form-text">  
                </div>
            </div>

           
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="info" >Enter Amount Paid</label>
                </div>
                <div class="col-sm-6">
                <input name="amtpaid" id="amtpaid" type="number" required="" onchange ="modalInfo1()"  onblur="validateEmpty(this)" class="form-control form-text">  
                </div>
            </div>
            
            <div class="form-group row" >
                <div class="col-sm-4">
                    <label class="info" >Enter Payment's Date</label>
                </div>
                <div class="col-sm-6">
                <input name="paydate" id="pdate" type="date" required="" onchange ="modalInfo1()"  onblur="validateEmpty(this)" class="form-control">  
                </div>
            </div>  
             <div class="form-group row" >
                <div class="col-sm-4">
                    <label class="info" >Purpose of Payment</label>
                </div>
                <div class="col-sm-6">
                <select name="paypurpose" required="" class="custom-select" id="pclass"  onblur="validateEmpty1(this)" onchange ="modalInfo1()">
    <option value="">Choose...</option>
    <option value="First Term">First Term</option>
    <option value="Second Term">Second Term</option>
    <option value="Third Term">Third Term</option>
      </select>   
                </div> 
            </div>
             <div class="form-group row">
                <div class="col-sm-4">
                    <label class="info" >Payment Status</label>
                </div>
                <div class="col-sm-6">
                <input name="paystatus" id="paystatus" type="text" required="" onchange ="modalInfo1()" onblur="validateEmpty(this)" class="form-control form-text" placeholder="Full/Part Payment">  
                </div>
            </div>
            <!-- Button trigger modal -->
<button type="submit" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#fullHeightModalRight">
  Update
</button>
</form>
</div>
            
   
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
            const searchBox = document.querySelector('.searchBox');
            const status = document.querySelector('.status');
            const filterNames = () => {
                const titles = document.querySelectorAll('.titles');
                const searchBoxValue = searchBox.value.toLowerCase();

                titles.forEach(title => {
                    if (!title.textContent.toLowerCase().includes(searchBoxValue)) {
                        title.parentElement.style.display = "none"
                    } else {
                        title.parentElement.style.display = "";
                    }
                })
            }
            const filterStatus = () => {
                const statusText = document.querySelectorAll('.alert-primary')

                statusText.forEach(text => {
                    if (status.value !== 'All') {
                        if (status.value === text.textContent) {
                            text.parentElement.parentElement.style.display = ""
                        } else {
                            text.parentElement.parentElement.style.display = "none"
                        }
                    } else {
                        text.parentElement.parentElement.style.display = ""
                    }
                })
            }
            searchBox.addEventListener('keyup', filterNames);
            status.addEventListener('change', filterStatus);

        });

        function validateEmpty(inputTxt){
           
        if(inputTxt.value == '' ){
            $('#modalValidate').modal('show');
            inputTxt.style.borderColor = 'red';
        } else{
            inputTxt.style.borderColor = '#e6e6e6';

        }
    }

        function validateEmpty1(inputTxt){
        input = inputTxt.options[inputTxt.selectedIndex].text;
        if(input == 'Choose...' ){
            $('#modalValidate').modal('show');
            inputTxt.style.borderColor = 'red';
            return false;
        } else{
            inputTxt.style.borderColor = '#e6e6e6';

        }

    }
         
    </script>
    <script>
            AOS.init();

            $(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
          </script>
</body>

</html>
