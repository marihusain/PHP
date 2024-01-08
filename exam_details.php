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
        <title>RGCSM - Exam Form Details</title>
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
                        <h1>Student Exam Details</h1>
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-edit"></i></div>
                                            <h5>All Students</h5>
                                            
                                        </header>
                                        <div id="actionTable" class="body collapse in" style="width:100%; height: 80vh;overflow:auto;">
                                            <table class="table table-bordered responsive" frame="void">
<thead>
                                                    <tr>
                                                        <th>#</th>
                                                        
                                                        
<th>Registration Number</th>
<th>Roll Number</th>
                                                        <th>Student Name</th>
                                                        <th>Father Name</th>
                                                        <th>Student Address</th>
														<th>Course Name</th>
                                                        <th>Exam Centre</th>
                                                        <th>Semester</th>
                                                        <th>Registration Date</th>
                                                        <th>Status</th>
														<th>Photo</th>
                                                        <th>Action </th>
                                                    </tr>
                                                </thead>
                                                                   <?php 
$id=1;
$qry="select * from exam"; $result=mysqli_query($conn,$qry); while($row=mysqli_fetch_array($result))
{
echo "<tr>
   <td>".$row['id']."</td>
   <td>".$row['student_reg_number']."</td>
   <td>".$row['roll_no']."</td>
   <td>".$row['student_name']."</td>
   <td>".$row['father_name']."</td>
   <td>".$row['student_address']."</td>
   <td>".$row['course_name']."</td>
   <td>".$row['exam_centre']."</td>
   <td>".$row['semester']."</td>
   <td>".$row['reg_date']."</td>
   <td>".$row['status']."</td>
   <td><img src='../asc/".$row['image']."' width='100' height='120'/></td>
   <td><a href='exam_approved.php?reg=".$row['student_reg_number']."'><button>Approved</button></a><a href='exam_pending.php?reg=".$row['student_reg_number']."'><button>Pending</button></a></td>
   </tr>";

$id++;
}
?>
       </tbody>      
                                            </table>
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
