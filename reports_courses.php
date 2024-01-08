<?php 
include "config.php"; 
session_start();
if(!isset($_SESSION['admin_id'])){
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
}



?>

<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7">   <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8">          <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9">                 <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js">                        <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RGCSM - Courses</title>
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
                        <h1>Courses</h1>

                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-edit"></i></div>
                                            <h5>All Courses</h5>
                                            
                                        </header>
                                        <div id="actionTable" class="body collapse in">
                                            <table class="table table-bordered responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Course ID</th>
                                                        <th>Course Name</th>
                                                <th>Course Fees Rs.</th>
												<th>Pay to RGCSM With Book</th>
												<th>Pay to RGCSM Without Book</th>
                                                        <th>Course Eligibility</th>
                                                        <th>Course Description</th> 
                                                        <th>Course Duration (Month)</th>
        <th>Action (Edit / Delete)</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
	
 <?php 

$qry="select * from add_course"; 
$result=mysqli_query($conn,$qry); 
$id=1;
while($row=mysqli_fetch_array($result))

	{
       echo "<tr>";
        echo "<td>".$id."</td>";
		echo "<td>".$row['course_id']."</td>";
		echo "<td>".$row['course_name']."</td>";
		echo "<td>".$row['course_fees']."</td>";
		echo "<td>".$row['pay_to_rgcsm1']."</td>";
		echo "<td>".$row['pay_to_rgcsm2']."</td>";
		echo "<td>".$row['course_eligibility']."</td>";
		echo "<td>".$row['course_description']."</td>";
		echo "<td>".$row['course_duration']."</td>";
		echo "<td>"."<button><a href='edit_course.php?course_id=".$row['course_id']."'>Edit</a></button>". "<button onClick='return sure();'><a href='delete_course.php?course_id=".$row['course_id']."'>Delete</a></button>"."</td>";
		
		echo "</tr>";
   $id++; }

?> 
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
        
</div></div></div></div></div></div></div></div></div></div></div></div></div>        <!-- END WRAP -->

        <div class="clearfix"></div>

        <!-- BEGIN FOOTER -->
        <div id="footer">
         <?php include("footer.php"); ?>
        </div>    </body>
</html>
