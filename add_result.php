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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "ajax_php_file.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#loading').hide();
$("#message").html(data);
}
});
}));

// Function to preview image after validation
$(function() {
$("#file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('width', '250px');
$('#previewing').attr('height', '230px');
};
});
</script>


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
                        <h1>Add Result</h1>
                       <table width="100%" align="center">
						<form action="" method="post">
						<table align="center">
						<tr><td>Roll Number</td><td><input type="text" name="reg_no" placeholder="Enter Roll Number" /></td><td><input type="submit" name="search" value="Submit"/></td></tr>
						</table>
                        </form>
	
                       
						
						<?php
						if(isset($_POST['search']))
						{
						$reg_no=$_POST['reg_no'];
						$qry="select course_name,student_name,registration,roll_no from admission where roll_no='$reg_no'";
						$result=mysqli_query($conn,$qry);
						$row=mysqli_fetch_array($result);
						$_SESSION['student_name']=$row['student_name'];
						$_SESSION['registration']=$row['roll_no'];
						if($row>0){
						$qry1="select * from add_course where course_name='".$row['course_name']."'";
						$result=mysqli_query($conn,$qry1);
						$row=mysqli_fetch_array($result);$semco=(int)$row['course_duration'];
					    echo "<input type='hidden' name='cc' value='$row[1]'/>
						<form  action='insert_result.php' method='post' enctype='multipart/form-data'>
						<table >
						<tr><td>Roll No:</td><td><input type='text' name='reg_no' value='".$_SESSION['registration']."' readonly></td><td rowspan='5' align='right'><div id='image_preview'><img id='previewing' src='noimage.png' /></div></td></tr>
						<tr><td>Student Name:</td><td><input type='text' name='student_name' value='".$_SESSION['student_name']."' readonly></td></tr>
						<tr><td>Course Name:</td><td><input type='text' name='course_name' value='".$row['course_name']."' readonly></td></tr>
						<tr><td>Course Duration:</td><td><input type='text' name='course_duration' value='".$row['course_duration']."' readonly></td></tr>
						<tr><td>

<div id='selectImage'>
Select Your Image </td><td>
<input type='file' name='file' id='file' required />
</div>
</form>

<div id='message'></div></td></tr>
						<tr><td>Semester:</td><td>
						<select name='semester' required='required'>
						<option label='--SELECT--'></option>						<option value='1'>First Semester</option>						";if($semco>6){echo "<option value='2'>Second Semester</option>";}
						
						
						echo "</select></td></tr></table>";
	
echo "<table style='margin-left:18px;' height='500' id='feedresult'> 
						<!------------------------result field-------->																		<!--------------end----here---------->
						
						                         </table>
												 </form>
            						";
						}
						}
						?>
						
						
					         <table class="table table-bordered responsive">
                                                <thead>
                                                    
                                                </thead>
                                                <tbody>
												
												
                                               </tbody>
                                            </table>	
				  
</div></div></div></div></div></div></div></div></div></div></div></div></div>
        <!-- END WRAP -->

        <div class="clearfix"></div>

        <!-- BEGIN FOOTER -->
        <div id="footer">
         <?php include("footer.php"); ?>
        </div>    </body>
</html><script>$('select[name=semester]').change(function(){var et=$('input[name=cc]').val();var eeet = encodeURI(et);var ets=$(this).val();$('body #feedresult').load('feed_result.php?c='+eeet+'&s='+ets);});</script>