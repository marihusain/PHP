<?php 

include "config.php"; 

session_start();

if(!isset($_SESSION['admin_id'])){

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';}

?>



<!DOCTYPE html>

<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7">   <![endif]-->

<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8">          <![endif]-->

<!--[if IE 8]>          <html class="no-js lt-ie9">                 <![endif]-->

<!--[if gt IE 8]><!-->  <html class="no-js">                        <!--<![endif]-->

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>RGCSM - Dashboard</title>

        <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">

        <meta name="viewport" content="width=device-width">

        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">

        <link type="text/css" rel="stylesheet" href="assets/Font-awesome/css/font-awesome.min.css">

        <link type="text/css" rel="stylesheet" href="assets/css/style.css">

        <link type="text/css" rel="stylesheet" href="assets/css/calendar.css">



        <link rel="stylesheet" href="assets/css/theme.css">



        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

        <!--[if lt IE 9]>

        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <!--[if IE 7]>

        <link type="text/css" rel="stylesheet" href="assets/Font-awesome/css/font-awesome-ie7.min.css"/>

        <![endif]-->



        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    </head>

    <body>

        <!-- BEGIN WRAP -->

        <div id="wrap">





            <!-- BEGIN TOP BAR -->

            <div id="top">

                <?php include('header.php'); ?>

                </div>

            <!-- END TOP BAR -->



            <!-- BEGIN LEFT  -->

<div id="left">

<?php include('left.php');?>

</div>

            <!-- END LEFT -->



            <!-- BEGIN MAIN CONTENT -->

            <div id="content">

                <!-- .outer -->

                <div class="container-fluid outer">

                    <div class="row-fluid">                   

                        <div class="span12 inner" >

                        <h1> Franchise Enquiry</h1>

<div class="tac" style="width:100%; height: 80vh;overflow:auto;">

                                

    <table class="table table-striped">

        <thead>

            <tr>

                <td>Sr.</td>

                <td>Name</td>

                <td>Contact</td>

                <td>Email</td>

                <td>Address</td>

                <td>City</td>

                <td>Date</td>

            </tr>

        </thead>

        <tbody>

            <?php

            $sq="select * from `franchise_data` order by `times` desc";

            $sqe=  mysqli_query($conn, $sq);



            $e=0;

            while ($sqre=mysqli_fetch_assoc($sqe)){

                $e++;

                //var_dump($sqre);

            ?>

            <tr>

                <td><?php echo $e; ?></td>

                <td><?php echo $sqre['name']; ?></td>

                <td><?php echo $sqre['contact']; ?></td>

                <td><?php echo $sqre['mail']; ?></td>

                <td><?php echo $sqre['address']; ?></td>

                <td><?php echo $sqre['city']; ?></td>

                <td><?php echo $sqre['times']; ?></td>

            </tr>

            <?php } ?>

        </tbody>

    </table>



</div></div></div>

</div>



        <!-- BEGIN FOOTER -->

        <div id="footer">

         <?php include("footer.php"); ?>

        </div>    </body>

</html>

