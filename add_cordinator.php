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

        <title>RGCSM - Add Cordinator</title>

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


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

		<script src="js/selector.js"></script>

		<script>
        $(function(){
            $('#ss').hide();
            $('#sd').hide();
            $('body select[name=cordinator_type]').change(function(){
        var wo = this.value;
        if(wo=='State Cordinator'){
            $('#ss').show();
            $('#sd').hide();
        }else{
            $('#ss').hide();
            $('#sd').show();
        }
      });
        });
      

        </script>

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

                        <h1>Add Cordinator</h1>

                        <h6>All Fields are Mandatory</h6><hr/>

						<?php

						if(isset($_POST['cordinator'])){
                            $cor = "";
                            if($_POST['cordinator_type']=='State Cordinator'){
                                $cor = implode($_POST['state'],",");
                            }
                                else{
                                    $cor = implode($_POST['cordinator_distt'],",");
                                }
                            
$qry="insert into add_cordinator

(id,cordinator_name,

cordinator_type,

cordinator_distt,

cordinator_address,

cordinator_contact,

cordinator_email) 

values('','".$_POST['cordinator_name']."',

'".$_POST['cordinator_type']."',

'".$cor."',

'".$_POST['cordinator_address']."',

'".$_POST['cordinator_contact']."',

'".$_POST['cordinator_email']."')";

if(mysqli_query($conn,$qry))

{

echo "<h3 align='center'>Cordinator has been added..</h1>";

}

else

{

echo "data connection error";

}

mysqli_close($conn);

					

}		

						

?>

                        <form class="form-horizontal" action="" method="post">

                        <table align="center" width="400" height="400">

						<tr><td>Cordinator Name:</td><td><input type="text" name="cordinator_name" required/></td></tr>

                        <tr><td>Cordinator Type:</td><td>

						<select name="cordinator_type" required/>

						<option value=""></option>

					    <option value="State Cordinator">State Cordinator</option>
                        <option value="Zonal Cordinator">Zonal Cordinator</option>
						<option value="District Cordinator">District Cordinator</option>

						

						</select>

						</td></tr>
                        <tr id="ss"><td>Cordinator State:</td><td>
                            <select name='state[]' multiple title="Select multiple by holding Ctrl button" style="height:200px;">
                
                <?php
                include '../include/config.php';
                $sq="select distinct(`state`) from `infos` order by `state` asc";
                $y=mysqli_query($conn,$sq);
                while($t=mysqli_fetch_array($y)){
                echo "<option value='".$t[0]."'>$t[0]</option>";
                }
                
                ?>
                </select>
                        </td></tr>

                        <tr id="sd"><td>Cordinator Distt:</td><td>
<select name='cordinator_distt[]' multiple title="Select multiple by holding Ctrl button" style="height:200px;">
                
                <?php
                
                $sq="select distinct(`city`) from `infos` order by `state` asc";
                $y=mysqli_query($conn,$sq);
                while($t=mysqli_fetch_array($y)){
                echo "<option value='".$t[0]."'>$t[0]</option>";
                }
                
                ?>
                </select>
                        </td></tr>

                        <tr><td>Cordinator Address:</td><td><input type="text" name="cordinator_address" required/></td></tr>

                        <tr><td>Cordinator Contact:</td><td><input type="text" name="cordinator_contact" required/></td></tr>

                        <tr><td>Cordinator Email:</td><td><input type="email" name="cordinator_email" required/></td></tr>

                        <tr><td align="center" colspan="2"><input type="submit" value="Add Cordinator" name="cordinator"/></td></tr>

                        

						</table>

						</form>

						

                        

                        

</div></div></div></div></div>

        <!-- END WRAP -->



        <!-- BEGIN FOOTER -->

        <div id="footer">

         <?php include("footer.php"); ?>

        </div> 

		<script language="javascript">

            populateCountries("country", "state");

            populateCountries("country2");

</script>

</body>

</html>

