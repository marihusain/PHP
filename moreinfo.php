<?php 

include('config.php');

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

        <title>RGCSM - All Students</title>

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

                        <h1>Students</h1>

                                    <div class="box">

                                        <header>

                                            <div class="icons"><i class="icon-edit"></i></div>

                                            <h5>All Students</h5>

                                            

                                        </header>

                                        <div id="actionTable" class="body collapse in">

                                            <?php

$regno=$_GET['regno'];

$qry="SELECT * from admission WHERE registration='$regno'";

$result=mysqli_query($conn,$qry);



while($row=mysqli_fetch_array($result)){

$vik='<img src=https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://rgcsm.in/asc/my_details.php?regno='.$row['registration'].'&choe=UTF-8 title="Right Click and save QR" width=200 height=200/>';

echo "
<div style='float:left'>
<img src='http://rgcsm.in/asc/".$row['image']."' width='200' height='250' style='margin-right:15px;' />'".$vik."'
</br>
</br>
<a href='student_msg.php?regno=".$row['registration']."'><button class='btn edit'>"."<i class='fa fa-commenting' aria-hidden='true'></i>"."</i>"."</button></a>
</div>

<table align='center'>

<tr><td>Student Registration Number:</td><td><input type='text' name='registration' value='".$row['registration']."' readonly='readonly'></td></tr>

<tr><td>Roll Number;</td><td><input type='text' name='roll_no' value='".$row['roll_no']."' readonly='readonly'></td></tr>

<tr><td>ASC Centre Code:</td><td><input type='text' name='asc_centre_code' value='".$row['asc_centre_code']."' readonly='readonly'></td></tr>

<tr><td>Course Name:</td><td><input type='text' name='course_name' value='".$row['course_name']."' readonly='readonly'></td></tr>

<tr><td>Course Fees:</td><td><input type='text' name='course_fees' value='".$row['course_fees']."' readonly='readonly'></td></tr>

<tr><td>Course Duration:</td><td><input type='text' name='course_duration' value='".$row['course_duration']."' readonly='readonly'></td></tr>

<tr><td>Course ID:</td><td><input type='text' name='course_id' value='".$row['course_id']."' readonly='readonly'></td></tr>

<tr><td>Joining Date:</td><td><input type='text' name='joining_date' value='".$row['joining_date']."' readonly='readonly'></td></tr>

<tr><td>Student Name:</td><td><input type='text' name='student_name' value='".$row['student_name']."' readonly='readonly'></td></tr>

<tr><td>Father Name:</td><td><input type='text' name='father_name' value='".$row['father_name']."' readonly='readonly'></td></tr>

<tr><td>Nationality:</td><td><input type='text' name='nationality' value='".$row['nationality']."' readonly='readonly'></td></tr>

<tr><td>Category:</td><td><input type='text' name='category' value='".$row['category']."' readonly='readonly'></td></tr>

<tr><td>Gender:</td><td><input type='text' name='gender' value='".$row['gender']."' readonly='readonly'></td></tr>

<tr><td>Address:</td><td><input type='text' name='address' value='".$row['address']."' readonly='readonly'></td></tr>

<tr><td>State:</td><td><input type='text' name='state' value='".base64_decode($row['state'])."' readonly='readonly'></td></tr>

<tr><td>City:</td><td><input type='text' name='city' value='".$row['city']."' readonly='readonly'></td></tr>

<tr><td>Dob:</td><td><input type='text' name='dob' value='".$row['dob']."' readonly='readonly'></td></tr>

<tr><td>Email:</td><td><input type='text' name='email' value='".$row['email']."' readonly='readonly'></td></tr>

<tr><td>Contact Number:</td><td><input type='text' name='contact_number' value='".$row['contact_number']."' readonly='readonly'></td></tr>

<tr><td>Payment Amount:</td><td><input type='text' name='payment_amount' value='".$row['payment_amount']."' readonly='readonly'></td></tr>

<tr><td>DD Number:</td><td><input type='text' name='payment_dd' value='".$row['payment_dd']."' readonly='readonly'></td></tr>

<tr><td>DD Date:</td><td><input type='text' name='payment_date' value='".$row['payment_date']."' readonly='readonly'></td></tr>

<tr><td>Bank Name:</td><td><input type='text' name='payment_bank_name' value='".$row['payment_bank_name']."' readonly='readonly'></td></tr>

<tr><td>Status</td><td><input type='text' name='status' value='".$row['status']."' readonly='readonly'></td></tr>



</table>

</form>

";







}





?>

                                        </div>

                                    </div>

                                </div>

                                

        

</div></div></div></div></div></div></div></div></div></div></div></div></div>

        <!-- END WRAP -->



        <div class="clearfix"></div>



        <!-- BEGIN FOOTER -->

        <div id="footer">

         <?php include("footer.php"); ?>

        </div>    </body>

</html>

