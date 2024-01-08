<?php 
include('config.php'); 
session_start();
if(!isset($_SESSION['admin_id'])){
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';}

?>

<?php
if(isset($_POST['submit']))
{
$small_msg=$_POST['small_msg'];
$large_msg=$_POST['large_msg'];

$sql="INSERT into director_mssg(small_msg,large_msg) VALUES('$small_msg','$large_msg')";
if(mysqli_query($conn,$sql))
{
echo "Message Added Successfully...!";
}
else
{
echo "Error: " .$sql. "</br>" .mysqli_error($conn);
}
mysqli_close($conn);
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
                        <h1>About Us</h1>   
                            <form  class="form-horizontal" action="" method="post">    
                        <div class="control-group" >
                        <label for="course_name" class="control-label"> Directors Small Message (Right Corner)</label>              
                        <div class="controls with-tooltip"> <textarea name="small_msg" class="span6 input-tooltip"  rows="2" placeholder="Directors Right Corner Content goes here.." required></textarea>
                        </div><br>
                        <div class="control-group" >
                        <label for="course_name" class="control-label"> Directors Page Message (For Directors Page)</label>              
                        <div class="controls with-tooltip"> <textarea name="large_msg" class="span6 input-tooltip"  required rows="15" placeholder="Directors Page Content goes here.."></textarea>
                        </div>
                         <div class="control-group">
                        <div class="controls with-tooltip">
                        <input type="submit" name="submit"  required/>
                        </div>
                       
                       
                         </form>   
</div></div></div></div></div></div></div></div></div></div></div></div></div>
        <!-- END WRAP -->

        <div class="clearfix"></div>

        <!-- BEGIN FOOTER -->
        <div id="footer">
         <?php include("footer.php"); ?>
        </div>    </body>
</html>

