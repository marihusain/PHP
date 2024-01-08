<?php 
include('config.php'); 
?>
<?php


if(isset($_POST['submit']))
 {     
        
        $asc_centre_name= $_POST['asc_centre_name'];
        $asc_user_id=$_POST['asc_user_id'];   
        $asc_user_password=$_POST['asc_user_password'];
		$asc_state_code=$_POST['asc_state_code'];
        $asc_number=$_POST['asc_number'];
		$asc_centre_code=$asc_state_code.$asc_number;
        $asc_director_name=$_POST['asc_director_name'];
        $asc_centre_address=$_POST['asc_centre_address'];
        $asc_state=$_POST['asc_state'];
        $asc_city=$_POST['asc_city'];		
		$asc_contact_number=$_POST['asc_contact_number'];
        $asc_centre_email=$_POST['asc_centre_email'];
		$asc_joining_date=$_POST['asc_joining'];
		$asc_due_date=$_POST['asc_due'];

 $sql ="INSERT INTO add_asc (id,asc_centre_name, asc_user_id, asc_user_password, asc_centre_code, asc_director_name, asc_centre_address, asc_state, asc_city,asc_contact_number,asc_centre_email,asc_joining_date,asc_due_date) VALUES('','$asc_centre_name', '$asc_user_id', '$asc_user_password', '$asc_centre_code', '$asc_director_name','$asc_centre_address','$asc_state','$asc_city','$asc_contact_number','$asc_centre_email','$asc_joining_date','$asc_due_date')";





if (mysqli_query($conn,$sql)) 
{
echo "<script>alert('ASC Added Succesfully.'); </script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=reports_asc.php">';
} 
else 
{
echo "error";
}
mysqli_close($conn);
}
?>
