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
                                            <h5>Update Courses</h5>
                                            
                                        </header>
                                        <div id="actionTable" class="body collapse in">
                                           <?php
$course_id=$_GET['course_id'];


$qry="SELECT * from add_course WHERE course_id='$course_id'";
$result=mysqli_query($conn,$qry);

while($row=mysqli_fetch_array($result)){
$cos=(int) $row['course_duration'];


echo "
<form action='update.php' method='post'>
<table align='center'>

<tr><td>Course ID:</td><td><input type='text' name='course_id' value='".$row['course_id']."' readonly='readonly'/></td></tr>
<tr><td>Course Name:</td><td><input type='text' name='course_name' value='".$row['course_name']."'/></td></tr>
<tr><td>Course Fees:</td><td><input type='text' name='course_fees' value='".$row['course_fees']."'/></td></tr>
<!--<tr><td>Pay To RGCSM With Book:</td><td><input type='text' name='pay_to_rgcsm1' value='".$row['pay_to_rgcsm1']."'/></td></tr>
<tr><td>Pay To RGCSM Without Book:</td><td><input type='text' name='pay_to_rgcsm2' value='".$row['pay_to_rgcsm2']."'/></td></tr>-->
<tr><td>Course Eligibility:</td><td><input type='text' name='course_eligibility' value='".$row['course_eligibility']."'/></td></tr>
<tr><td>Course Description:</td><td><input type='text' name='course_description' value='".$row['course_description']."'/></td></tr>
<tr><td>Course Duration:</td><td><input type='text' name='course_duration' value='".$row['course_duration']."'/></td></tr>
</table>";
if($cos<7){$sq="select * from `add_subject` where `course`='$course_id' and `sem`='1'";$sqe=mysqli_query($conn,$sq);$sqr=mysqli_fetch_assoc($sqe);echo "<table style='margin-left:180px;' height='500'> 						<fieldset>						<legend>1<sup>st</sup> Semester Subject Details</legend>						<tr><th>Subject Name</th><th>Maximum Marks</th><th>Minimum Marks</th></tr>						<tr><td>					    <input type='text' name='sub11' value='".$sqr['sub1']." '/></td>						<td><input type='text' name='max11' value='".$sqr['max1']." '/></td>						<td><input type='text' name='min11' value='".$sqr['min1']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub12' value='".$sqr['sub2']." '/></td>						<td><input type='text' name='max12' value='".$sqr['max2']." '/></td>						<td><input type='text' name='min12' value='".$sqr['min2']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub13' value='".$sqr['sub3']." '/></td>						<td><input type='text' name='max13' value='".$sqr['max3']." '/></td>						<td><input type='text' name='min13' value='".$sqr['min3']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub14' value='".$sqr['sub4']." '/></td>						<td><input type='text' name='max14' value='".$sqr['max4']." '/></td>						<td><input type='text' name='min14' value='".$sqr['min4']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub15' value='".$sqr['sub5']." '/></td>						<td><input type='text' name='max15' value='".$sqr['max5']." '/></td>						<td><input type='text' name='min15' value='".$sqr['min5']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub16' value='".$sqr['sub6']." '/></td>						<td><input type='text' name='max16' value='".$sqr['max6']." '/></td>						<td><input type='text' name='min16' value='".$sqr['min6']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub17' value='".$sqr['sub7']." '/></td>						<td><input type='text' name='max17' value='".$sqr['max7']." '/></td>						<td><input type='text' name='min17' value='".$sqr['min7']." '/></td></tr>                                                						</fieldset>";												echo "<tr><td colspan='3' align='center'><input type='submit' name='update' value='UPDATE'></td></tr>						                         </table>";}else{$sq="select * from `add_subject` where `course`='$course_id' and `sem`='1'";$sqe=mysqli_query($conn,$sq);$sqr=mysqli_fetch_assoc($sqe);echo "<table style='margin-left:180px;' height='500'> 						<fieldset>						<legend>1<sup>st</sup> Semester Subject Details</legend>						<tr><th>Subject Name</th><th>Maximum Marks</th><th>Minimum Marks</th></tr>						<tr><td>					    <input type='text' name='sub11' value='".$sqr['sub1']." '/></td>						<td><input type='text' name='max11' value='".$sqr['max1']." '/></td>						<td><input type='text' name='min11' value='".$sqr['min1']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub12' value='".$sqr['sub2']." '/></td>						<td><input type='text' name='max12' value='".$sqr['max2']." '/></td>						<td><input type='text' name='min12' value='".$sqr['min2']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub13' value='".$sqr['sub3']." '/></td>						<td><input type='text' name='max13' value='".$sqr['max3']." '/></td>						<td><input type='text' name='min13' value='".$sqr['min3']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub14' value='".$sqr['sub4']." '/></td>						<td><input type='text' name='max14' value='".$sqr['max4']." '/></td>						<td><input type='text' name='min14' value='".$sqr['min4']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub15' value='".$sqr['sub5']." '/></td>						<td><input type='text' name='max15' value='".$sqr['max5']." '/></td>						<td><input type='text' name='min15' value='".$sqr['min5']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub16' value='".$sqr['sub6']." '/></td>						<td><input type='text' name='max16' value='".$sqr['max6']." '/></td>						<td><input type='text' name='min16' value='".$sqr['min6']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub17' value='".$sqr['sub7']." '/></td>						<td><input type='text' name='max17' value='".$sqr['max7']." '/></td>						<td><input type='text' name='min17' value='".$sqr['min7']." '/></td></tr>                                                						</fieldset>";																		echo "  </table>";$sq="select * from `add_subject` where `course`='$course_id' and `sem`='2'";$sqe=mysqli_query($conn,$sq);$sqr=mysqli_fetch_assoc($sqe);echo "<table style='margin-left:180px;' height='500'> 						<fieldset>						<legend>2<sup>nd</sup> Semester Subject Details</legend>						<tr><th>Subject Name</th><th>Maximum Marks</th><th>Minimum Marks</th></tr>						<tr><td>					    <input type='text' name='sub21' value='".$sqr['sub1']." '/></td>						<td><input type='text' name='max21' value='".$sqr['max1']." '/></td>						<td><input type='text' name='min21' value='".$sqr['min1']." '/></td></tr>					    <tr><td>					    <input type='text' name='sub22' value='".$sqr['sub2']." '/></td>						<td><input type='text' name='max22' value='".$sqr['max2']." '/></td>						<td><input type='text' name='min22' value='".$sqr['min2']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub23' value='".$sqr['sub3']." '/></td>						<td><input type='text' name='max23' value='".$sqr['max3']." '/></td>						<td><input type='text' name='min23' value='".$sqr['min3']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub24' value='".$sqr['sub4']." '/></td>						<td><input type='text' name='max24' value='".$sqr['max4']." '/></td>						<td><input type='text' name='min24' value='".$sqr['min4']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub25' value='".$sqr['sub5']." '/></td>						<td><input type='text' name='max25' value='".$sqr['max5']." '/></td>						<td><input type='text' name='min25' value='".$sqr['min5']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub26' value='".$sqr['sub6']." '/></td>						<td><input type='text' name='max26' value='".$sqr['max6']." '/></td>						<td><input type='text' name='min26' value='".$sqr['min6']." '/></td></tr>                        <tr><td>					    <input type='text' name='sub27' value='".$sqr['sub7']." '/></td>						<td><input type='text' name='max27' value='".$sqr['max7']." '/></td>						<td><input type='text' name='min27' value='".$sqr['min7']." '/></td></tr>                        						</fieldset>";						echo "<tr><td colspan='3' align='center'><input type='submit' name='update' value='UPDATE'></td></tr>						                         </table>";}

                        

echo"
</form>
";



}


?>
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
