<?php
include "config.php";
session_start();
 
if(isset($_POST['submit'])){
$admin_id=$_POST['admin_id'];
$admin_password=$_POST['admin_password'];


$qry="select * from admin where admin_id='$admin_id' and admin_password='$admin_password'";
$result=mysqli_query($conn, $qry);
$row=mysqli_num_rows($result);
//if($row['admin_id']==$admin_id && $row['admin_password']==$admin_password)
// if(($admin_id=='rgcsm')&&($admin_password=='adminrgcsm'))
if($row>0)
{

$_SESSION['admin_id']=$admin_id;

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dashboard.php">';

}
else
{
echo "Invalid UserName & Password";

}
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>RGCSM Login</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/magic/magic.css">
         <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body style="background-image: url('bg.jpg'); background-size:cover;">
<!-- header starts -->

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>
 $(function () {
    var body = $('#hhe');
    var backgrounds = [
      '../institute/images/h1.png', 
      '../institute/images/h2.png'];
    var current = 0;

    function nextBackground() {
    body.fadeOut();
    body.fadeIn();
        body.attr(
            'src',
        backgrounds[current = ++current % backgrounds.length]);
//alert('hello');

        setTimeout(nextBackground, 5000);
    }
    setTimeout(nextBackground, 5000);
    //body.fadeOut();
    body.attr('src', backgrounds[0]);
});
 </script>
 <center>
    <img typeof="foaf:Image" src="../institute/images/h1.png" width="100%" height="auto" alt="RGCSM" title="RGCSM" id='hhe' style="width:90%; height: 170px;" />
         </center>   
           <br/><br/>

    <!-- header ends -->
        <div class="container">
            
            <div class="tab-content">
                <div id="login" class="tab-pane active">
                    <form action="index.php" class="form-signin"  method="post" >
                        <!-- <p class="muted text-center"> -->
                            <!-- Rajeev Gandhi Computer Saksharta Mission -->
                        <!-- </p> -->
                        <input type="text" placeholder="Username" class="input-block-level" name="admin_id" required > 
                        <input type="password" placeholder="Password" class="input-block-level" name="admin_password"required>
                        <button class="btn btn-large btn-primary btn-block" type="submit" name="submit">Sign in</button>
                    </form>
                </div>
            </div>
<center><font color="#CCCCCC">Powered By </font><br/><a href="http://springstrategies.in" target="_blank" title="Spring S Technologies" ><img src="http://rgcsmbhopal.com:2082/brand/logo.png?57292392" class="rotate" height="40" width="80"></a></center>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="assets/js/vendor/bootstrap.min.js"></script>

        <!--<script>
            $('.inline li > a').click(function() {
                var activeForm = $(this).attr('href') + ' > form';
                //console.log(activeForm);
                $(activeForm).addClass('magictime swap');
                //set timer to 1 seconds, after that, unload the magic animation
                setTimeout(function() {
                    $(activeForm).removeClass('magictime swap');
                }, 1000);
            });

        </script>-->
    </body>
</html>
