<?php
include 'config.php';
session_start();
if(!isset($_SESSION['admin_id'])){
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
}

?>
<?php


$course_id=$_POST['course_id'];
$course_name=$_POST['course_name'];
$course_fees=$_POST['course_fees'];
$pay_to_rgcsm1="";
$pay_to_rgcsm2="";
$course_eligibility=$_POST['course_eligibility'];
$course_description=$_POST['course_description'];
$course_duration=$_POST['course_duration'];$cos=(int) $course_duration;
$sem=1;$sub11=$_POST['sub11'];$sub12=$_POST['sub12'];$sub13=$_POST['sub13'];$sub14=$_POST['sub14'];$sub15=$_POST['sub15'];$sub16=$_POST['sub16'];$sub17=$_POST['sub17'];$min11=$_POST['min11'];$min12=$_POST['min12'];$min13=$_POST['min13'];$min14=$_POST['min14'];$min15=$_POST['min15'];$min16=$_POST['min16'];$min17=$_POST['min17'];$max11=$_POST['max11'];$max12=$_POST['max12'];$max13=$_POST['max13'];$max14=$_POST['max14'];$max15=$_POST['max15'];$max16=$_POST['max16'];$max17=$_POST['max17'];$sq="insert into `add_subject`(`course`, `sub7`, `min7`, `max7`, `sem`, `sub1`, `min1`, `max1`, `sub2`, `min2`, `max2`, `sub3`, `min3`, `max3`, `sub4`, `min4`, `max4`, `sub5`, `min5`, `max5`, `sub6`, `min6`, `max6`) values('$course_id','$sub17','$min17','$max17','$sem','$sub11','$min11','$max11','$sub12','$min12','$max12','$sub13','$min13','$max13','$sub14','$min14','$max14','$sub15','$min15','$max15','$sub16','$min16','$max16') ON DUPLICATE KEY UPDATE `sub1`='$sub11',`sub2`='$sub12',`sub3`='$sub13',`sub4`='$sub14',`sub5`='$sub15',`sub6`='$sub16',`sub7`='$sub17',`min1`='$min11',`min2`='$min12',`min3`='$min13',`min4`='$min14',`min5`='$min15',`min6`='$min16',`min7`='$min17',`max1`='$max11',`max2`='$max12',`max3`='$max13',`max4`='$max14',`max5`='$max15',`max6`='$max16',`max7`='$max17'";mysqli_query($conn,$sq);if($cos>6){$sem=2;$sub21=$_POST['sub21'];$sub22=$_POST['sub22'];$sub23=$_POST['sub23'];$sub24=$_POST['sub24'];$sub25=$_POST['sub25'];$sub26=$_POST['sub26'];$sub27=$_POST['sub27'];$min21=$_POST['min21'];$min22=$_POST['min22'];$min23=$_POST['min23'];$min24=$_POST['min24'];$min25=$_POST['min25'];$min26=$_POST['min26'];$min27=$_POST['min27'];$max21=$_POST['max21'];$max22=$_POST['max22'];$max23=$_POST['max23'];$max24=$_POST['max24'];$max25=$_POST['max25'];$max26=$_POST['max26'];$max27=$_POST['max27'];$sq="insert into `add_subject` (`course`, `sub7`, `min7`, `max7`, `sem`, `sub1`, `min1`, `max1`, `sub2`, `min2`, `max2`, `sub3`, `min3`, `max3`, `sub4`, `min4`, `max4`, `sub5`, `min5`, `max5`, `sub6`, `min6`, `max6`) values('$course_id','$sub27','$min27','$max27','$sem','$sub21','$min21','$max21','$sub22','$min22','$max22','$sub23','$min23','$max23','$sub24','$min24','$max24','$sub25','$min25','$max25','$sub26','$min26','$max26') ON DUPLICATE KEY UPDATE `sub1`='$sub21',`sub2`='$sub22',`sub3`='$sub23',`sub4`='$sub24',`sub5`='$sub25',`sub6`='$sub26',`sub7`='$sub27',`min1`='$min21',`min2`='$min22',`min3`='$min23',`min4`='$min24',`min5`='$min25',`min6`='$min26',`min7`='$min27',`max1`='$max21',`max2`='$max22',`max3`='$max23',`max4`='$max24',`max5`='$max25',`max6`='$max26',`max7`='$max27'";mysqli_query($conn,$sq);}

$qry="update add_course set course_name='$course_name', course_fees='$course_fees', pay_to_rgcsm1='$pay_to_rgcsm1', pay_to_rgcsm2='$pay_to_rgcsm2', course_eligibility='$course_eligibility', course_description='$course_description', course_duration='$course_duration' where course_id='$course_id'";

if(mysqli_query($conn,$qry)){
echo "<script>alert('Updated Succesfully.'); </script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=reports_courses.php">';    
}
else
{
echo "Error:".mysqli_error($conn);
}
mysqli_close($conn);
?>
             