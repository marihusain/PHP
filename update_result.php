<?php

include "config.php";

$totalmax=$_POST['max1']+$_POST['max2']+$_POST['max3']+$_POST['max4']+$_POST['max5']+$_POST['max6']+$_POST['max7']+$_POST['max8']+$_POST['max8'];
$totalmin=$_POST['min1']+$_POST['min2']+$_POST['min3']+$_POST['min4']+$_POST['min5']+$_POST['min6']+$_POST['min7']+$_POST['min8'];
$totalobt=$_POST['obt1']+$_POST['obt2']+$_POST['obt3']+$_POST['obt4']+$_POST['obt5']+$_POST['obt6']+$_POST['obt7']+$_POST['obt8'];

$percent=($totalobt*100)/$totalmax;

if($percent>=40)
{
  $status='passed';
}
else
{
$status='Failed';
}


$qry="update result set max1='".$_POST['max1']."',max2='".$_POST['max2']."',max3='".$_POST['max3']."',max4='".$_POST['max4']."',max5='".$_POST['max5']."',max6='".$_POST['max6']."',max7='".$_POST['max7']."',max8='".$_POST['max8']."',min1='".$_POST['min1']."',min2='".$_POST['min2']."',min3='".$_POST['min3']."',min4='".$_POST['min4']."',min5='".$_POST['max5']."',max6='".$_POST['max6']."',max7='".$_POST['max7']."',max8='".$_POST['max8']."',obt1='".$_POST['obt1']."',obt2='".$_POST['obt2']."',obt3='".$_POST['obt3']."',obt4='".$_POST['obt4']."',obt5='".$_POST['obt5']."',obt6='".$_POST['obt6']."',obt7='".$_POST['obt7']."',obt8='".$_POST['obt8']."',totalmax='$totalmax',totalmin='$totalmin',totalobt='$totalobt',percent='$percent',status='$status'";

if(mysqli_query($conn,$qry)){
echo "<script>alert('RESULT Added Succesfully.'); </script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=show_result.php">';    


}
else
{
echo "Data Connection Error";
}
mysqli_close($conn);
?>