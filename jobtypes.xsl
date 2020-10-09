<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0" 
xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match="/">
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
        <li><a href="#">SIGNUP</a></li>
        <li><a href="#">LOGIN</a></li>
        </ul>
      </li>
      <li class="dropdown"><a href="#">EMPLOYER</a>
        <ul class="dropdown-menu">
        <li><a href="#">SIGNUP</a></li>
        <li><a href="#">LOGIN</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
</header>
<span style="font-size:50px; float: left; color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&#8593;</span><span style="float:left; color: white;"><br><br>That's an Image(not a text) link to home page.</span>
</div>
<div class="jobtypes" style=" background: url(images/bg_3.jpg), url(images/bg_2.jpg); background-position: right top, left; background-repeat: no-repeat, no-repeat; background-attachment:fixed, fixed; background-size: auto, cover; margin:0px;">
  <h2 style="text-align: center; color: white;">Types of Jobs</h2>
  <table class="center" style="border-collapse: collapse; text-align:justify; width:1200px;">
	<tr> 
		<th>Title</th> 
		<th>Type</th> 
		<th>Location</th> 
		<th>Salary</th>
		<th>Description</th>
		<th>Vacancy</th>
	</tr> 
	<xsl:for-each select="jtypes/jinfo"> 
		<tr> 
			<td><a href="#"><xsl:value-of select="title"/></a></td> 
			<td><a href="#"><xsl:value-of select="type"/></a></td> 
			<td><a href="#"><xsl:value-of select="location"/></a></td> 
			<td><a href="#"><xsl:value-of select="salary"/></a></td> 
			<td><a href="#"><xsl:value-of select="description"/></a></td>
			<td><a href="#"><xsl:value-of select="vacancy"/></a></td>
		</tr> 
	</xsl:for-each> 
  </table>
</div>
<footer style="background-color: black;">
     <p style="color: white;"><b>About</b><p>
       Job-Host helps in finding part-time jobs within a short span of time for the job-seekers out there. It is a platform where part-time jobs can be found within just a few clicks.<br><br>
     <p style="color: white;"><b>Contact Us</b><p>
       Job-Host Inc.<br>
       e-mail: admin@Job-Host.com<br><br>
     <a href="index.html" style="background-color: #202020; color: white; text-decoration: none;">Get Started</a>
    <hr>
     <div class="copyrights">©  Copyright 2020 by <a href="index.html">Job-Host</a>. All Rights Reserved.</div>
     <div id="backtotop"><a href="#" style="background-color: #202020; color: white; text-decoration: none; float: right;">Get to Top</a></div> 
  </footer>
</body>
</html>
</xsl:template> 
</xsl:stylesheet> 
