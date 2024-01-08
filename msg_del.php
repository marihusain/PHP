<?php 
include('config.php'); 
session_start();
if(!isset($_SESSION['admin_id'])){
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';}


?>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry="delete from director_mssg where id='$id'";
mysqli_query($conn,$qry);
mysqli_close($conn);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_directormssg.php">';

}
if(isset($_GET['abt_id']))
{
$abt_id=$_GET['abt_id'];
$qry="delete from about_us where abt_id='$abt_id'";
mysqli_query($conn,$qry);
mysqli_close($conn);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_aboutus.php">';

}

if(isset($_GET['news_id']))
{
$news_id=$_GET['news_id'];
$qry="delete from newsupdate where news_id='$news_id'";
mysqli_query($conn,$qry);
mysqli_close($conn);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_newsupdate.php">';

}

?>