<?php
include "config.php";
session_start();
if(!isset($_SESSION['admin_id'])){
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';

}

?>
<?php


$asc_centre_name=$_POST['asc_centre_name'];
$asc_user_id=$_POST['asc_user_id'];

//$asc_user_password=md5($_POST['asc_user_password']);
$asc_user_password=$_POST['asc_user_password'];

$asc_centre_code=$_POST['asc_centre_code'];
$asc_director_name=$_POST['asc_director_name'];
$asc_centre_address=$_POST['asc_centre_address'];
$asc_state=$_POST['asc_state'];
$asc_city=$_POST['asc_city'];
$asc_contact_number=$_POST['asc_contact_number'];
$asc_centre_email=$_POST['asc_centre_email'];
$asc_joining_date=$_POST['asc_joining_date'];
$asc_due_date=$_POST['asc_due_date'];



$qry="update add_asc set asc_centre_name='$asc_centre_name', asc_user_id='$asc_user_id', asc_user_password='$asc_user_password', asc_director_name='$asc_director_name', asc_centre_address='$asc_centre_address', asc_state='$asc_state', asc_city='$asc_city', asc_contact_number='$asc_contact_number', asc_centre_email='$asc_centre_email', asc_joining_date='$asc_joining_date', asc_due_date='$asc_due_date' where asc_centre_code='$asc_centre_code'";

if(mysqli_query($conn,$qry)){
echo "<script>alert('Updated Succesfully.'); </script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=reports_asc.php">';    

}
else
{
echo "Error:".mysqli_error($conn);
}
mysqli_close($conn);







?>