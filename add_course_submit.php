<?php 
include('config.php');
?>

<?php


if(isset($_POST['submit']))
 {
        $course_id=$_POST['course_id'];
        $course_name=$_POST['course_name'];
        $course_fees=$_POST['course_fees'];
		//$pay_to_rgcsm1=$_POST['pay_to_rgcsm1'];
		//$pay_to_rgcsm2=$_POST['pay_to_rgcsm2'];		$pay_to_rgcsm1="";$pay_to_rgcsm2="";
        $course_eligibility=$_POST['course_eligibility'];
        $course_description=$_POST['course_description'];
        $course_duration=$_POST['course_duration'];
		$sub1=$_POST['sub1'];
		$max1=$_POST['max1'];
		$min1=$_POST['min1'];
		$sub2=$_POST['sub2'];
		$max2=$_POST['max2'];
		$min2=$_POST['min2'];
		$sub3=$_POST['sub3'];
		$max3=$_POST['max3'];
		$min3=$_POST['min3'];
		$sub4=$_POST['sub4'];
		$max4=$_POST['max4'];
		$min4=$_POST['min4'];
		$sub5=$_POST['sub5'];
		$max5=$_POST['max5'];
		$min5=$_POST['min5'];
		$sub6=$_POST['sub6'];
		$max6=$_POST['max6'];
		$min6=$_POST['min6'];
		$sub7=$_POST['sub7'];
		$max7=$_POST['max7'];
		$min7=$_POST['min7'];
		$sub8=$_POST['sub8'];
		$max8=$_POST['max8'];
		$min8=$_POST['min8'];
           
$sql = "INSERT INTO add_course(course_id,course_name,course_fees, pay_to_rgcsm1, pay_to_rgcsm2, course_eligibility,course_description,course_duration) VALUES('$course_id','$course_name','$course_fees','$pay_to_rgcsm1','$pay_to_rgcsm2','$course_eligibility','$course_description','$course_duration')";

if (mysqli_query($conn,$sql)) 
{
echo "<script>alert('COURSE Added Succesfully.'); </script>"; 
} 
else 
{
echo "Error: <br>" . mysqli_error($conn);
}
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=reports_courses.php">';

}

?>
