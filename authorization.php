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
                <!-- .outer span6 input-tooltip-->
                <div class="container-fluid outer">
                    <div class="row-fluid">                   
                        <div class="span12 inner" >
                        <h1>Request For Authorisation</h1>
                        <h6>All Fields are Mandatory</h6><hr/>
						
						
						<form action="request.php" method="post">
					   <table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>Name Of Study Centre:</td>
    <td><input type="text" class="" name="asc_centre" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Director Name:</td>
    <td><input type="text" class="" name="asc_director"  /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><textarea rows="5" cols="10" name="asc_address"></textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>State:</td>
    <td><select id="country" name="asc_state"></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>City:</td>
    <td><select name="asc_city" id="state"></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pin Code:</td>
    <td><input type="text" name="asc_pincode" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="email" name="asc_email" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Established Year:</td>
    <td>
	
	
	<select name="asc_year">
	<option>1980</option>
	<option>1981</option>
	<option>1982</option>
	<option>1983</option>
	<option>1984</option>
	<option>1985</option>
	<option>1986</option>
	<option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>
	<option>1998</option>
	<option>1999</option>
	<option>2000</option>
	<option>2001</option>
	<option>2002</option>
	<option>2003</option>
	<option>2004</option>
	<option>2005</option>
	<option>2006</option>
	<option>2008</option>
	<option>2009</option>
	<option>2010</option>
	<option>2011</option>
	<option>2012</option>
	<option>2013</option>
	<option>2014</option>
	<option>2015</option>
	<option>2016</option>
	<option>2017</option>
	<option>2018</option>
	<option>2019</option>
	<option>2020</option>
	</select>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Class of Study Centre:</td>
    <td><input type="radio" name="asc_class_type" />Software
	<input type="radio" name="asc_class_type" />Hardware
	<input type="radio" name="asc_class_type" />Both
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><h5>Total Space Available in Study Centre</h5></td>
    
  </tr>
  <tr>
    <td>Number of Computer:</td>
    <td><input type="text" name="asc_computer" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Class Room:</td>
    <td><input type="text" name="asc_classroom" /></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>Lab</td>
    <td><input type="text" name="asc_lab" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Library:</td>
    <td><input type="text" name="asc_library" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Reception:</td>
    <td><input type="text" name="asc_reception" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Staff:</td>
    <td><select name="asc_staff">
	<option>YES</option>
	<option>NO</option>
	</select></td>
    <td>&nbsp;</td>
  </tr>
<tr>
    <td>Internet Connection:</td>
    <td><select name="asc_internet">
	<option>YES</option>
	<option>NO</option>
	</select></td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td>Business Type:</td>
    <td><select name="asc_business_type">
	<option>YES</option>
	<option>NO</option>
	
	</select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th colspan="3">No of Faculty/ Qualification</th>
    </tr>
  <tr>
    <td><input type="text" name="fac1" placeholder="Name of Faculty" /></td>
    <td colspan="2"><input type="text" name="qua1" placeholder="Qualification"/></td>
  </tr>
  <tr>
     <td><input type="text" name="fac2" placeholder="Name of Faculty"/></td>
    <td colspan="2"><input type="text" name="qua2" placeholder="Qualification"/></td>
  </tr>
  <tr>
    <td><input type="text" name="fac3" placeholder="Name of Faculty"/></td>
    <td colspan="2"><input type="text" name="qua3" placeholder="Qualification"/></td>
  </tr>
    <tr><td colspan="3" align="center"><input type="submit" name="submit" /></td></tr>
  <tr><td colspan="3" align="center" height="100"></td></tr>

</table>
	</form>
                 
                        
</div></div></div></div></div></div></div></div></div></div></div></div></div>
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
