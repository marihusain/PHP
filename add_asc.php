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

        <title>RGCSM - Add ASC</title>

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

		<script src="js/selector.js"></script>

		

		<?php include "datepicker.php"?>

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

                        <h1>Add ASC centre</h1>

                        <h6>All Fields are Mandatory</h6><hr/>

                        <form class="form-horizontal" action="add_asc_submit.php" method="post">

                        

                        <div class="control-group">

                        <label class="control-label">ASC centre Name</label>              

                        <div class="controls with-tooltip">

                        <input type="text" name="asc_centre_name" class="span6 input-tooltip" data-placement="bottom" required/>

                        </div>

                        <br/>

						

                        

                        <div class="control-group">

                        <label for="asc_user_id" class="control-label">ASC User ID</label>              

                        <div class="controls with-tooltip">

                        <input type="text" name="asc_user_id" class="span6 input-tooltip" data-placement="bottom" required/>

                        </div>

                        <br/>

						

                        <div class="control-group">

                        <label for="asc_user_password" class="control-label">ASC User Password</label>              

                        <div class="controls with-tooltip">

                        <input type="password" name="asc_user_password" class="span6 input-tooltip" data-placement="bottom" required/>

                        </div>

                        <br/>

						

						<div class="control-group">

                        <label class="control-label">ASC centre Code</label>              

                        <div class="controls with-tooltip">

                        <input type="text" name="asc_state_code" value="RGCSM" readonly="readonly"/><input type="text" name="asc_number" placeholder="Enter Code(EX:MP01)"/>

                        </div>

                        <br/>

                        <div class="control-group">

                        <label for="asc_director_name" class="control-label">ASC Director Name</label>              

                        <div class="controls with-tooltip">

                        <input type="text" name="asc_director_name" class="span6 input-tooltip" data-placement="bottom" required/>

                        </div>

                        <br/>

                        <div class="control-group">

                        <label for="asc_centre_address" class="control-label">ASC centre Address</label>              

                        <div class="controls with-tooltip">

                        <input type="text" name="asc_centre_address" class="span6 input-tooltip" data-placement="bottom" required/>

                        </div>

                        <br/>

						<div class="control-group">

                        <label for="asc_user_id" class="control-label">ASC State</label>              

                        <div class="controls with-tooltip">

                        <select id="state" name="asc_state">
                            <?php
                include './config.php';
                $sq="select distinct(`state`) from `infos` order by `state` asc";
                $y=mysqli_query($conn,$sq);
                while($t=mysqli_fetch_array($y)){
                echo "<option value='".base64_encode($t[0])."'>$t[0]</option>";
                }
                
                ?>
                        </select>

						</div>

                        <br/>

                        

						<div class="control-group">

                        <label for="asc_contact_number" class="control-label">ASC City</label>              

                        <div class="controls with-tooltip">

                        <select name="asc_city" id="city"></select>

						</div>

                        <br/>

						

						<div class="control-group">

                        <label for="asc_contact_number" class="control-label">ASC Contact Number</label>              

                        <div class="controls with-tooltip">

                        <input type="text" name="asc_contact_number" class="span6 input-tooltip" data-placement="bottom" required/>

                        </div>

                        <br/>

						

                        

						

                        

						<div class="control-group">

                        <label for="asc_centre_email" class="control-label">ASC Email Id</label>              

                        <div class="controls with-tooltip">

                        <input type="text" name="asc_centre_email" class="span6 input-tooltip" data-placement="bottom" required/>

                        </div>

                        <br/>

						

						<div class="control-group">

                        <label for="asc_centre_email" class="control-label">ASC Aggreement Date</label>              

                        <div class="controls with-tooltip">

                        <input id="datepicker" name="asc_joining" required/>

                        </div>

                        <br/>

						

						<div class="control-group">

                        <label for="asc_centre_email" class="control-label">ASC Renewal Date</label>              

                        <div class="controls with-tooltip">

                        <input class="datepicker" name="asc_due" required/>

                        </div>

                        <br/>

                                                 

                        

						<div class="control-group">

                        <div class="controls with-tooltip">

                        <input type="submit" name="submit" class="span6 input-tooltip" data-placement="bottom" required/>

                        </div>

                        

                        </form>

                        

                        

</div></div></div></div></div></div></div></div></div></div></div></div>

        <!-- END WRAP -->



        <!-- BEGIN FOOTER -->

        <div id="footer">

         <?php include("footer.php"); ?>

        </div> 

		<script language="javascript">

            populateCountries("country", "state");

            populateCountries("country2");

</script>

<script>
$(function(){

$('select#state').change(function(){
var e=$(this).val();
//alert(e);
var ur='../institute/fetch_city1.php?s='+e;
$('select#city').load(ur);
});

});
</script>

</body>

</html>

