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
        <title>RGCSM - All Students</title>
        <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
        <link type="text/css" rel="stylesheet" href="assets/Font-awesome/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="assets/css/calendar.css">

        <link rel="stylesheet" href="assets/css/theme.css">
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        
<style>
.app{
background:green;
color:#ffffff;
}
.pen{
background:red;
color:#ffffff;
}
</style>
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
                        
                        <h1>Students <form>
                        <select name="ctr" style="width: 90%;">
                        <option value="All">All</option>
                        <?php
                      
						
                        $qry="select * from add_asc "; $result=mysqli_query($conn,$qry); while($row=mysqli_fetch_array($result)){
                        //print_r($row);
                        echo "<option value=\"".$row['asc_centre_code']."\">".$row['asc_centre_name']."[".$row['asc_centre_code']."]</option>";
                        }
                        
                        ?>
                        
                        </select><button>View</button></form></h1>
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
                                                        <th>Image</th>
                                                        <th>Student Registration</th>
                                                        <th>Roll Number</th>
                                                        <th>DOB</th>
                                                        <th>QR Code</th>
														<th>Course Fees</th>
                                                        <th>Course Duration</th>
                                                        <th>Course ID</th>
                                                        <th>Joining Date</th>
                                                        <th>Student Name</th>
                                                        <th>Father Name</th>
                                                      <!-- <th>Photo</th>-->
                                                        <th>Status</th>
                                                        <th>Action </th>
                                                      
                                                    </tr>
                                                </thead>
                                                                   <?php 
$id=1;
if($_GET){
$sct=$_REQUEST['ctr'];
if($sct=='All'){
$qry="select * from admission";
$_SESSION['qrr'] = $qry;
}
else{
$sc= str_replace("RGCSM","",$sct);
$st= str_replace("-","",$sc);

//echo $st;
$qry="select * from `admission` where `asc_centre_code` = '$sct' OR `asc_centre_code` = '$st'";
//echo $qry;
$_SESSION['qrr'] = $qry;    
}


}
else{
// $qry="select * from admission";
// $_SESSION['qrr'] = $qry;
}

$qry = $_SESSION['qrr'];
 $result=mysqli_query($conn,$qry); 
 //echo '<pre>'; print_r($result); exit;
 while($row=mysqli_fetch_array($result))




	{
	    
	    
	 //  $vik='<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=""http%3A%2F%2Fwww.google.com%2F""&choe=UTF-8" title="Right Click to save" />';
	   
  //echo '<pre>'; print_r($row); exit;
       echo "<tr>";
        echo "<td>".$id."</td>";
        echo "<td>"."<img src='http://rgcsm.in/asc/".$row['image']."' width=200 height=300 />"."</td>";
		echo "<td><a href='moreinfo.php?regno=".$row['registration']."'>".$row['registration']."</a></td>";
		$rolln=$row['roll_no'];
		echo "<td>$rolln</td>";
		echo "<td>".$row['dob']."</td>";
		
		 $vik='<img src=https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://home.rgcsmbhopal.com/my_details.php?regno='.$row['registration'].'&choe=UTF-8 title="Right Click and save QR"  style="width:200px;">';
		 
		 
		echo "<td><div style='width:200px;height200px;'>
        $vik
        </div>
        </td>";
		echo "<td>".$row['course_fees']."</td>";
		echo "<td>".$row['course_duration']."</td>";
		echo "<td>".$row['course_id']."</td>";
		echo "<td>".$row['joining_date']."</td>";
		echo "<td>".$row['student_name']."</td>";
		echo "<td>".$row['father_name']."</td>";
       
		/*$img=$row['image'];
		echo "<td>"."<img src='/../asc/".$img."' width='200' height='300' />"."</td>";
		*/
		if($row['status']=='approved'){
		echo "<td class='app'>".$row['status']."</td>";
		}
		else{
		echo "<td class='pen'>".$row['status']."</td>";
		}
		
		echo "<td>"."<a href='student_edit.php?regno=".$row['registration']."'><button class='btn edit'>"."<i class='icon-edit'>"."</i>"."</button></a>"."<a href='student_delete.php?regno=".$row['registration']."'><button class='btn btn-danger remove' data-toggle='confirmation' onClick='return sure();'>".
		"<i class='icon-remove'>"."</i>"."</button></a>"."<a href='student_msg.php?regno=".$row['registration']."'><button class='btn edit'>"."<i class='fa fa-commenting' aria-hidden='true'></i>"."</i>"."</button></a>"."</td>";
		echo "</tr>";
   $id++; }

?> </tbody>      
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
        </div>   



        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
    </body>
</html>