<?php
session_start();
error_reporting(0);
 require_once "config.php";
 if(isset($_SESSION['username'])){
    // echo ($_SESSION['username']);
    $username = $_SESSION['username'];
    // echo $username; 
    
    $select = mysqli_query($link, "SELECT * from registration WHERE username = '{$username}'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstname = $output['firstname'];
         $surname = $output['surname'];
         $passport = $output['passport'];
         $admissionNum = $output['admission_no'];
         $dob = $output['dob'];
         $gender = $output['gender'];
         $state = $output['state'];
         $class = $output['admitted_class'];
         $presntClass = $output['present_class'];
         $gender = $output['gender'];
         $admissionNumber = $output['admission_no'];
         $regDate = $output['created_on'];
         $contact_address = $output['contact_address'];
         $sfather_name = $output['F_surname'];
         $lfather_name = $output['F_othernames'];
         $father_email = $output['F_email'];
         $father_phone = $output['F_phone_number'];
         $mother_phone = $output['M_phone_number'];
         $father_home = $output['F_home_address'];
         $father_occupation = $output['F_occupation'];
         $smother_name = $output['M_surname'];
         $lmother_name = $output['M_othernames'];

       
    }
    $select = mysqli_query($link, "SELECT * from payment WHERE admission_no = '{$admissionNum}'");
    while ($output = mysqli_fetch_assoc($select)){
         $amountPayable = $output['amount_payable'];
     }
    $select = mysqli_query($link, "SELECT * from postings");
    while ($output = mysqli_fetch_assoc($select)){
         $generalHead = $output['General-Notice-Heading'];
         $generalPostings = $output['General-Notice'];
         $generalDate = $output['Date'];
         $generalTime = $output['Time'];
         $islamiyyahHead = $output['Islamiyyah-Notice-Head'];
         $islamiyyahPostings = $output['Islamiyyah-Notice'];
         $islamiyyahDate = $output['Is-Date'];
         $islamiyyahTime = $output['Is-Time'];

     }
    

 }
 // echo ($_SESSION['name']);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Al Aflaz Kiddies</title>
        <link rel="shortcut icon" href="../images/logo.jpg">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" media="print" href="print.css" />
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
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
        <!-- Add animations -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- <link rel="shortcut icon"
        href="https://res.cloudinary.com/ddu0ww15f/image/upload/c_scale,h_16/v1571841777/icons8-home-office-24_veiqea.png"
        type="image/x-icon"> -->
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Add animations -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- end add animations -->
    <!-- Our Custom CSS -->
    <!-- <link rel="stylesheet" href="style/project.css"> -->
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
            background-color: var(--primary-color) !important;
        }

        .btn-secondary {
            background-color: var(--secondary-color) !important;
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
        .hl-nb{
            border-bottom: 1px solid;
            border-color:  #c9c9c7;
            width: 420px;
            margin-top: .5em;
            margin-left: 0em !important;
            overflow: 
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
            ;
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
       /* .container-fluid{
            padding-top: 4em;
        }*/

        .container-fluid .mydrop-down {
            width: 300px;
        }
        i.fas{
            size: 50px;
            color: green;
        }
        .name{
            text-transform: capitalize;
        }
        #table-info{
            margin-left: 5em;
            
        }
        .table-striped  #table-info{
            font-weight: bold;
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
                margin-left: -400px;
                width: 100px;
                padding-left: -200px;
            }

            .container-fluid .mydrop-down {
                width: 10%;
            }

            .container-fluid {
                margin-left: -30px;

            }
            .nb{
                /*margin-left: 30px;*/
                /*border-style: solid;
                width: 600px;
                justify-content: center;
                margin-right: 0em;
                padding-left: 0em;
                padding-right: 0em;
                display: block;*/
            }
            .nb-side{
            margin-left: 2em;

            }

        }

        @media (max-width: 1024px) {

            .nb-side{
            margin-left: 1em;
        }
            .nb{
                display: inline-block;
            }
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
            .container-fluid{
                display: flex;
                flex-wrap: wrap;
            }
        }




        /* ---------------------------------------------------
            Table
        ----------------------------------------------------- */
        table td tbody{
            font-size: 10px;
            
            /*display: block;*/
        }
        .titles{
            font-family: cursive;
        }

        /*table.project-table {
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
*/
        .dropleft .dropdown-toggle::before {
            display: none;
        }
       
        /*------------floating button---------*/
        #add-something {
            position: fixed;
            bottom: 20px;
            left: 320px;
            z-index: 12;
            display: none;
        }
        /*+++++++++++++flip image+++++++++++++++*/
        .card-container {
            perspective: 600;
            position: relative;
            width: 70em;
            height: 50em;
            margin-left: 1em;
            margin-top: 1em;
        }
        .card {
            height: 100%;
            position: absolute;
            transform-style: preserve-3d;
            transition: all 1s ease-in-out;
            width: 38em;
            /*border: 1px solid black;*/
            padding-top: 1em;
            padding-left: 1em;

        }
        .card:hover {
            transform: rotateY(180deg);
        }
        .card .side {
            backface-visibility: hidden;
            height: 100%;
            position: absolute;
            width: 100%;
    
        }
        .card .back {
            transform: rotateY(180deg);
        }
        .back{
            background-color: white;
        }
        .info{
            font-family: cursive;
            margin-left: .5em;
            color: red;
            font-weight: bold;
            text-shadow: 2px 2px 2px #b3babd;
            font-size: 1.5em;
            text-align: center;
            margin-bottom: 0;
            padding-bottom: 0;

        }
        .info-back{
           font-family: serif;
           margin-left: .3em;
           color: #08cf0f;
           font-weight: bold;
           text-shadow: 2px 2px 2px black;
           font-size: 1.8em;
           text-align: center;
           margin-bottom: 0;
        }
        .info-begin{
            display: flex;
            min-width: 250px;
            height: 6em;
            transform-style: preserve-3d;
            transition: all 1s ease-in-out;
            margin: 2px 1rem 2px 3px;
            padding-top: 2rem;
            padding-left: 1rem;
            position: relative;
            color: white;
            font-size: 1em;

        }
        .info-begin:hover{
            transform: rotateZ(10deg);
        }
        .info-begin-x{
            margin-left: .5rem;
            margin-top: 2.5em;

        }
        .nb-all{
            /*pad-left: .5rem;*/
        }
        .vl{
            border-left: 1px solid white;
            height: 35px;
            margin-left: 1em;
        }
       
        #up-down{
            display: flex;
            flex-flow: column;
            align-items: center;
            margin-right: 0.5em;
            color: white;
            font-size: 16px;
            font-family: serif;

        }
        #up-down > span{
            color: white;
        }
        .a-rel{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
             flex:1 1 auto;
        }
        .num{
            margin-left: 2em;
            font-size: 18px;
            font-family: serif;
        }
        .top-1{
            background-color: #19cf1c;
        }
        .top-2{
            background-color: #ff1814;
        }
        .top-3{
            background-color: #47a0ed;
        }
        .top-4{
            background-color: #f2ef16;
        }
        body{
            overflow: hidden;
            background-color: #d9dedb;
        }
        .row-new{
            display: flex;
            flex-direction: row;
            position: absolute;
            margin-top: 3em;
            
        }
        .col-new1{
           margin-left: 5em;
           width: 150px; 
           font-family: sans-serif;
        }
        .col-new2{
           margin-left: 3em; 
           font-family: sans-serif;
           font-weight: bold;

        }
        .head{
            font-family: sans-serif;
           font-weight: bold;
           text-transform: capitalize;
        }
        .nb-side{
            /*margin-right: 3em;*/
            margin-top: 1em;
            background-color: white;
            width: 450px;
            height: 310px;
            overflow: auto;
        }
        .not-tab{
            max-width: 50px;
            /*color: #47a0ed;*/
           
        }
         .hl{
            border-bottom: 1px solid;
            border-color:  #c9c9c7;
            width: 38em;
            margin-top: .5em;
            margin-left: -1em !important;
          }
        .hl-nb{
            border-bottom: 1px solid;
            border-color:  #c9c9c7;
            width: 450px;
            margin-top: .5em;
            margin-left: 0em !important;
             /*overflow-y: scroll;*/
        }
        .head-nb{
             font-family: sans-serif;
           font-weight: bold;
           text-transform: capitalize;
           padding-top: 1em;
           padding-left: 1em;
           color: #19cf1c;
        }
       
         #print-content img{
         	margin-right: 50px;
         }
         @media print {
         	.back,.info-begin-x,.nb {
         		display: none;
         	}
         	.card-container {
         		/*height: 60.7em;*/
         		width: 60em;
         		/*background-color: white;*/
    			margin: 5em 5em 5em 5em;
    			
					}
         	
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
                <li class="active">
                    <a href="#">
                        <i class="fas fa-home"></i>
                        <!-- <img src="https://lancer-app.000webhostapp.com/images/svg/home.svg" height="20" width="auto" style="color: #000"> -->
                        <span> Dashboard</span></a>
                </li>
               <!--  <li>
                    <a href="basicinfo.php">
                        <i class="fas fa-user"></i> <span> Basic Info</span>
                    </a>
                </li>
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">

                            <i class="fas fa-user-friends"></i><span> Parent's Info</span></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="fatherinfo.php" class="pl-4">Father's Details</a>
                        </li>
                        <li>
                            <a href="motherinfo.php" class="pl-4">Mother's Details</a>
                        </li>
                        

                    </ul>s
                </li> -->
                <li>
                    <a href="payment.php">
                       <i class="fas fa-money-check"></i> <span> Payments</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fas fa-calendar"></i><span> Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-chalkboard-teacher"></i> <span> Results</span>
                    </a>
                </li>
                <li>
                	<!-- <a href="" onclick="printDiv('print-content')" >
                		<i class="fas fa-print"></i><span> Print Form</span> 
                	</a> -->
                	<a href="" onclick="window.print()" >
                		<i class="fas fa-print"></i><span> Print Form</span> 
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
                        <tr id="thead">
                        <!-- th scope="col" id="thead"> Welcome...</th>
                        <th scope="col" class="name"><?php echo $firstname;  ?></th>
                        <th scope="col" class="name"><?php  echo $surname; ?></th> -->
                        <!-- <th scope="col"> </span></th> -->
                        </tr>
                        </thead>
                        </table>
                        
                    </div>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                           
                            <?php
                        $result = mysqli_query($link, "SELECT * from registration WHERE username = '{$username}'");
    while ($row = mysqli_fetch_assoc($result)){
           
          echo "<img class=\"pass\" height='100px' width='100px'  src='uploads/".$row['passport']."' />";
          // echo "$link->error";

    }
    ?>
</ul>
</div>
                   
                </div>
            </nav>

            <section class="container-fluid">
                <div class="row info-begin-x">
                    <div class="col-sm-2 info-begin top-1">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-edit"></i> 
                        <span> Upcoming Exam</span></div>
                        <div class="vl"></div>
                        <div class="num">04</div>
                    </a>
                </div>
                    <div class="col-sm-2 info-begin top-2">
                         <a href="payment.php" class="a-rel">
                        <div id="up-down"><i class="fas fa-money-bill-alt"></i> 
                        <span> Due Fees</span></div>
                        <div class="vl"></div>
                        <div class="num">&#8358;<?php echo number_format($amountPayable); ?></div>
                    </a>
                    </div>
                    <div class="col-sm-2 info-begin top-3">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-calendar-alt"></i>
                        <span>Events</span></div>
                        <div class="vl"></div>
                        <div class="num">04</div>
                    </a>
                    </div>
                    <div class="col-sm-2 info-begin top-4">
                        <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-folder-open"></i> 
                        <span>Documents</span></div>
                        <div class="vl"></div>
                        <div class="num">02</div>
                    </a>
                    </div>
                    
                </div>

                <div class="row nb-all">
                    
                <div class="col-sm-7 card-container">
                    
                    <div class="card">
                    	
                        <div class="head"> My Information</div>
                        <div class="hl"></div>
                        <div class="row-new">
                        <div class="side col-new" data-aos = "zoom-out" data-aos-duration="3000">
                            
                            <?php
                        $result = mysqli_query($link, "SELECT * from registration WHERE username = '{$username}'");
                        while ($row = mysqli_fetch_assoc($result)){
                        echo "<img class=\"pass1\" height='70px' width='70px'src='uploads/".$row['passport']."' />";

                     }
                    ?> 
                           
                        </div>

                        <table class="table table-striped" id="table-info">
                      <thead>
                        <tr>
                          <th scope="col">Admission Number:</th>
                          <th><?php echo $admissionNum;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Name:</th>
                          <th><?php echo $firstname; echo" "; echo $surname;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Gender:</th>
                           <th><?php echo $gender;?></th>                          
                          </tr>
                          <tr>
                          <th scope="col">Father's Name:</th>
                          <th><?php echo $lfather_name; echo" "; echo $sfather_name;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Mother's Name:</th>
                          <th><?php echo $lmother_name; echo" "; echo $smother_name;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Date of Birth:</th>
                          <th><?php echo $dob;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Father's Occupation:</th>
                           <th><?php echo $father_occupation;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Email:</th>
                           <th><?php echo $father_email;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Admission Date:</th>
                          <th><?php echo $regDate;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Admitted Class:</th>
                          <th><?php echo $class;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Present Class:</th>
                          <th><?php echo $presntClass;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Home Address:</th>
                          <th><?php echo $contact_address;?></th>
                          </tr>
                          <tr>
                          <th scope="col">Phone:</th>
                          <th><?php echo  $father_phone;?>, <?php echo  $mother_phone;?></th>
                        </tr>
                      </thead>
                      <tbody>
                     
                    </table>
                        
                        </div>
                        

                        <!-- <img src="../images/dashboard.svg"> -->
                    <div class="side back"><label class="info-back">You need help? Feel free to contact admin on<span class="info"> 08023455678</span></label></div>
                    </div>
                </div>
                <div class="col-sm-4 nb">
                  
                       <div class="nb-side">
                            <div class="head-nb">Notice Board</div>
                           <div class="hl-nb" style="height:185px; overflow:auto;">
                               <table class="table project-table table-borderless">
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * FROM postings WHERE `Is-Time` = 0 ORDER BY `s/n`  DESC");
                                    while ($output = mysqli_fetch_assoc($select)){
                                                 
                                    echo"
                                    <tr class=\"py-2 not-tab\">
                                    
                                        <td scope=\"col\" class=\"titles border border-right-0\">
                                            {$output['Date']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['General-Notice-Heading']}</td>
                                        <td name =\"General-Notice\"  class=\"border-top border-bottom titles\">{$output['General-Notice']} </td>

                                        <td class=\"border-top border-bottom titles\"><a  data-toggle=\"modal\" </td>
                                        
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                            </div>
                        </div> 
                      <div class="nb-side">
                            <div class="head-nb">Islamiyyah Information</div>
                            <div class="hl-nb" style="height:185px; overflow: auto;">
                                 <table class="table project-table table-borderless">
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * FROM postings WHERE `Time` = 0 ORDER BY `s/n`  DESC");
                                    while ($output = mysqli_fetch_assoc($select)){
                                   
                                    echo"
                                    <tr class=\"py-2 not-tab\">
                                        <td scope=\"col\" class=\"titles border border-right-0\">
                                            {$output['Is-Date']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['Islamiyyah-Notice-Head']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Islamiyyah-Notice']} </td>       
                                    </tr>";
                                    
                                    }
                                ?>
                            </table>
                            </div>
                        </div> 
                    
                </div>
                

                </div>
            </section>
        </div>

    </div>
    <button class="btn btn-secondary text-white rounded-circle" id="add-something">
        <i class="fas fa-plus"></i>
    </button>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
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


        function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
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
