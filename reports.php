<?php 
include('config.php'); 
session_start();

?>

<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7">   <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8">          <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9">                 <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js">                        <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RGCSM - Reports</title>
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
                        <div class="box">
                                   <header>
                                            <h5>All Students</h5>
                                    <div class="toolbar">
                                                <a href="#condensedTable" data-toggle="collapse" class="accordion-toggle minimize-box">
                                                    <i class="icon-chevron-up"></i>
                                                </a>
                                            </div>                                        </header>
                                           <div id="condensedTable" class="body collapse in">
                                            <table class="table table-condensed responsive">
                                        <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Id</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Father`s Name</th>
                                                        <th>Gender</th>
                                                        <th>Temperoray Address</th>
                                                        <th>Permanent Address</th>
                                                        <th>Contact Number</th>
                                                        <th>Email Id</th>
                                                        <th>Photo</th>
                                                        <th>Course Opted</th>
                                                        <th>Fees Paid</th>
                                                        <th>ASC Center</th>
                                                        <th>DOE</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
 <?php 
$qry="select * from admission";
$result=mysql_query($qry);
$id=1;
while($row=mysql_fetch_array($result))
{
       echo "<tr>";
        echo "<td>".$id."</td>";
		echo "<td>".$row['user_id']."</td>";
		echo "<td>".$row['first_name']."</td>";
		echo "<td>".$row['last_name']."</td>";
		echo "<td>".$row['father_name']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "<td>".$row['temp_address']."</td>";
		echo "<td>".$row['permanent_address']."</td>";
		echo "<td>".$row['contact']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['photo']."</td>";
		echo "<td>".$row['course']."</td>";
		echo "<td>".$row['fee']."</td>";
		echo "<td>".$row['asc_center']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "<td>".$row['status']."</td>";
		echo "</tr>";
   $id++;
   }

?> </tbody>      </table>
                                        
                                     </div>
                                    </div>                       
                                    <div class="box">
                                   <header>
                                            <h5>All Courses</h5>
                                    <div class="toolbar">
                                                <a href="#condensedTable" data-toggle="collapse" class="accordion-toggle minimize-box">
                                                    <i class="icon-chevron-up"></i>
                                                </a>
                                            </div>                                        </header>
                                           <div id="condensedTable" class="body collapse in">
                                            <table class="table table-bordered responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Course ID</th>
                                                        <th>Course Name</th>
                                                <th>Course Fees Rs.</th>
												<th>Pay to RGCSM.</th>
                                                        <th>Course Eligibility</th>
                                                        <th>Course Description</th> 
                                                        <th>Course Duration (Month)</th>
        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
	
 <?php 
include "config.php";
$qry="select * from add_course"; 
$result=mysql_query($qry); 
$id=1;
while($row=mysql_fetch_array($result))

	{
       echo "<tr>";
        echo "<td>".$id."</td>";
		echo "<td>".$row['course_id']."</td>";
		echo "<td>".$row['course_name']."</td>";
		echo "<td>".$row['course_fees']."</td>";
		echo "<td>".$row['pay_to_rgcsm']."</td>";
		echo "<td>".$row['course_eligibility']."</td>";
		echo "<td>".$row['course_description']."</td>";
		echo "<td>".$row['course_duration']."</td>";
		
		
		echo "</tr>";
   $id++; }

?> 
                                                  
                                                </tbody>
                                            </table>                                        
                                     </div></div><div class="box">
                                   <header>
                                            <h5>All Authorized Study Centers</h5>
                                    <div class="toolbar">
                                                <a href="#condensedTable" data-toggle="collapse" class="accordion-toggle minimize-box">
                                                    <i class="icon-chevron-up"></i>
                                                </a>
                                            </div>                                        </header>
                                           <div id="condensedTable" class="body collapse in">
                                            <table class="table table-condensed responsive">
  <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ASC Center Name</th>
                                                        <th>ASC User ID</th>
                                                        <th>ASC User Password </th>
														<th>ASC Centre Code </th>
                                                        <th>ASC Director Name</th>
                                                        <th>ASC Center Address</th>
														<th>ASC State</th>
                                                        <th>ASC Center City</th>
														<th>ASC Contact Number</th>                                                        
                                                        <th>ASC Center Email</th>
														<th>ASC Joining Date</th>
														<th>ASC Due Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php 
$qry="select * from add_asc";
$result=mysql_query($qry);
while($row=mysql_fetch_array($result))
	{
       echo "<tr>";
        echo "<td>".$id."</td>";
		echo "<td>".$row['asc_centre_name']."</td>";
		echo "<td>".$row['asc_user_id']."</td>";
		echo "<td>".$row['asc_user_password']."</td>";
		echo "<td>".$row['asc_centre_code']."</td>";
		echo "<td>".$row['asc_director_name']."</td>";
		echo "<td>".$row['asc_centre_address']."</td>";
		echo "<td>".$row['asc_state']."</td>";
		echo "<td>".$row['asc_city']."</td>";
		echo "<td>".$row['asc_contact_number']."</td>";
		echo "<td>".$row['asc_centre_email']."</td>";
		echo "<td>".$row['asc_joining_date']."</td>";
		echo "<td>".$row['asc_due_date']."</td>";
		
		echo "</tr>";
   }

?> </tbody>                                            </table>
                                        
                                     </div>
                                    </div>                                 
                                        </div></div></div></div></div></div>       </div></div></div></div></div></div></div></div></div></div></div></div></div>
       
        <!-- END WRAP -->

        <div class="clearfix"></div>

        <!-- BEGIN FOOTER -->
        <div id="footer">
         <?php include("footer.php"); ?>
        </div>    
        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <!--
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="assets/js/vendor/jquery-ui-1.10.0.custom.min.js"><\/script>')</script>
        -->

        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script type="text/javascript" src="assets/js/lib/jquery.tablesorter.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/DT_bootstrap.js"></script>
        <script src="assets/js/lib/responsive-tables.js"></script>
        <script type="text/javascript">
            $(function() {
                metisTable();
            });
        </script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        
        
   </body>
</html>
