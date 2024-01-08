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
		<script type="text/javascript" src="js/makesure.js"></script>
		<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
		
		$.fn.sumValues = function() {
	var sum = 0; 
	this.each(function() {
		if ( $(this).is(':input') ) {
			var val = $(this).val();
		} else {
			var val = $(this).text();
		}
		sum += parseFloat( ('0' + val).replace(/[^0-9-\.]/g, ''), 10 );
	});
	return sum;
};
		
	$('input.max').bind('keyup', function() {
		$('span.total1').html( $('input.max').sumValues() );
	});
	$('input.min').bind('keyup', function() {
		$('span.total2').html( $('input.min').sumValues() );
	});
	$('input.obt').bind('keyup', function() {
		$('span.total3').html( $('input.obt').sumValues() );
	});
});
		
		</script>
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
                        <h1>Update Result</h1>
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-edit"></i></div>
                                            <h5>Update Subject Details</h5>
                                            
                                        </header>
                                        <div id="actionTable" class="body collapse in">
                                           <?php
$reg=$_GET['reg'];

$qry="SELECT * from result WHERE registration='$reg'";
$result=mysqli_query($conn,$qry);

while($row=mysqli_fetch_array($result)){
echo "
<form action='update_result.php' method='post'>
						<table >
						<tr><td>Registration No:</td><td><input type='text' name='reg_no' value='".$row['registration']."' readonly></td></tr>
						<tr><td>Student Name:</td><td><input type='text' name='student_name' value='".$row['student_name']."' readonly></td></tr>
						<tr><td>Course Name:</td><td><input type='text' name='course_name' value='".$row['course_name']."' readonly></td></tr>
						<tr><td>Course Duration:</td><td><input type='text' name='course_duration' value='".$row['course_duration']."' readonly></td></tr>
						<tr><td>Semester:</td><td><input type='text' name='semester' value='".$row['semester']."' readonly></td></tr>
						
						
				         </table>

<table style='margin-left:180px;' height='500'> 
						<fieldset>
						<legend>Enter Subject Details</legend>
						<tr><th>Subject Name</th><th>Maximum Marks</th><th>Minimum Marks</th><th>Obtain Marks</th></tr>
						<tr><td>
					    <input type='text' name='sub1' value='".$row['sub1']." '/></td>
						<td><input type='text' name='max1' class='max' value='".$row['max1']." '/></td>
						<td><input type='text' name='min1' class='min' value='".$row['min1']." '/></td>
						<td><input type='text' name='obt1' class='obt' value='".$row['obt1']."'/></td>
						</tr>
                        <tr><td>
					    <input type='text' name='sub2' value='".$row['sub2']." '/></td>
						<td><input type='text' name='max2' class='max' value='".$row['max2']." '/></td>
						<td><input type='text' name='min2' class='min' value='".$row['min2']." '/></td>
						<td><input type='text' name='obt2' class='obt' value='".$row['obt2']."'/></td>
						
						</tr>
                        <tr><td>
					    <input type='text' name='sub3' value='".$row['sub3']." '/></td>
						<td><input type='text' name='max3' class='max' value='".$row['max3']." '/></td>
					    <td><input type='text' name='min3' class='min' value='".$row['min3']." '/></td>
						<td><input type='text' name='obt3' class='obt' value='".$row['obt3']."'/></td>
						
						</tr>
                        <tr><td>
					    <input type='text' name='sub4' value='".$row['sub4']." '/></td>
						<td><input type='text' name='max4' class='max' value='".$row['max4']." '/></td>
						<td><input type='text' name='min4' class='min' value='".$row['min4']." '/></td>
						<td><input type='text' name='obt4' class='obt' value='".$row['obt4']."'/></td>
						
						</tr>
                        <tr><td>
					    <input type='text' name='sub5' value='".$row['sub5']." '/></td>
						<td><input type='text' name='max5' class='max' value='".$row['max5']." '/></td>
						<td><input type='text' name='min5' class='min' value='".$row['min5']." '/></td>
						<td><input type='text' name='obt5' class='obt' value='".$row['obt5']."'/></td>
						
						</tr>
                        <tr><td>
					    <input type='text' name='sub6' value='".$row['sub6']." '/></td>
						<td><input type='text' name='max6' class='max' value='".$row['max6']." '/></td>
						<td><input type='text' name='min6' class='min' value='".$row['min6']." '/></td>
						<td><input type='text' name='obt6' class='obt' value='".$row['obt6']."'/></td>
						
						</tr>
                        <tr><td>
					    <input type='text' name='sub7' value='".$row['sub7']." '/></td>
						<td><input type='text' name='max7' class='max' value='".$row['max7']." '/></td>
						<td><input type='text' name='min7' class='min' value='".$row['min7']." '/></td>
						<td><input type='text' name='obt7' class='obt' value='".$row['obt7']."'/></td>
						
						</tr>
                        <tr><td>
					    <input type='text' name='sub8' value='".$row['sub8']." '/></td>
						<td><input type='text' name='max8' class='max' value='".$row['max8']." '/></td>
						<td><input type='text' name='min8' class='min' value='".$row['min8']." '/></td>
						<td><input type='text' name='obt8' class='obt' value='".$row['obt8']."'/></td>
						
						</tr>
                        <tr><td>Total Marks</td><td><span class='total1'></span></td><td><span class='total2'></span></td><td><span class='total3'></span></td></tr>
						</fieldset>
						<tr><td colspan='3' align='center'><input type='submit' value='Update'></td></tr>
						                         </table>
												 </form>
            			
";



}

mysqli_close($conn);
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
