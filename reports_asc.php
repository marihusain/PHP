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
                                        <div style="width:100%; height: 80vh;overflow:auto;">
                                            <table class="table table-bordered responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ASC Center Name</th>
                                                        <th>ASC User ID</th>
                                                        <th>ASC User Password </th>
                                                        <th>ASC Code </th>
                                                        
													    <th>ASC Director Name</th>
                                                        <th>ASC Centre Address</th>
														<th>ASC Centre State</th>
														<th>ASC Centre City</th>
                                                        <th>ASC Contact Number</th>
                                                        
                                                        <th>ASC Centre Email</th>
														<th>ASC Joining Date</th>
														<th>ASC Due Date</th>
														
                                                        <th>Action (Edit / Delete)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php 



include "config.php";
$qry="select * from add_asc"; 
$result=mysqli_query($conn,$qry); 
$id=1;
while($row=mysqli_fetch_array($result))

	{
       echo "<tr>";
        echo "<td>".$id."</td>";
		echo "<td>".$row['asc_centre_name']."</td>";
		echo "<td>".$row['asc_user_id']."</td>";
		echo "<td>".$row['asc_user_password']."</td>";
		echo "<td>".$row['asc_centre_code']."</td>";
		echo "<td>".$row['asc_director_name']."</td>";
		echo "<td>".$row['asc_centre_address']."</td>";
		if (strpos($row['asc_state'], '=') !== false) {
    echo "<td>".base64_decode($row['asc_state'])."</td>";
}else{echo "<td>".$row['asc_state']."</td>";}
		echo "<td>".$row['asc_city']."</td>";
		echo "<td>".$row['asc_contact_number']."</td>";
		
		echo "<td>".$row['asc_centre_email']."</td>";
		echo "<td>".$row['asc_joining_date']."</td>";
		echo "<td>".$row['asc_due_date']."</td>";
		echo "<td>"."<a href='edit_asc.php?asc_code=".$row['asc_centre_code']."'><button>Edit</button></a>". "<a href='delete_asc.php?asc_code=".$row['asc_centre_code']."'><button onClick='return sure();'>Delete</button></a>"."</td>";
		
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
        </div>    </body>
</html>
