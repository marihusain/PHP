<?php 
include('config.php'); 
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
        <title>RGCSM - ASC Centers</title>
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
                        <h1>ASC Centers</h1>
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-edit"></i></div>
                                            <h5>All ASC Centers</h5>
                                            
                                        </header>
                                        <div id="actionTable" class="body collapse in">
                                           <?php
$asc_code=$_GET['asc_code'];

include "config.php";



$qry="SELECT * from add_asc WHERE asc_centre_code='$asc_code'";
$result=mysqli_query($conn,$qry);

while($row=mysqli_fetch_array($result)){
echo "
<form action='update_asc.php' method='post'>
<table align='center'>
<tr><td>ASC Centre Name:</td><td><input type='text' name='asc_centre_name' value='".$row['asc_centre_name']."'></td></tr>
<tr><td>ASC User ID:</td><td><input type='text' name='asc_user_id' value='".$row['asc_user_id']."'></td></tr>
<tr><td>Password:</td><td><input type='text' name='asc_user_password' value='".$row['asc_user_password']."'></td></tr>
<tr><td>Centre Code:</td><td><input type='text' name='asc_centre_code' value='".$row['asc_centre_code']."'></td></tr>
<tr><td>Director Name:</td><td><input type='text' name='asc_director_name' value='".$row['asc_director_name']."'></td></tr>
<tr><td>Centre Address:</td><td><input type='text' name='asc_centre_address' value='".$row['asc_centre_address']."'></td></tr>
<tr><td>State:</td><td><input type='text' name='asc_state' value='".$row['asc_state']."'></td></tr>
<tr><td>City:</td><td><input type='text' name='asc_city' value='".$row['asc_city']."'></td></tr>
<tr><td>Contact Number:</td><td><input type='text' name='asc_contact_number' value='".$row['asc_contact_number']."'></td></tr>
<tr><td>ASC Email:</td><td><input type='text' name='asc_centre_email' value='".$row['asc_centre_email']."'></td></tr>
<tr><td>Joining Date:</td><td><input type='date' name='asc_joining_date' value='".$row['asc_joining_date']."'></td></tr>
<tr><td>Due Date:</td><td><input type='date' name='asc_due_date' value='".$row['asc_due_date']."'></td></tr>
<tr><td colspan='2' align='center'><button name='asc_update'>Update</button></td></tr>

</table>
</form>
";



}


?>                                        </div>
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
