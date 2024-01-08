<?php 
include('config.php'); 
?>
<?php

$asc_code=$_GET['asc_code'];

$qry="delete from add_asc where asc_centre_code='$asc_code'";

mysqli_query($conn,$qry);
mysqli_close($conn);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=reports_asc.php">';
?>