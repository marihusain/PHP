<?php
include "config.php";
session_start();
if(!isset($_SESSION['admin_id'])){
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';}

?>
<?php


            
			$registration=$_POST['registration'];
			$roll_no=$_POST['roll_no'];
			$asc_centre_code=$_POST['asc_centre_code'];
			$course_name=$_POST['course_name'];
			$course_fees=$_POST['course_fees'];
			$course_duration=$_POST['course_duration'];
			$course_id=$_POST['course_id'];
			$joining_date=$_POST['joining_date'];
			$student_name=$_POST['student_name'];
			$father_name=$_POST['father_name'];
			$nationality=$_POST['nationality'];
			$category=$_POST['category'];
			$gender=$_POST['gender'];
			$address=$_POST['address'];
			$state=$_POST['state'];
			$city=$_POST['city'];
			$dob=$_POST['dob'];
			$email=$_POST['email'];
			$contact_number=$_POST['contact_number'];
			$payment_amount=$_POST['payment_amount'];
			$payment_dd=$_POST['payment_dd'];
			$payment_date=$_POST['payment_date'];
			$payment_bank_name=$_POST['payment_bank_name'];
			$status=$_POST['status'];



$qry="update admission set registration='$registration', roll_no='$roll_no', asc_centre_code='$asc_centre_code', course_name='$course_name', course_fees='$course_fees', course_duration='$course_duration', course_id='$course_id', joining_date='$joining_date', student_name='$student_name', father_name='$father_name', nationality='$nationality', category='$category', gender='$gender', address='$address', state='$state', city='$city', dob='$dob', email='$email', contact_number='$contact_number', payment_amount='$payment_amount', payment_dd='$payment_dd', payment_date='$payment_date', payment_bank_name='$payment_bank_name', status='$status' where registration='$registration'";

if(mysqli_query($conn,$qry)){

echo "<script>alert('Updated Succesfully.'); </script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=reports_students.php">';    

}
else
{
echo "Error:".mysql_error($conn,$con);
}
mysql_close($conn);







?>
             