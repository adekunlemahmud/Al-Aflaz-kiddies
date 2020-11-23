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
        
    $select = mysqli_query($link, "SELECT * from payment");
    while ($output = mysqli_fetch_assoc($select)){
         $name = $output['pupil_name'];
         $amount_paid2 = $output['amount_paid2'];
         $amount_paid3 = $output['amount_paid3'];
         $balance = $output['Balance'];

             
    }
    // echo "$amount_paid2";

    
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

        .bg-reform {
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
            background-color: #0bd4bd !important;
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

        ./*btn-reform{
            background-color: #e356dc !important;
            color: white;
        }*/

        .btn-reform:hover,
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
        .move-down{
            margin-left: 10%;
            margin-top: 5%;
            margin-bottom: 2%;
        }
        .relp{
            font-weight: bold;
            font-size: 16px !important;
            font-family: sans-serif;
            color: #ca0bd4;
        }
        .btns{
            margin-left: 20%;
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
            /*font-weight: bold;*/
            font-size: 18px;
            color:#005c9e;
            /*text-shadow: 2px 1px #005c9e;*/
        }
        .info-head{
            color: #ca0bd4;
            font-family: cursive;
            margin-bottom: -1em;
            font-size: 1.2em;
        }
        .info-head1{
            color: #000;
            font-family: serif;
            margin-bottom: 0.2em;
            text-align: center;
        }
        .info-head-table{
            color: #000;
            font-family: cursive;
            margin-bottom: 0.2em;
            /*font-weight: bold;*/
            text-align: center;
            font-size: 1em;
        }
        .info-head-table1{
            color: #000;
            font-family: cursive;
            font-weight: bold;
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
        .move{
            margin-top: 5%;
            /*color: red;*/
            font-family: cursive;
            margin-left: 2%;
        }
        .titles{
            font-family: cursive;
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
    <!-- Add animations -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- end add animations -->
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
                <li class="active">
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

                            <i class="fas fa-school"></i><span> Class Allocation &nbsp</span></a>
                    <ul class="collapse list-unstyled" id="class">
                        
                        <li>
                            <a href="unitclassupdate.php" class="pl-4">Individual Class Update</a>
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
                        <th scope="col" id="thead" class="relp" data-aos = "zoom-in" data-aos-duration="3000"> View Payments</th>
                        
                        </thead>
                        </table>
                        
                    </div>             
             
            </nav>
            <div class="btns" data-aos="zoom-in" data-aos-duration="3000">
                <div>
                        
                    </div>
                    <div>
                        <h4 class="info-head">View By Class</h4> <br>
                    </div>
<div>
<div class="btn-group" role= "group" >
 
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#play" aria-expanded="false" aria-controls="collapseExample">
    Play Class &nbsp 
  </button > 
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#prep" aria-expanded="false">
    Preparatory Class
  </button >
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#reception" aria-expanded="false" aria-controls="collapseExample">
    Reception Class
  </button >
  
</div>
</div>

<div>
<div class="btn-group" role= "group" >
 
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#foundation" aria-expanded="false" aria-controls="collapseExample">
    Foundation Class
  </button > 
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#gradeone" aria-expanded="false">
    Grade One &nbsp &nbsp &nbsp &nbsp
  </button >
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#gradetwo" aria-expanded="false" aria-controls="collapseExample">
    Grade Two &nbsp &nbsp &nbsp &nbsp
  </button >
  
</div>
</div>

<div>
<div class="btn-group" role= "group" >
 
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#gradethree" aria-expanded="false" aria-controls="collapseExample">
    Grade Three &nbsp &nbsp &nbsp &nbsp
  </button > 
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#gradefour" aria-expanded="false">
    Grade Four &nbsp &nbsp &nbsp &nbsp
  </button >
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#gradefive" aria-expanded="false" aria-controls="collapseExample">
    Grade Five &nbsp &nbsp &nbsp &nbsp
  </button >
  
</div>
</div>
</div>
                    
                    
        <!-- play collapse -->
        <div class="collapse" id="play">
 <label class="move">Play Class</label>

            <div class="btn-group move-down" role= "group" >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#play-first-term" aria-expanded="false" aria-controls="collapseExample">
    First Term
  </button > 
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#play-second-term" aria-expanded="false">
    Second Term
  </button >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#play-third-term" aria-expanded="false" aria-controls="collapseExample">
    Third Term
  </button >
  
</div>
</div>
<!-- First Term collapse -->
        <div class="collapse" id="play-first-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'first term' AND class = 'Play Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>First Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'first term' AND class = 'Play Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /First Term collapse -->

                <!-- Second Term collapse -->
        <div class="collapse" id="play-second-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'second term' AND class = 'Play Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Second Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'second term' AND class = 'Play Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Second Term collapse -->

<!-- Third Term collapse -->
        <div class="collapse" id="play-third-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'third term' AND class = 'Play Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Third Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'third term' AND class = 'Play Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 

<!-- /Third Term collapse -->


  
                <!-- /play collapse -->   

                <!-- prepartory collapse -->
        
        <div class="collapse" id="prep">
 <label class="move">Preparatory Class</label>

            <div class="btn-group move-down" role= "group" >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#prep-first-term" aria-expanded="false" aria-controls="collapseExample">
    First Term
  </button > 
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#prep-second-term" aria-expanded="false">
    Second Term
  </button >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#prep-third-term" aria-expanded="false" aria-controls="collapseExample">
    Third Term
  </button >
  
</div>
</div>
<!-- First Term collapse -->
        <div class="collapse" id="prep-first-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'first term' AND class = 'Preparatory Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>First Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'first term' AND class = 'Preparatory Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /First Term collapse -->

                <!-- Second Term collapse -->
        <div class="collapse" id="prep-second-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'second term' AND class = 'Preparatory Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Second Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'second term' AND class = 'Preparatory Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Second Term collapse -->

<!-- Third Term collapse -->
        <div class="collapse" id="prep-third-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'third term' AND class = 'Preparatory Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Third Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'third term' AND class = 'Preparatory Class'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 

<!-- /Third Term collapse -->

                <!-- /prepartory collapse -->

                <!-- reception collapse -->
        <div class="collapse" id="reception">
 <label class="move">Reception Class</label>

            <div class="btn-group move-down" role= "group" >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#recep-first-term" aria-expanded="false" aria-controls="collapseExample">
    First Term
  </button > 
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#recep-second-term" aria-expanded="false">
    Second Term
  </button >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#recep-third-term" aria-expanded="false" aria-controls="collapseExample">
    Third Term
  </button >
  
</div>
</div>
<!-- First Term collapse -->
        <div class="collapse" id="recep-first-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'first term' AND class = 'Nursery 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>First Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'first term' AND class = 'Nursery 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /First Term collapse -->

                <!-- Second Term collapse -->
        <div class="collapse" id="recep-second-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'second term' AND class = 'Nursery 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Second Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'second term' AND class = 'Nursery 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Second Term collapse -->

<!-- Third Term collapse -->
        <div class="collapse" id="recep-third-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'third term' AND class = 'Nursery 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Third Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'third term' AND class = 'Nursery 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 

<!-- /Third Term collapse -->
                <!-- /Nursery 1 -->
                 <!-- Foundation collapse -->
         <div class="collapse" id="foundation">
 <label class="move">Foundation Class</label>

            <div class="btn-group move-down" role= "group" >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#found-first-term" aria-expanded="false" aria-controls="collapseExample">
    First Term
  </button > 
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#found-second-term" aria-expanded="false">
    Second Term
  </button >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#found-third-term" aria-expanded="false" aria-controls="collapseExample">
    Third Term
  </button >
  
</div>
</div>
<!-- First Term collapse -->
        <div class="collapse" id="found-first-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'first term' AND class = 'Nursery 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>First Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'first term' AND class = 'Nursery 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /First Term collapse -->

                <!-- Second Term collapse -->
        <div class="collapse" id="found-second-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'second term' AND class = 'Nursery 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Second Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'second term' AND class = 'Nursery 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Second Term collapse -->

<!-- Third Term collapse -->
        <div class="collapse" id="found-third-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'third term' AND class = 'Nursery 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Third Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'third term' AND class = 'Nursery 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 

<!-- /Third Term collapse -->
               
                <!-- /Nursery 2 --> 

                 <!-- Grade 1 collapse -->
       <div class="collapse" id="gradeone">
 <label class="move">Grade One</label>

            <div class="btn-group move-down" role= "group" >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad1-first-term" aria-expanded="false" aria-controls="collapseExample">
    First Term
  </button > 
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad1-second-term" aria-expanded="false">
    Second Term
  </button >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad1-third-term" aria-expanded="false" aria-controls="collapseExample">
    Third Term
  </button >
  
</div>
</div>
<!-- First Term collapse -->
        <div class="collapse" id="grad1-first-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'first term' AND class = 'Grade 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>First Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'first term' AND class = 'Grade 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /First Term collapse -->

                <!-- Second Term collapse -->
        <div class="collapse" id="grad1-second-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'second term' AND class = 'Grade 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Second Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'second term' AND class = 'Grade 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Second Term collapse -->

<!-- Third Term collapse -->
        <div class="collapse" id="grad1-third-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'third term' AND class = 'Grade 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Third Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'third term' AND class = 'Grade 1'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 

<!-- /Third Term collapse -->
               
                <!-- /Grade 1 --> 

                 <!-- Grade 2 collapse -->
         <div class="collapse" id="gradetwo">
 <label class="move">Grade Two</label>

            <div class="btn-group move-down" role= "group" >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad2-first-term" aria-expanded="false" aria-controls="collapseExample">
    First Term
  </button > 
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad2-second-term" aria-expanded="false">
    Second Term
  </button >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad2-third-term" aria-expanded="false" aria-controls="collapseExample">
    Third Term
  </button >
  
</div>
</div>
<!-- First Term collapse -->
        <div class="collapse" id="grad2-first-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'first term' AND class = 'Grade 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>First Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'first term' AND class = 'Grade 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /First Term collapse -->

                <!-- Second Term collapse -->
        <div class="collapse" id="grad2-second-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'second term' AND class = 'Grade 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Second Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'second term' AND class = 'Grade 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Second Term collapse -->

<!-- Third Term collapse -->
        <div class="collapse" id="grad2-third-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'third term' AND class = 'Grade 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Third Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'third term' AND class = 'Grade 2'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 

<!-- /Third Term collapse -->
                <!-- /Grade 2 --> 

                  <!-- Grade 3 collapse -->
        <div class="collapse" id="gradethree">
 <label class="move">Grade Three</label>

            <div class="btn-group move-down" role= "group" >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad3-first-term" aria-expanded="false" aria-controls="collapseExample">
    First Term
  </button > 
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad3-second-term" aria-expanded="false">
    Second Term
  </button >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad3-third-term" aria-expanded="false" aria-controls="collapseExample">
    Third Term
  </button >
  
</div>
</div>
<!-- First Term collapse -->
        <div class="collapse" id="grad3-first-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'first term' AND class = 'Grade 3'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>First Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'first term' AND class = 'Grade 3'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /First Term collapse -->

                <!-- Second Term collapse -->
        <div class="collapse" id="grad3-second-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'second term' AND class = 'Grade 3'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Second Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'second term' AND class = 'Grade 3'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Second Term collapse -->

<!-- Third Term collapse -->
        <div class="collapse" id="grad3-third-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'third term' AND class = 'Grade 3'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Third Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'third term' AND class = 'Grade 3'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 

<!-- /Third Term collapse -->
                <!-- /Grade 3 --> 

                <!-- Grade 4 collapse -->
         <div class="collapse" id="gradefour">
 <label class="move">Grade Four</label>

            <div class="btn-group move-down" role= "group" >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad4-first-term" aria-expanded="false" aria-controls="collapseExample">
    First Term
  </button > 
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad4-second-term" aria-expanded="false">
    Second Term
  </button >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad4-third-term" aria-expanded="false" aria-controls="collapseExample">
    Third Term
  </button >
  
</div>
</div>
<!-- First Term collapse -->
        <div class="collapse" id="grad4-first-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'first term' AND class = 'Grade 4'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>First Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'first term' AND class = 'Grade 4'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /First Term collapse -->

                <!-- Second Term collapse -->
        <div class="collapse" id="grad4-second-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'second term' AND class = 'Grade 4'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Second Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'second term' AND class = 'Grade 4'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Second Term collapse -->

<!-- Third Term collapse -->
        <div class="collapse" id="grad4-third-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'third term' AND class = 'Grade 4'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Third Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'third term' AND class = 'Grade 4'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 

<!-- /Third Term collapse -->
                <!-- /Grade 4 --> 

                <!-- Grade 5 collapse -->
         <div class="collapse" id="gradefive">
 <label class="move">Grade Five</label>

            <div class="btn-group move-down" role= "group" >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad5-first-term" aria-expanded="false" aria-controls="collapseExample">
    First Term
  </button > 
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad5-second-term" aria-expanded="false">
    Second Term
  </button >
  <button class="btn btn-reform" type="button" data-toggle="collapse" data-target="#grad5-third-term" aria-expanded="false" aria-controls="collapseExample">
    Third Term
  </button >
  
</div>
</div>
<!-- First Term collapse -->
        <div class="collapse" id="grad5-first-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'first term' AND class = 'Grade 5'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>First Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'first term' AND class = 'Grade 5'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /First Term collapse -->

                <!-- Second Term collapse -->
        <div class="collapse" id="grad5-second-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'second term' AND class = 'Grade 5'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Second Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'second term' AND class = 'Grade 5'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Second Term collapse -->

<!-- Third Term collapse -->
        <div class="collapse" id="grad5-third-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'third term' AND class = 'Grade 5'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Third Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'third term' AND class = 'Grade 5'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 

<!-- /Third Term collapse -->
                <!-- /Grade 5 --> 
                <div>&nbsp</div>


    <div class="btns" data-aos="zoom-in" data-aos-duration="3000">
                <div>
                        <h4 class="info-head">View By Term</h4> <br>
                    </div> 
                    <div>
<div class="btn-group" role= "group" >
 
  <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#first-term" aria-expanded="false" aria-controls="collapseExample">
    First Term &nbsp &nbsp &nbsp &nbsp
  </button > 
  <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#second-term" aria-expanded="false">
    Second Term &nbsp &nbsp &nbsp &nbsp
  </button >
  <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#third-term" aria-expanded="false" aria-controls="collapseExample">
    Third Term &nbsp &nbsp &nbsp &nbsp
  </button >
  
</div>
</div>
</div>
<!-- First Term collapse -->
        <div class="collapse" id="first-term">
  <div class="card card-body">
    <div class="table-responsive">
        <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'first term'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>First Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'first term'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /First Term collapse -->

                <!-- Second Term collapse -->
        <div class="collapse" id="second-term">
  <div class="card card-body">
    <div class="table-responsive">
         <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'second term'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
    
        <div class=\"info-head-table\">
        <span>Second Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";

        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'second term'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Second Term collapse --> 
                <!-- Third Term collapse -->
        <div class="collapse" id="third-term">
  <div class="card card-body">
    <div class="table-responsive">
         <?php

     
                                     $select = mysqli_query($link, "SELECT COUNT(pupil_name) from payment WHERE purpose_of_payment = 'third term'");
                                    while ($output = mysqli_fetch_assoc($select)){
                                        $count = $output['COUNT(pupil_name)'];
        echo"
        <div class=\"info-head-table\">
        <span>Third Term</span> <br> <span>Total Number of Pupils: </span>$count  
        </div>";
       
        }
    ?>
        
                            <table class="table project-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1 ">Name</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Admission Number</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Amount Payable</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">First Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Second Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Third Amount Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Date </th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Total Paid</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Balance</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Class</th>
                                        <th scope="col" class="border-top border-bottom titles info-head-table1">Payment Status</th>
                                        
                                    </tr>
                                </thead>
                               
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * from payment WHERE purpose_of_payment = 'third term'");
                                    while ($output = mysqli_fetch_assoc($select)){
         
             
                                         
                                    echo"
                                    <tr class=\"py-2\">
                                        <td scope=\"row\" class=\"border border-right-0 titles\">
                                            {$output['pupil_name']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['admission_no']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_payable']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date2']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['amount_paid3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_date3']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['total_payment']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Balance']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['class']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['payment_status']}</td>
                                       
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- /Third Term collapse -->                       
        </div>

    </div>
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

 
    </script>
     <script>
            AOS.init();

            $(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
          </script>
</body>

</html>
