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

        <title>RGCSM </title>

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

		<script type="text/javascript" src="js/makesure.js"></script>

		<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>

		

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

                        <div class="span12 inner" style="width:100%; height: 80vh;overflow:auto;">

                        <h1>Show Result</h1>   

                       <table class="table table-bordered responsive">

                                                <thead>

                                                    <tr>

                                                        <th>#</th>
														<th>QR CODE</th>

                                                        <th>Registration</th>

                                                        <th>Name</th>

                                                        <th>Course Name</th>

                                                        <th>Course Duration</th>

														<th>Semester</th>                                                       

													    <th>Maximum Marks</th>

                                                        <th>Minimum Marks</th>

														<th>Obtain Marks</th>

														<th>Percentage</th>

                                                        <th>Status</th>

                                                        

                                                        <th>Action (Edit / Delete)</th>

                                                    </tr>

                                                </thead>

                                                <tbody>
												

                                                     <?php 







include "config.php";

$qry="select * from result"; 

$result=mysqli_query($conn,$qry); 

$id=1;

while($row=mysqli_fetch_array($result))



	{

       echo "<tr>";

        echo "<td>".$id."</td>";
		echo "<td><A HREF=\"javascript:popitup5('http://rgcsmbhopal.com/home/upload/".$t['image_path']."','Temple of Heavenly Bliss', 384, 288,'white')\"><img src='http://rgcsmbhopal.com/home/upload/".$t['image_path']."' height='600' width='400' alt=\"Click to zoom\" /></A></td>";
		
		echo "<td>".$row['registration']."</td>";

		echo "<td>".$row['student_name']."</td>";

		echo "<td>".$row['course_name']."</td>";

		echo "<td>".$row['course_duration']."</td>";

		echo "<td>".$row['semester']."</td>";

		echo "<td>".$row['totalmax']."</td>";

		echo "<td>".$row['totalmin']."</td>";

		echo "<td>".$row['totalobt']."</td>";

		echo "<td>".$row['percent']."</td>";

		echo "<td>".$row['status']."</td>";

		echo "<td><a href='edit_result.php?reg=".$row['registration']."'><button>Edit</button></a><a href='delete_result.php?reg=".$row['registration']."'><button onClick='return sure();'>Delete</button></a></td>";

		;

		

		echo "</tr>";

   $id++; }



?> </tbody>

                                            </table>	

				  

</div></div></div></div></div></div></div></div></div></div></div></div></div>

        <!-- END WRAP -->



        <div class="clearfix"></div>



        <!-- BEGIN FOOTER -->

        <div id="footer">

         <?php include("footer.php"); ?>

        </div>    </body>

</html>



