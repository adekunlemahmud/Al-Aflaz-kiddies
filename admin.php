<?php
session_start();
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
         
          
    }

//     if (isset($_GET['General-Notice'])) {
//     $id = mysql_real_escape_string($_GET['General-Notice']);
//     $sql_delete = "DELETE FROM postings WHERE id = '{$id}'";
//     mysql_query($sql_delete) or die(mysql_error());

//     header("location: admin.php");
//     exit();

// }

if(isset($_POST['deletedata'])){
    $userID = $_POST['delete-id'];
    if(!empty($_POST['delete-id'])){
        $delete = mysqli_query($link,"DELETE FROM postings WHERE `s/n` ='$userID'");
    }
    // if($delete){
    //     echo "Record deleted successfully";
    // }else{
    //     echo "Sorry, record could not be deleted";
    // }
}


    // query for total number of pupils
$query = "SELECT COUNT(username) FROM registration"; 
     
$result = mysqli_query($link, $query);

// Print out result
while($row = mysqli_fetch_array($result)){
    $totalPupils = $row['COUNT(username)'];
    
}

// function for counting 
    
    function counting($t,$y){
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
       $query = "SELECT COUNT(username) FROM registration WHERE $t = '$y'"; 
     
$result = mysqli_query($link, $query);

// Print out result
while($row = mysqli_fetch_array($result)){
    $count = $row['COUNT(username)'];
    echo $count;
} 

    }

    // counting('gender','male');
    
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

        .container{
            font-family: cursive;
            margin-top: 2em;
            
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

        .reform{
            /*border-radius:  5% 0% 5% 0%;*/
            border-color: red;
            background-size: 2em;
            display: inline-block;
            height: 2.5em;
            width: 16em;
            padding-left: 1.5em;
            padding-right: 1.5em;
            padding-top: .3em;
            color: #fff;
            margin-left: 10em;
            box-shadow: 3px 3px 4px rgba(1, 1, 1, 1);
        }
        .reform-no{
            /*border-radius:  5% 0% 5% 0%;*/
            border-color: red;
            background-size: 2em;
            display: inline-block;
            height: 2.5em;
            width: 6em;
            padding-left: 1.5em;
            padding-right: 1.5em;
            padding-top: .3em;
            color: #fff;
            margin-left: 10em;
            box-shadow: 3px 3px 4px rgba(1, 1, 1, 1);
           
        }
         .relp{
            font-weight: bold;
            font-size: 16px !important;
            font-family: sans-serif;
            color: #ca0bd4;
        }
        .pop{
            margin-right: 2em;
            margin-top: 2em;
            color: #ca0bd4;
        }
        .p-pop{
            background-color: #0bd4bd;
        }
        .c-pop{
            background-color: #99bbff;
        }
        .c-pop-sm{
            background-color: #ffb217;
        }
        .c-pop-md{
            background-color: #09ede6;
        }
         .c-pop-bg{
            background-color: #1c6bd9;
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

        .container-fluid .mydrop-down {
            width: 300px;
        }
        i.fas{
            size: 50px;
            color: green;
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

             .nb{
                
                margin-left: 2em;
                padding-left: 16em;
                display: block;

            }


        }


             @media (max-width: 1130px){
                
             .nb{
                
                margin-left: 20em;
                display: block;
         

            }
            .bd{
                margin-left: -20px;
                width: 860px;
           
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

            .nb{
                
                margin-left: 2em;
                padding-left: 16em;
                display: block;

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
        table td tbody{
            font-size: 10px;
            /*display: block;*/
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
        }*/

        /*table.project-table tbody tr td,
        table.project-table thead tr th {
            max-width: 200px;

            text-overflow: ellipsis;
            white-space: nowrap;
        }
*/
        .dropleft .dropdown-toggle::before {
            display: none;
        }
        .not-tab{
            max-width: 50px;
        }

        /*------------floating button---------*/
        #add-something {
            position: fixed;
            bottom: 20px;
            left: 320px;
            z-index: 12;
        }

        /*+++++++++++++++boxes++++++++++++++++++++++++++*/
        .container{
            margin-top: .5em;
            margin-right: .5em;
            padding-left: .5em;
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
            min-width: 210px;
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
        .info-begin-xl{
             margin-left: 0rem;
            margin-top: 2.5em;

        }
        .info-begin:hover{
            transform: rotateZ(10deg);
        }
        .info-begin-x{
            margin-left: .5rem;
            margin-top: 2.5em;

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
        .num1{
            margin-left: 1em;
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
            background-color: #ff1814;
        }
        .top-5{
             background-color: #19cf1c;
        }
        .top-6{
             background-color: #47a0ed;
        }
        
        body{
            overflow: hidden;
            background-color: #d9dedb;
        }
        .modal-backdrop {
            z-index: -1;
        }
        .nb-side{
            margin-left: -16em;
            margin-top: 2.5em;
            background-color: white;
            width: 420px;
            height: 235px;
        }
        .nb-side1{
            margin-left: -16em;
            margin-top: 3em;
            background-color: white;
            width: 420px;
            height: 235px;
        }
        .nb-side-2{
            margin-left: 6em;
            margin-top: 3em;

        }


         .hl{
            border-bottom: 1px solid;
            border-color:  #c9c9c7;
            width: 420px;
            margin-top: .5em;
            margin-left: -1em !important;
          }
        .hl-nb{
            border-bottom: 1px solid;
            border-color:  #c9c9c7;
            width: 420px;
            margin-top: .5em;
            margin-left: 0em !important;
            overflow: 
        }
        .head-nb{
             font-family: sans-serif;
           font-weight: bold;
           text-transform: capitalize;
           padding-top: 1em;
           padding-left: 1em;
        }
        .btn-d{
            /*width: 5em;*/
            /*height: 35px;*/
            /*margin-top: 1em;*/
        }
        .btn-1{
           margin-left: 2em;
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
               <a href="index.html"><img src="https://res.cloudinary.com/dwszstiol/image/upload/v1587652605/al-aflaz/logo1_mt1hbx.svg" alt="logo" class="img img-responsive" height="100" width="100"></a>
                
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">
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
                        <div class="wel" data-aos = "zoom-in" data-aos-duration="3000">
                        <table class="table table-borderless">
                        <thead>
                        <th scope="col" id="thead" class="relp"> Welcome Admin...</th>
                        
                        </thead>
                        </table>           
                </div>
            </nav>
            <div class="container" data-aos = "zoom-in" data-aos-duration="3000">
                <div class="row bd">
                    <div class="col-sm-10">
                <div class="row info-begin-x begin-x-1">
                    <div class="col-sm-2 info-begin top-1">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i> 
                        <span>Total Population</span></div>
                        <div class="vl"></div>
                        <div class="num1"><?php echo ($totalPupils -1);  ?></div>
                    </a>
                </div>
                    <div class="col-sm-2 info-begin top-2">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i> 
                        <span>Total Male</span></div>
                        <div class="vl"></div>
                        <!-- <div class="num">&#8358;<?php echo number_format($amountPayable);  ?></div> -->
                        <div class="num"><?php echo counting('gender','male');  ?> </div>

                    </a>
                    </div>
                    <div class="col-sm-2 info-begin top-3">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i>
                        <span>Total Female</span></div>
                        <div class="vl"></div>
                        <div class="num"><?php echo counting('gender','female');  ?></div>
                    </a>
                    </div>
                    
                </div>

                 <div class="row info-begin-x">
                    <div class="col-sm-2 info-begin top-4">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i> 
                        <span>Play Class</span></div>
                        <div class="vl"></div>
                        <div class="num"><?php echo counting('present_class','Play Class');  ?></div>
                    </a>
                </div>
                    <div class="col-sm-2 info-begin top-4">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i> 
                        <span>Preparatory</span></div>
                        <div class="vl"></div>
                        <!-- <div class="num">&#8358;<?php echo number_format($amountPayable);  ?></div> -->
                        <div class="num"><?php echo counting('present_class','Preparatory Class');  ?>  </div>

                    </a>
                    </div>
                    <div class="col-sm-2 info-begin top-4">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i> 
                        <span>Nursery One</span></div>
                        <div class="vl"></div>
                        <div class="num"><?php echo counting('present_class','Nursery 1');  ?></div>
                    </a>
                    </div>
                    
                </div>

                 <div class="row info-begin-x">
                    <div class="col-sm-2 info-begin top-5">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i> 
                        <span>Nursery Two</span></div>
                        <div class="vl"></div>
                        <div class="num"><?php echo counting('present_class','Nursery 2');  ?></div>
                    </a>
                </div>
                    <div class="col-sm-2 info-begin top-5">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i> 
                        <span>Grade One</span></div>
                        <div class="vl"></div>
                        <!-- <div class="num">&#8358;<?php echo number_format($amountPayable);  ?></div> -->
                        <div class="num"><?php echo counting('present_class','Grade 1');  ?>  </div>

                    </a>
                    </div>
                    <div class="col-sm-2 info-begin top-5">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i> 
                        <span>Grade Two</span></div>
                        <div class="vl"></div>
                        <div class="num"><?php echo counting('present_class','Grade 2');  ?></div>
                    </a>
                    </div>

                     <div class="row info-begin-xl">
                    <div class="col-sm-2 info-begin top-6">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i>  
                        <span>Grade Three</span></div>
                        <div class="vl"></div>
                        <div class="num"><?php echo counting('present_class','Grade 3');  ?></div>
                    </a>
                </div>
                    <div class="col-sm-2 info-begin top-6">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i>  
                        <span>Grade Four</span></div>
                        <div class="vl"></div>
                        <!-- <div class="num">&#8358;<?php echo number_format($amountPayable);  ?></div> -->
                        <div class="num"><?php echo counting('present_class','Grade 4');  ?>  </div>

                    </a>
                    </div>
                    <div class="col-sm-2 info-begin top-6">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i> 
                        <span>Grade Five</span></div>
                        <div class="vl"></div>
                        <div class="num"><?php echo counting('present_class','Grade 5');  ?></div>
                    </a>
                    </div>
                    
                </div>
                <div class="row info-begin-xl">
                    <div class="col-sm-2 info-begin top-1">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i>  
                        <span>Total Teachers</span></div>
                        <div class="vl"></div>
                        <div class="num">0</div>
                    </a>
                </div>
                    <div class="col-sm-2 info-begin top-2">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i>  
                        <span>Male Teachers</span></div>
                        <div class="vl"></div>
                        <div class="num">0</div>

                    </a>
                    </div>
                    <div class="col-sm-2 info-begin top-3">
                         <a href="#" class="a-rel">
                        <div id="up-down"><i class="fas fa-users"></i> 
                        <span>Female Teachers</span></div>
                        <div class="vl"></div>
                        <div class="num">0</div>
                    </a>
                    </div>
                    
                </div>

            </div>
        </div>
         <div class="col-sm-2 nb">
                     <div class="nb-side">
                            <div class="head-nb">Notice Board</div>
                            <div class="hl-nb" style="height:185px; overflow:auto;">
                                
                                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
                                         <table class="table project-table table-borderless">
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * FROM postings WHERE `Is-Time` = 0 ORDER BY `s/n`  DESC");
                                    while ($output = mysqli_fetch_assoc($select)){
                                                 
                                    echo"
                                    <tr class=\"py-2 not-tab\">
                                    
                                        <td scope=\"col\" class=\"border border-right-0\">
                                            {$output['Date']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['General-Notice-Heading']}</td>
                                        <td name =\"General-Notice\"  class=\"border-top border-bottom titles\">{$output['General-Notice']} </td>

                                        <td class=\"border-top border-bottom titles\"><a  data-toggle=\"modal\" data-target=\"#modalConfirmDelete\"><i class=\"fas fa-trash\"></i></a></td>
                                        
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            
                            <!-- Button trigger modal-->

<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">DELETE</p>
      </div>
     
      <!--Body-->
      <div class="modal-body">
        <i class="fas fa-times fa-4x animated rotateIn"></i>
        <label>Are you sure you want to delete this post </label>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <input  type="submit" name="deletedata" class="btn  btn-outline-danger" value="Yes">
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
      </div>
      
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->
</table>
</form>

</div>
</div> 
                      <div class="nb-side1">
                            <div class="head-nb">Islamiyyah Information</div>
                             <div class="hl-nb" style="height:185px; overflow:auto; ">
                                 <table class="table project-table table-borderless">
                            
                            <?php
                                     $select = mysqli_query($link, "SELECT * FROM postings WHERE `Time` = 0 ORDER BY `s/n`  DESC");
                                    while ($output = mysqli_fetch_assoc($select)){
                                   
                                    echo"
                                    <tr class=\"py-2 not-tab\">
                                        <td scope=\"col\" class=\"border border-right-0\">
                                            {$output['Is-Date']}
                                        </td>
                                        <td class=\"border-top border-bottom titles\">{$output['Islamiyyah-Notice-Head']}</td>
                                        <td class=\"border-top border-bottom titles\">{$output['Islamiyyah-Notice']} <i class=\"fas fa-trash delete-btn\"></i></td>

                                        
                                    </tr>";
                                    
                                    }
                             
                            
                                ?>
                            </table>
                            </div>
                            
     <div class="nb-side-2">
                        <div class="btn-d"><a href="createnotice.php"><button class="btn btn-secondary">Create Message</button></a></div>
                        <!-- <div class="btn-d"><a href=""><button class="btn btn-secondary btn-1">Create Islamiyyah</button></a></div>  -->
                        </div>                        


                            
                       

                    </div>
                </div>
        </div>
          
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
        
 

        // $(document).ready(function(){
        //     $('.delete-btn').on('click', function(){

        //         $('#modalConfirmDelete').modal('show');

        //         $tr = $(this).closest('tr');

        //         var data = $tr.children("td").map(function(){
        //             return $(this).text();
        //         }).get();
        //         console.log(data);
        //          console.log(5);
        //          $('#delete-id').val(data[0]);
        //      });
           
        // });
   </script>
    <script>
            AOS.init();

            $(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
          </script>
</body>

</html>
