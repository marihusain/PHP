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
        <title>RGCSM</title>
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
                        <div class="span12 inner" style="width:100%; height: 80vh;overflow:auto;">
                        <h1>Search Student</h1>

                           <table align="center">
						<form action="" method="post">
						<tr><td>Search Student</td><td><input type="text" name="student_name" placeholder="Name,mobile, roll number or admission id" /></td><td><input type="submit" name="search" value="search"/></td></tr>
                        </form>
						
						<table class="table table-bordered responsive" frame="void">
<thead>
                                                    <tr>
                                                        <th>#</th>
                                                        
                                                        <th>Student Registration</th>
                                                        <th>Roll Number</th>
                                                        <th>ASC Centre Code</th>
                                                        <th>Course Name</th>
														<th>Course Fees</th>
                                                        <th>Course Duration</th>
                                                        <th>Course ID</th>
                                                        <th>Joining Date</th>
                                                        <th>Student Name</th>
                                                        <th>Father Name</th>
                                                       <th>Photo</th>
                                                        <th>Status</th>
                                                        <th>Action </th>
                                                    </tr>
                                                </thead>
                                                                   <?php 


if(isset($_POST['search'])){
$student_name=$_POST['student_name'];
$id=1;
$qry="select * from admission where student_name LIKE '%$student_name%' or roll_no LIKE '%$student_name%' or id LIKE '%$student_name%' or email LIKE '%$student_name%' or contact_number LIKE '%$student_name%'"; 
$result=mysqli_query($conn,$qry); while($row=mysqli_fetch_array($result))


	{
       echo "<tr>";
        echo "<td>".$id."</td>";
		echo "<td><a href='moreinfo.php?regno=".$row['registration']."'>".$row['registration']."</a></td>";
		echo "<td>".$row['roll_no']."</td>";
		echo "<td>".$row['asc_centre_code']."</td>";
		echo "<td>".$row['course_name']."</td>";
		echo "<td>".$row['course_fees']."</td>";
		echo "<td>".$row['course_duration']."</td>";
		echo "<td>".$row['course_id']."</td>";
		echo "<td>".$row['joining_date']."</td>";
		echo "<td>".$row['student_name']."</td>";
		echo "<td>".$row['father_name']."</td>";
		$img=$row['image'];
		echo "<td>"."<img src='../asc/".$img."' width='200' height='300' />"."</td>";
		echo "<td>".$row['status']."</td>";
		echo "<td>"."<a href='student_edit.php?regno=".$row['registration']."'><button class='btn edit'>"."<i class='icon-edit'>"."</i>"."</button></a>"."<a href='student_delete.php?regno=".$row['registration']."'><button class='btn btn-danger remove' data-toggle='confirmation' onClick='return sure();'>".
		"<i class='icon-remove'>"."</i>"."</button></a>"."</td>";
		echo "</tr>";
   $id++; }
}
?> </tbody>      
                                            </table>
						
						        
								
</div>
                                
        
</div></div></div></div></div></div></div></div></div></div></div></div></div>        <!-- END WRAP -->

        <div class="clearfix"></div>

        <!-- BEGIN FOOTER -->
        <div id="footer">
         <?php include("footer.php"); ?>
        </div>    </body>
</html>