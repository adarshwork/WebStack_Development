<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Job-Host</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/ico" href="images/jh_icon.ico">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div>
<header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Job-Host" /></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="index.html">HOME</a></li>
      <li><a href="jobtypes.html">JOB TYPES</a></li>
      <li><a href="job.html">JOBS</a></li>
      <li class="dropdown"><a href="#">JOB-SEEKER</a>
        <ul class="dropdown-menu">
        <li><a href="jsignup.html">SIGNUP</a></li>
        <li><a href="jlogin.html">LOGIN</a></li>
        </ul>
      </li>
      <li class="dropdown"><a href="#">EMPLOYER</a>
        <ul class="dropdown-menu">
        <li><a href="esignup.html">SIGNUP</a></li>
        <li><a href="elogin.html">LOGIN</a></li>
        </ul>
      </li>
      <li><a href="testsingle.html">ABOUT</a></li>
      <li><a href="contributors.html">CONTRIBUTORS</a></li>
      <li><a href="investors.php">INVESTORS</a></li>
    </ul>
  </div>
</nav>
</header>
  <div class="invst" style=" background: url(images/bg_3.jpg), url(images/bg_2.jpg); background-position: right top, left; background-repeat: no-repeat, no-repeat; background-attachment:fixed, fixed; background-size: auto, cover; margin:0px; height: auto; padding-bottom: 5px;">
          <h2 style="text-align: center; color: white;">OUR INVESTORS</h3>
          <table class="center" style="border-collapse: collapse; margin-left: 0px; text-align:justify; width:1320px;">
            <tr>
              <th>Investor ID</th>
              <th>Investor Name</th>
              <th>Investor Info</th>
              <th>Investment Amount (in ₹)</th>
            </tr>
            <?php
            $res=mysqli_query($link,"SELECT * from investor");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row["in_id"];echo "</td>";
                echo "<td>"; echo $row["in_name"];echo "</td>";
                echo "<td>"; echo $row["in_info"];echo "</td>";
                echo "<td>"; echo $row["in_amount"];echo "</td>";
                echo "</tr>";
            }            

            ?>
          </table>
          <h2 style="text-align: center; color: white;">INSERT/UPDATE/DELETE INVESTORS</h3>
          <form method="post" class="register" action="" name="inv" onsubmit="return validate_form();" enctype="multipart/form-data">
            <p>
              <p><label for="reg_inamount">Investor ID:</label></p>
              <input type="number" class="input-text" name="inid" id="reg_inid" min="1" placeholder="Investor ID" required />
            </p>   
            <p>
              <p><label for="reg_inname">Investor Name:</label></p>
              <input type="text" class="input-text" name="inname" id="reg_inname" placeholder="Name of the Investor" required />
            </p>          
            <p>
              <p><label for="reg_ininfo">Investor Info:</label></p>
              <input type="text" class="input-text" name="ininfo" id="reg_ininfo" placeholder="Investor Information" required />
            </p>   
            <p>
              <p><label for="reg_inamount">Investment Amount:</label></p>
              <input type="number" class="input-text" name="inamount" id="reg_inamount" min="100" placeholder="Amount of Investment (in ₹)" required />
            </p>            
            <p>
              <button type="submit" name="insert" class="glyphicon" style="background-color: #202020; height: 45px;"><i class="glyphicon glyphicon-plus"></i>INSERT</button>&nbsp;&nbsp;
              <button type="submit" name="update" class="glyphicon" style="background-color: #202020; height: 45px;"><i class="glyphicon glyphicon-floppy-disk"></i>UPDATE</button>&nbsp;&nbsp;
              <button type="submit" name="delete" class="glyphicon" style="background-color: #202020; height: 45px;"><i class="glyphicon glyphicon-trash"></i>DELETE</button>
            </p>         
          </form>
    </div>
<footer style="background-color: black;">
     <p style="color: white;"><b>About</b><p>
       Job-Host helps in finding part-time jobs within a short span of time for the job-seekers out there. It is a platform where part-time jobs can be found within just a few clicks.<br><br>
     <p style="color: white;"><b>Contact Us</b><p>
       Job-Host Inc.<br>
       e-mail: admin@jobhost.com<br><br>
     <a href="index.html" style="background-color: #202020; color: white; text-decoration: none;">Get Started</a>
    <hr>
     <div class="copyrights">©  Copyright 2020 by <a href="index.html">Job-Host</a>. All Rights Reserved.</div>
     <div id="backtotop"><a href="#" style="background-color: #202020; color: white; text-decoration: none; float: right;">Get to Top</a></div> 
  </footer>
</body>
<?php
if(isset($_POST["insert"]))
{
mysqli_query($link,"INSERT into investor values('$_POST[inid]','$_POST[inname]','$_POST[ininfo]','$_POST[inamount]')");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
if(isset($_POST["update"]))
{
mysqli_query($link,"UPDATE investor set in_name='$_POST[inname]', in_info='$_POST[ininfo]', in_amount='$_POST[inamount]' where in_id='$_POST[inid]'");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
if(isset($_POST["delete"]))
{
mysqli_query($link,"DELETE from investor where in_id='$_POST[inid]'");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
?>
</html>