<?php

include "config.php";

$totalmax=$_POST['max1']+$_POST['max2']+$_POST['max3']+$_POST['max4']+$_POST['max5']+$_POST['max6']+$_POST['max7'];
$totalmin=$_POST['min1']+$_POST['min2']+$_POST['min3']+$_POST['min4']+$_POST['min5']+$_POST['min6']+$_POST['min7'];
$totalobt=$_POST['obt1']+$_POST['obt2']+$_POST['obt3']+$_POST['obt4']+$_POST['obt5']+$_POST['obt6']+$_POST['obt7'];

$percent=($totalobt*100)/$totalmax;//echo "total max=$totalmax<br/>Total min=$totalmin<br/>Total obtained=$totalobt and percent is: $percent";

if($percent>=40)
{
  $status='passed';
}
else
{
$status='Failed';
}


$qry="INSERT INTO `result`(`id`, `registration`, `student_name`, `course_name`, `course_duration`, `semester`,`status`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `max1`, `max2`, `max3`, `max4`, `max5`, `max6`, `max7`, `min1`, `min2`, `min3`, `min4`, `min5`, `min6`, `min7`, `obt1`, `obt2`, `obt3`, `obt4`, `obt5`, `obt6`, `obt7`,`totalmax`, `totalmin`, `totalobt`, `percentage`)
values('0',
'".$_POST['reg_no']."',
'".$_POST['student_name']."',
'".$_POST['course_name']."',
'".$_POST['course_duration']."',
'".$_POST['semester']."','$status',
'".$_POST['sub1']."','".$_POST['sub2']."','".$_POST['sub3']."','".$_POST['sub4']."','".$_POST['sub5']."','".$_POST['sub6']."','".$_POST['sub7']."',
'".$_POST['max1']."','".$_POST['max2']."','".$_POST['max3']."','".$_POST['max4']."','".$_POST['max5']."','".$_POST['max6']."','".$_POST['max7']."',
'".$_POST['min1']."','".$_POST['min2']."','".$_POST['min3']."','".$_POST['min4']."','".$_POST['min5']."','".$_POST['min6']."','".$_POST['min7']."',
'".$_POST['obt1']."','".$_POST['obt2']."','".$_POST['obt3']."','".$_POST['obt4']."','".$_POST['obt5']."','".$_POST['obt6']."','".$_POST['obt7']."','$totalmax','$totalmin','$totalobt','$percent'
)";

//-------------------------------insert image--------------------------------------------------------
$roll=$_POST['reg_no'];
$sem=$_POST['semester'];

$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$roll.$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

$img=$roll.$_FILES["file"]["name"];
$query="INSERT INTO `result_image`(`roll_no`, `sem`, `image_path`) VALUES ('$roll','$sem','$img')";
mysqli_query($conn,$query);

//-------------------------------insert image End--------------------------------------------------------

if(mysqli_query($conn,$qry)){
echo "<script>alert('RESULT Added Succesfully.'); </script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=add_result.php">';
}
else
{
echo "Data Connection Error".mysqli_error($conn);
}
mysqli_close($conn);
?>