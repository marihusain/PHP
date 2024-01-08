<?php
if($_GET){
$c=$_GET['c'];
$s=$_GET['s'];
include('config.php'); 
$seq="select * from `add_subject` where `course`='$c' and `sem`='$s'";
$seqe=mysqli_query($conn,$seq);
$row=mysqli_fetch_assoc($seqe);
echo "
<fieldset>

						<legend>Enter Subject Details</legend>

						<tr><th>Subject Name</th><th>Maximum Marks</th><th>Minimum Marks</th><th>Obtain Marks</th></tr>

						<tr><td>

					    <input type='text' name='sub1' value='".$row['sub1']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='max1' class='max' value='".$row['max1']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='min1' class='min' value='".$row['min1']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='obt1' class='obt' placeholder='Enter marks'/></td>

						</tr>

                        <tr><td>

					    <input type='text' name='sub2' value='".$row['sub2']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='max2' class='max' value='".$row['max2']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='min2' class='min' value='".$row['min2']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='obt2' class='obt' placeholder='Enter marks'/></td>

						

						</tr>

                        <tr><td>

					    <input type='text' name='sub3' value='".$row['sub3']." 'tabindex='-1' readonly/></td>

						<td><input type='text' name='max3' class='max' value='".$row['max3']." 'tabindex='-1' readonly/></td>

					    <td><input type='text' name='min3' class='min' value='".$row['min3']." 'tabindex='-1' readonly/></td>

						<td><input type='text' name='obt3' class='obt' placeholder='Enter marks'/></td>

						

						</tr>

                        <tr><td>

					    <input type='text' name='sub4' value='".$row['sub4']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='max4' class='max' value='".$row['max4']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='min4' class='min' value='".$row['min4']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='obt4' class='obt' placeholder='Enter marks'/></td>

						

						</tr>

                        <tr><td>

					    <input type='text' name='sub5' value='".$row['sub5']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='max5' class='max' value='".$row['max5']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='min5' class='min' value='".$row['min5']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='obt5' class='obt' placeholder='Enter marks'/></td>

						

						</tr>

                        <tr><td>

					    <input type='text' name='sub6' value='".$row['sub6']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='max6' class='max' value='".$row['max6']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='min6' class='min' value='".$row['min6']." ' tabindex='-1' readonly/></td>

						<td><input type='text' name='obt6' class='obt' placeholder='Enter marks'/></td>

						

						</tr>

                        <tr><td>

					    <input type='text' name='sub7' value='".$row['sub7']." 'tabindex='-1' readonly/></td>

						<td><input type='text' name='max7' class='max' value='".$row['max7']." 'tabindex='-1' readonly/></td>

						<td><input type='text' name='min7' class='min' value='".$row['min7']." 'tabindex='-1' readonly/></td>

						<td><input type='text' name='obt7' class='obt' placeholder='Enter marks'/></td>

						

						</tr>


                        <tr><td>Total Marks</td><td><span class='total1'></span></td><td><span class='total2'></span></td><td><span class='total3'></span></td></tr>

						</fieldset>
						<tr><td colspan='3' align='center'><input type='submit' value='Add Result' class='submit'></td></tr>

						";
						
						}
else{
echo "No subject available";
} ?>