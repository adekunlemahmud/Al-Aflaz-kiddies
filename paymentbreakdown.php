<?php
session_start();
 require_once "config.php";
 if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
 // this add up all amount to be paid for first term
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'First Term'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstAmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for second term
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Second Term'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondAmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for third term
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Third Term'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdAmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount paid for first term
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'First Term'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstTotalPayment = $output['sum(total_payment)'];
 }
// this add up all amount paid for second term
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Second Term'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondTotalPayment = $output['sum(total_payment)'];
 }
  // this add up all amount paid for third term
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Third Term'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdTotalPayment = $output['sum(total_payment)'];
 }



 //Amount payable of classes for first term
 // this add up all amount to be paid for first term by play class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Play Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstPlayAmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for first term by prep class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Preparatory Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstPrepAmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for first term by nur1 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Nursery 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstNur1AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for first term by nur2 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Nursery 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstNur2AmountPayable = $output['sum(amount_payable)'];
 }
  // this add up all amount to be paid for first term by grad 1 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Grade 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstGrad1AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for first term by grad 2 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Grade 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstGrad2AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for first term by grad 3 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Grade 3'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstGrad3AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for first term by grad 4 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Grade 4'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstGrad4AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for first term by grad 5 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Grade 5'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstGrad5AmountPayable = $output['sum(amount_payable)'];
 }

//Amount payable of classes for second term
 // this add up all amount to be paid for Second Term by play class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Play Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondPlayAmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Second Term by prep class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Preparatory Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondPrepAmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Second Term by nur1 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Nursery 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondNur1AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Second Term by nur2 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Nursery 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondNur2AmountPayable = $output['sum(amount_payable)'];
 }
  // this add up all amount to be paid for Second Term by grad 1 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Grade 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondGrad1AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Second Term by grad 2 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Grade 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondGrad2AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Second Term by grad 3 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Grade 3'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondGrad3AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Second Term by grad 4 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Grade 4'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondGrad4AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Second Term by grad 5 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Grade 5'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondGrad5AmountPayable = $output['sum(amount_payable)'];
 }

 //Amount payable of classes for Third term
 // this add up all amount to be paid for Second Term by play class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Play Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdPlayAmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Third Term by prep class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Preparatory Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdPrepAmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Third Term by nur1 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Nursery 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdNur1AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Third Term by nur2 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Nursery 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdNur2AmountPayable = $output['sum(amount_payable)'];
 }
  // this add up all amount to be paid for Third Term by grad 1 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Grade 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdGrad1AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Third Term by grad 2 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Grade 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdGrad2AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Third Term by grad 3 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Grade 3'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdGrad3AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Third Term by grad 4 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Grade 4'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdGrad4AmountPayable = $output['sum(amount_payable)'];
 }
 // this add up all amount to be paid for Third Term by grad 5 class
    $select = mysqli_query($link, "SELECT sum(amount_payable) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Grade 5'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdGrad5AmountPayable = $output['sum(amount_payable)'];
 }

//Total payment of classes for First term

    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Play Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstPlayTotalPayment = $output['sum(total_payment)'];
 }

   $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Preparatory Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstPrepTotalPayment = $output['sum(total_payment)'];
 }

    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Nursery 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstNur1TotalPayment = $output['sum(total_payment)'];
 }
 // this add up all amount to be paid for first term by nur2 class
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Nursery 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstNur2TotalPayment = $output['sum(total_payment)'];
 }
  // this add up all amount to be paid for first term by grad 1 class
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Grade 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstGrad1TotalPayment = $output['sum(total_payment)'];
 }
 // this add up all amount to be paid for first term by grad 2 class
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Grade 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstGrad2TotalPayment = $output['sum(total_payment)'];
 }
 // this add up all amount to be paid for first term by grad 3 class
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Grade 3'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstGrad3TotalPayment = $output['sum(total_payment)'];
 }
 // this add up all amount to be paid for first term by grad 4 class
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Grade 4'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstGrad4TotalPayment = $output['sum(total_payment)'];
 }
 // this add up all amount to be paid for first term by grad 5 class
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'First Term' AND class = 'Grade 5'");
    while ($output = mysqli_fetch_assoc($select)){
         $firstGrad5TotalPayment = $output['sum(total_payment)'];
 }

