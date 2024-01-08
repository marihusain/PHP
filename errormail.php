<?php
session_start();
if(!isset($_SESSION['admin_id'])){
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
}

echo "<script>alert('Oops Error'); </script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dashboard.php">';    

?>