<?php

include 'config.php';
?>

<?php

$course_id=$_GET['course_id'];


$qry="delete from add_course where course_id='$course_id'";

mysqli_query($conn,$qry);
mysqli_close($conn);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=reports_courses.php">';
?>