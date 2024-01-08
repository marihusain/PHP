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
        <title>RGCSM - Add Course</title>
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
                        <h1>Add Course</h1>
                                    <h6>All Fields are Mandatory</h6><hr/>
                        <form  class="form-horizontal" action="add_course_submit.php" method="post" name='result' onsubmit='return valid();'>
                        
                        <div class="control-group">
                        <label for="course_id" class="control-label">Course ID</label>              
                        <div class="controls with-tooltip">
                        <input type="text" name="course_id" class="span6 input-tooltip" data-placement="bottom" required/>
                        </div>
                        <br/>
                        <div class="control-group">
                        <label for="course_name" class="control-label">Course Name</label>              
                        <div class="controls with-tooltip">
                        <input type="text" name="course_name" class="span6 input-tooltip" data-placement="bottom" required/>
                        </div>
                        <br/>
                        <div class="control-group">
                        <label for="course_fees" class="control-label">Course Fees</label>              
                        <div class="controls with-tooltip">
                        <input type="text" name="course_fees" class="span6 input-tooltip" data-placement="bottom" required/>
                        </div>
                        <br/>
						 <div class="control-group">
                        <!--<label for="course_fees" class="control-label">Pay to RGCSM(with book)</label>              
                        <div class="controls with-tooltip">
                        <input type="text" name="pay_to_rgcsm1" class="span6 input-tooltip" data-placement="bottom" placeholder="Enter Value in Number" required/>
                        <span>Enter amount</span>
						</div>
                        <br/>
						<div class="control-group">
                        <label for="course_fees" class="control-label">Pay to RGCSM(without book)</label>              
                        <div class="controls with-tooltip">
                        <input type="text" name="pay_to_rgcsm2" class="span6 input-tooltip" data-placement="bottom" placeholder="Enter Value in Number" required/>
                        <span>Enter amount</span>
						</div>-->
                        <br/>
                        <div class="control-group">
                        <label for="course_eligibility" class="control-label">Course Eligibility</label>              
                        <div class="controls with-tooltip">
                          <p>
                            <label>
                              <input type="radio" name="course_eligibility" value="10th Pass" id="course_eligibility_0" required/>
                              10th Pass</label>
                            <br>
                            <label>
                              <input type="radio" name="course_eligibility" value="12th Pass" id="course_eligibility_1" required/>
                              12th Pass</label>
                            <br>
                            <label>
                              <input type="radio" name="course_eligibility" value="Graduate" id="course_eligibility_2" required/>
                              Graduate</label>
                            <br>
                            <label>
                              <input type="radio" name="course_eligibility" value="Post Graduate" id="course_eligibility_3" required/> 
                              Post Graduate</label>
                            <br>
                          </p> 
                        </div>
                        <br/>
                        <div class="control-group">
                        <label for="course_description" class="control-label">Course Description</label>              
                        <div class="controls with-tooltip">
                        <input type="text" name="course_description" class="span6 input-tooltip" data-placement="bottom" required/>
                        </div><br/>
                        <div class="control-group">
                        <label for="course_duration" class="control-label">Course Duration</label>              
                        <div class="controls with-tooltip">
                        <input type="text" name="course_duration" class="span6 input-tooltip" data-placement="bottom" required/>
                        </div>
                        <br/> 
						
						
						<div class="control-group">
                        <div class="controls with-tooltip">
                        <input type="submit" name="submit" class="span6 input-tooltip" data-placement="bottom" required/>
                        </div>
                        
                        </form>

</div></div></div></div></div></div></div></div></div></div></div>
        <!-- END WRAP -->

        <div class="clearfix"></div>

        <!-- BEGIN FOOTER -->
        <div id="footer">
         <?php include("footer.php"); ?>
        </div>    </body>
</html>
