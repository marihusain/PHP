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
        <title>RGCSM - Change Password</title>
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
                        <h1>Change Password</h1>           <h6>All Fields are Mandatory</h6><hr/>
                        <form  class="form-horizontal" action="" method="post" onSubmit="return validpass();" name="validate">
                        
                        <div class="control-group">
                        <label for="current_password" class="control-label">Current Password</label>              
                        <div class="controls with-tooltip">
                        <input type="password" name="current_password" class="span6 input-tooltip" data-placement="bottom" required/>
                        </div>
                        <br/>
                        <div class="control-group">
                        <label for="new_password" class="control-label">New Password</label>              
                        <div class="controls with-tooltip">
                        <input type="password" name="new_password" class="span6 input-tooltip" data-placement="bottom" required/>
                        </div>
                        <br/>
                        <div class="control-group">
                        <label for="repeat_password" class="control-label">Repeat New Password</label>              
                        <div class="controls with-tooltip">
                        <input type="password" name="repeat_password" class="span6 input-tooltip" data-placement="bottom" required/>
                        </div>
                        <br/>
                                                 
                        <div class="control-group">
                        <div class="controls with-tooltip">
                        <input type="submit" name="submit" class="span6 input-tooltip" data-placement="bottom" required/>
                        </div>
                        
                        </form>
						<?php
  if(isset($_POST['submit']))
  {
  $current_password=$_POST['current_password'];
  $new_password=$_POST['new_password'];
  $repeat_password=$_POST['repeat_password'];

  $qry="update admin set admin_password='$new_password' where admin_password='$current_password'";
  
  if($new_password==$repeat_password && $current_password!==$new_password && $new_password!==$current_password)
  {
  if(mysqli_query($conn,$qry))
  {
   
   echo "<script>alert('Password Changed Succesfully.'); </script>"; 

  }
  else
  {
    echo "Error:" .mysqli_error($con);
  }
  }
  else
  {
echo "<script>alert('OOPS...Error'); </script>"; 
  }
  mysqli_close($conn);
   
  }
  
  ?> 

</div></div></div></div></div></div></div></div></div></div></div></div></div>        <!-- END WRAP -->

        <div class="clearfix"></div>

        <!-- BEGIN FOOTER -->
        <div id="footer">
         <?php include("footer.php"); ?>
        </div>    </body>
</html>