//Total payment of classes for Second term
 
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Play Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondPlayTotalPayment = $output['sum(total_payment)'];
 }

     $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Preparatory Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondPrepTotalPayment = $output['sum(total_payment)'];
 }

    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Nursery 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondNur1TotalPayment = $output['sum(total_payment)'];
 }
 
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Nursery 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondNur2TotalPayment = $output['sum(total_payment)'];
 }
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Grade 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondGrad1TotalPayment = $output['sum(total_payment)'];
 }

    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Grade 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondGrad2TotalPayment = $output['sum(total_payment)'];
 }
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Grade 3'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondGrad3TotalPayment = $output['sum(total_payment)'];
 }

    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Grade 4'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondGrad4TotalPayment = $output['sum(total_payment)'];
 }

    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Second Term' AND class = 'Grade 5'");
    while ($output = mysqli_fetch_assoc($select)){
         $secondGrad5TotalPayment = $output['sum(total_payment)'];
 }

 //Total payment of classes for Third term
 
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Play Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdPlayTotalPayment = $output['sum(total_payment)'];
 }

     $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Preparatory Class'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdPrepTotalPayment = $output['sum(total_payment)'];
 }

    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Nursery 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdNur1TotalPayment = $output['sum(total_payment)'];
 }
 
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Nursery 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdNur2TotalPayment = $output['sum(total_payment)'];
 }
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Grade 1'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdGrad1TotalPayment = $output['sum(total_payment)'];
 }

    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Grade 2'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdGrad2TotalPayment = $output['sum(total_payment)'];
 }
    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Grade 3'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdGrad3TotalPayment = $output['sum(total_payment)'];
 }

    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Grade 4'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdGrad4TotalPayment = $output['sum(total_payment)'];
 }

    $select = mysqli_query($link, "SELECT sum(total_payment) FROM payment WHERE purpose_of_payment = 'Third Term' AND class = 'Grade 5'");
    while ($output = mysqli_fetch_assoc($select)){
         $thirdGrad5TotalPayment = $output['sum(total_payment)'];
 }



    $firstBalance = $firstAmountPayable - $firstTotalPayment;
    $secondBalance = $secondAmountPayable - $secondTotalPayment;
    $thirdBalance = $thirdAmountPayable - $thirdTotalPayment;


    $firstPlayBalance = $firstPlayAmountPayable - $firstPlayTotalPayment;
    $firstPrepBalance = $firstPrepAmountPayable - $firstPrepTotalPayment;
    $firstNur1Balance = $firstNur1AmountPayable - $firstNur1TotalPayment;
    $firstNur2Balance = $firstNur2AmountPayable - $firstNur2TotalPayment;
    $firstGrad1Balance = $firstGrad1AmountPayable - $firstGrad1TotalPayment;
    $firstGrad2Balance = $firstGrad2AmountPayable - $firstGrad2TotalPayment;
    $firstGrad3Balance = $firstGrad3AmountPayable - $firstGrad3TotalPayment;
    $firstGrad4Balance = $firstGrad4AmountPayable - $firstGrad4TotalPayment;
    $firstGrad5Balance = $firstGrad5AmountPayable - $firstGrad5TotalPayment;

    $secondPlayBalance = $secondPlayAmountPayable - $secondPlayTotalPayment;
    $secondPrepBalance = $secondPrepAmountPayable - $secondPrepTotalPayment;
    $secondNur1Balance = $secondNur1AmountPayable - $secondNur1TotalPayment;
    $secondNur2Balance = $secondNur2AmountPayable - $secondNur2TotalPayment;
    $secondGrad1Balance = $secondGrad1AmountPayable - $secondGrad1TotalPayment;
    $secondGrad2Balance = $secondGrad2AmountPayable - $secondGrad2TotalPayment;
    $secondGrad3Balance = $secondGrad3AmountPayable - $secondGrad3TotalPayment;
    $secondGrad4Balance = $secondGrad4AmountPayable - $secondGrad4TotalPayment;
    $secondGrad5Balance = $secondGrad5AmountPayable - $secondGrad5TotalPayment;

    $thirdPlayBalance = $thirdPlayAmountPayable - $thirdPlayTotalPayment;
    $thirdPrepBalance = $thirdPrepAmountPayable - $thirdPrepTotalPayment;
    $thirdNur1Balance = $thirdNur1AmountPayable - $thirdNur1TotalPayment;
    $thirdNur2Balance = $thirdNur2AmountPayable - $thirdNur2TotalPayment;
    $thirdGrad1Balance = $thirdGrad1AmountPayable - $thirdGrad1TotalPayment;
    $thirdGrad2Balance = $thirdGrad2AmountPayable - $thirdGrad2TotalPayment;
    $thirdGrad3Balance = $thirdGrad3AmountPayable - $thirdGrad3TotalPayment;
    $thirdGrad4Balance = $thirdGrad4AmountPayable - $thirdGrad4TotalPayment;
    $thirdGrad5Balance = $thirdGrad5AmountPayable - $thirdGrad5TotalPayment;

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
            background-color: #0bd4bd !important;
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

        
        table.table-fit {
            width: auto !important;
             table-layout: auto !important;
            }
        table.table-fit thead th, 
        table.table-fit tfoot th {
            width: auto !important;
            }
        table.table-fit tbody td, 
        table.table-fit tfoot td {
            width: auto !important;
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
        .info-head{
            color: #ca0bd4;
            font-family: cursive;
            margin-bottom: 0;
            margin-top: 0;
            /*margin-left: 5em;*/
            font-size: 18px;
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
        .titles{
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
            position: fixed;
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
                <li class="">
                    <a href="admin.php">
                        <i class="fas fa-home"></i>
                        <!-- <img src="https://lancer-app.000webhostapp.com/images/svg/home.svg" height="20" width="auto" style="color: #000"> -->
                        <span> Dashboard</span></a>
                </li>
                <li class="">
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
                        <tr id="thead">
                        <th scope="col" id="thead" class="relp"> Breakdown of Payments</th>
                        
                        </thead>
                        </table>
                        
                    </div>
                     

                </div>
            </nav>

            <section class="">
                <div class="container">

                    <div class="card card-body">
    <div class="table-responsive text-nowrap">
       
                            <table class="table table-striped ">
                                <h3 class="info-head">2020/2021 Academic Session</h3>
                                <thead>
                                    <tr>
                                        <th scope="row" class="border-top border-bottom titles ">First Term</th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                           
                                   
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Payable
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Paid
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Balance
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstAmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstBalance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <thead>
                                    <tr>
                                        <th scope="row" class="border-top border-bottom titles">Second Term</th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                           
                                   
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Payable
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Paid
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Balance
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondAmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondBalance;  ?>
                                            
                                        </td>
                                    </tr>

                                    <thead>
                                    <tr>
                                        <th scope="row" class="border-top border-bottom titles">Third Term</th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                           
                                   
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Payable
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Paid
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Balance
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdAmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdBalance;  ?>
                                            
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
            </section>
         <section class="">
                <div class="container">

                    <div class="card card-body">
    <div class="table-responsive text-nowrap">
       
                            <table class="table table-striped ">
                                <h3 class="info-head">Break Down By Classes For 2020/2021 Academic Session</h3>
                                <thead>
                                    <tr>
                                        <th scope="row" class="border-top border-bottom titles">First Term</th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                           
                                   
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0 titles">
                                            Class
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Payable
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Paid
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Balance
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Play Class
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstPlayTotalPayment; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstPlayTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstPlayBalance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Preparatory Class
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstPrepAmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstPrepTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstPrepBalance;  ?>
                                            
                                        </td>
                                    </tr>

                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Nursery One
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstNur1AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstNur1TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstNur1Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Nursery Two
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstNur2AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstNur2TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstNur2Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade One
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad1AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad1TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad1Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Two
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad2AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad2TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad2Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Three
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad3AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad3TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad3Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Four
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad4AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad4TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad4Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Five
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad5AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad5TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $firstGrad5Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0 titles">
                                            Total
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            <?php echo $firstAmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            <?php echo $firstTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            <?php echo $firstBalance;  ?>
                                            
                                        </td>
                                    </tr>

                                    <thead>
                                    <tr>
                                        <th scope="row" class="border-top border-bottom titles">Second Term</th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                           
                                   
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0 titles">
                                            Class
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Payable
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Paid
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Balance
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Play Class
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondPlayAmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondPlayTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondPlayBalance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Preparatory Class
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondPrepAmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondPrepTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondPrepBalance;  ?>
                                            
                                        </td>
                                    </tr>

                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Nursery One
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondNur1AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondNur1TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondNur1Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Nursery Two
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondNur2AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondNur2TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondNur2Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade One
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad1AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad1TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad1Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Two
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad2AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad2TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad2Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Three
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad3AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad3TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad3Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Four
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad4AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad4TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad4Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Five
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad5AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad5TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $secondGrad5Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                     <tr class="py-2">
                                        <td scope="row" class="border border-right-0 titles">
                                            Total
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            <?php echo $secondAmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            <?php echo $secondTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            <?php echo $secondBalance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <thead>
                                    <thead>
                                    <tr>
                                        <th scope="row" class="border-top border-bottom titles">Third Term</th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                        <th scope="row" class="border-top border-bottom titles"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                           
                                   
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0 titles">
                                            Class
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Payable
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Amount Paid
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            Total Balance
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Play Class
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdPlayTotalPayment; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdPlayTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdPlayBalance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Preparatory Class
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdPrepAmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdPrepTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdPrepBalance;  ?>
                                            
                                        </td>
                                    </tr>

                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Nursery One
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdNur1AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdNur1TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdNur1Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Nursery Two
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdNur2AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdNur2TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdNur2Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade One
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad1AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad1TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad1Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Two
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad2AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad2TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad2Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Three
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad3AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad3TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad3Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Four
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad4AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad4TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad4Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                    <tr class="py-2">
                                        <td scope="row" class="border border-right-0">
                                            Grade Five
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad5AmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad5TotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0">
                                            <?php echo $thirdGrad5Balance;  ?>
                                            
                                        </td>
                                    </tr>
                                     <tr class="py-2">
                                        <td scope="row" class="border border-right-0 titles">
                                            Total
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            <?php echo $thirdAmountPayable; ?>
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            <?php echo $thirdTotalPayment;  ?>
                                        </td>
                                        <td scope="row" class="border border-right-0 titles">
                                            <?php echo $thirdBalance;  ?>
                                            
                                        </td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
            </section>

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
    </script>
</body>

</html>
