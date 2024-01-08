<?php
include "config.php";
?>

<?php

$reg_no=$_GET['reg'];

$qry="update exam set status='approved' where student_reg_number='$reg_no'";
mysqli_query($conn,$qry);
//mysqli_close($conn);

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=exam_details.php">';

?>