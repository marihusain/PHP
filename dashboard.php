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
                        <h1> Dashboard</h1>
<div class="tac">
                                
                                <a class="quick-btn" href="reports_students.php">
                                    <i class="icon-signal icon-2x"></i>
                                    <span>Students</span>
                                    <span class="label label-warning">25</span>
                                </a>
                                <a class="quick-btn" href="reports_students.php">
                                    <i class="icon-signal icon-2x"></i>
                                    <span>Approved</span>
                                    <span class="label label-warning">08</span>
                                </a>
                                <a class="quick-btn" href="reports_students.php">
                                    <i class="icon-signal icon-2x"></i>
                                    <span>Pending</span>
                                    <span class="label label-warning">17</span>
                                </a>
                                <a class="quick-btn" href="reports_asc.php">
                                    <i class="icon-signal icon-2x"></i>
                                    <span>ASC</span>
                                    <span class="label label-warning">10</span>
                                </a>
                                <a class="quick-btn" href="reports_courses.php">
                                    <i class="icon-signal icon-2x"></i>
                                    <span>Courses</span>
                                    <span class="label label-warning">120</span>
                                </a>
                                
                            </div>
                                <div id="condensedTable" class="body collapse in">
                                            <table border="0" cellpadding="50" >
                                                       <tr>
                                                        <td><a href="reports_students.php"><img src="img/06.png" title="Approve Student"><span class="badge badge-warning">Approve Student</span></a></td>
                                                   <td><a href="add_asc.php"><img src="img/26.png" title="Add New ASC"><span class="badge badge-warning">Add New ASC</span></a></td>
                                                   <td><a href="reports_students.php"><img src="img/04.png" title="Pending Student"><span class="badge badge-warning">Pending Student</span></a></td>
                                                   <td><a href="add_course.php"><img src='img/12.png' title="Add New Course"><span class="badge badge-warning">Add New Course</span></a></td>
                                                    
                                                    </tr>
                                                             <tr>
                                                    <td><a href="reports_asc.php"><img src="img/02.png" title="All ASC"><span class="badge badge-warning">All ASC</span></a></td>
                                                   <td><a href="change_password.php"><img src='img/35.png' title="Change Password"><span class="badge badge-warning">Change Password</span></a></td>
                                                   
                                                   <td><a href="http://www.springstrategies.in" target="_blank"><img src="img/09.png" title="Contact SST Support"><span class="badge badge-warning">Contact SST Support</span></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                    <!-- /.row-fluid -->
            <!-- END CONTENT -->


            <!-- #push do not remove -->
            <!-- /#push -->

</div></div></div>
</div>

        <!-- BEGIN FOOTER -->
        <div id="footer">
         <?php include("footer.php"); ?>
        </div>    </body>
</html>
