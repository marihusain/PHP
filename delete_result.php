<?php 
include('config.php'); 
session_start();
?>
<?php

$reg=$_GET['reg'];

$qry="delete from result where registration='$reg'";

mysqli_query($conn,$qry);

mysqli_close($conn);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=show_result.php">';
?>