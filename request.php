<?php
session_start();
include "config.php"
?>
<html>
<head>
<style type="text/css">
table tr
{
text-align:left;

}
<style>
@media print {
.header, .hide 
{ visibility: hidden ;

}
}
</style>
<script>
function myFunction() {
    window.print();
}
</script>

</head>
<body>
<?php
if(isset($_POST['submit'])){
$asc_centre=$_POST['asc_centre'];
$asc_director=$_POST['asc_director'];
$asc_address=$_POST['asc_address'];
$asc_state=$_POST['asc_state'];
$asc_city=$_POST['asc_city'];
$asc_pincode=$_POST['asc_pincode'];
$asc_email=$_POST['asc_email'];
$asc_year=$_POST['asc_year'];
$asc_class_type=$_POST['asc_class_type'];
$asc_computer=$_POST['asc_computer'];
$asc_classroom=$_POST['asc_classroom'];
$asc_lab=$_POST['asc_lab'];
$asc_library=$_POST['asc_library'];
$asc_reception=$_POST['asc_reception'];
$asc_staff=$_POST['asc_staff'];
$asc_internet=$_POST['asc_internet'];
$asc_business_type=$_POST['asc_business_type'];
$asc_fac1=$_POST['fac1'];
$asc_qua1=$_POST['qua1'];
$asc_fac2=$_POST['fac2'];
$asc_qua2=$_POST['qua2'];
$asc_fac3=$_POST['fac3'];
$asc_qua3=$_POST['qua3'];



$qry="insert into authorization(id,asc_centre,asc_director,asc_address,asc_state,asc_city,asc_pincode,asc_email,asc_year,asc_class_type,asc_computer,asc_classroom,asc_lab,asc_library,asc_reception,asc_staff,asc_internet,asc_business_type,asc_fac1,asc_qua1,asc_fac2,asc_qua2,asc_fac3,asc_qua3) values('','$asc_centre','$asc_director','$asc_address','$asc_state','$asc_city','$asc_pincode','$asc_email','$asc_year','$asc_class_type','$asc_computer','$asc_classroom','$asc_lab','$asc_library','$asc_reception','$asc_staff','$asc_internet','$asc_business_type','$asc_fac1','$asc_qua1','$asc_fac2','$asc_qua2','$asc_fac3','$asc_qua3')";

if(mysqli_query($conn,$qry)){

echo "<center>Authorization application submitted successful. We will contact you soon..</center>";
}
else
{
echo "Error";
}
mysqli_close($conn);
}

?></body>
</html>





