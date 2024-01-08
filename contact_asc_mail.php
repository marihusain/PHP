<?php 
include('config.php'); 
session_start();
if(!isset($_SESSION['admin_id'])){
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
}

?>
<?php
echo "<script>alert('Mailed ASC Succesfully.'); </script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=errormail.php">';    

?>