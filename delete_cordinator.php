<?php 
include('config.php'); 
?>
<?php

$id=$_GET['id'];

$qry="delete from add_cordinator where id='$id'";

mysqli_query($conn,$qry);
mysqli_close($conn);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=reports_cordinator.php">';
?>