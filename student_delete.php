<?php
session_start();
if(!isset($_SESSION['admin_id'])){
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';}


$regno=$_GET['regno'];

include "config.php";
$qry="delete from admission where registration='$regno'";

mysqli_query($conn,$qry);
mysqli_close($conn);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=reports_students.php">';
?>