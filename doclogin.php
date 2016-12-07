<!DOCTYPE HTML>
<?php
   

    // enable sessions
    session_start();

?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Admin </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>

<body>
	<div id="header">
		<div>
			<div>
				<h1 style="color:white">Soksha Hospital</h1>
				<!--<a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>-->
				<!--<span class="tagline">Experience life to the fullest.</span>-->
				<span class="tagline"></span>
			</div>
			<ul>
				<li>
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="about.php">about</a>
				</li>
				<li>
					<a href="doctors.php">Doctors</a>
				</li>
				<!--<li>
					<a href="services.php">Patient Care</a>
				</li>-->
				<li>
					<a href="registration.php">Registration</a>
				</li>
				<li>
					<a href="query.php">Query</a>
				</li>
				
				<li  class="selected" >
					<a href="doctorlogin.php">Doctor Login</a>
				</li>
				<li>
					<a href="adminlgin.php">Admin login</a>
				</li>
			</ul>
		</div>
	</div>
	<h3>
     
	
	<div id="body">
		<div class="content">
			<div id="section">
				<h3><?php if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] == true) { ?>
        You are logged in!  
        <br>
        <a href="logout.php">Log out</a>
      <?php } else { ?>
        Please Log in to access the system ! 
      <?php } ?> 
				</h3>
					
         <ul>
      <li><a href="view.php">View all patient history</a></li>
      <li><a href="current.php">View all current patients</a></li>
	  <li><a href="viewown.php">View own patient history</a></li>
      <li><a href="currentown.php">View own current patients</a></li>
      <li><a href="report.php">Make report</a></li>
      <li><a href="viewquery.php">View queries</a></li>
      <li><a href="answerquery.php">Answer queries</a></li>
		</ul>
       
          
				<!--<a href="already.php"><b>Already Registered</b></a>-->
				
			</div>
			<div id="sidebar">
				
				<div class="contact">
					<h3>contact information</h3>
					<ul class="first">
						<li class="office">
							<b>Jaipur office</b><span>2700,east jln marg</span>
						</li>
						<li class="telephone">
							9005265424
						</li>
						<li class="fax">
							5653126543
						</li>
						<li class="email">
							<a href="http://www.gmail.com">hospital@gmail.com</a>
						</li>
					</ul>
					<ul>
						<li class="office">
							<b>Patna office</b><span>288,high Tower,patel nagar</span>
						</li>
						<li class="telephone">
							8898645643
						</li>
						<li class="fax">
							4654631941
						</li>
						<li class="email">
							<a href="http://www.gmail.com">hospital@gmail.com</a>
						</li>
					</ul>
				</div>
				<div>
					<h3>office hours:</h3>
					<span>Monday- Saturday <span>7:00 a.m. - 8:00p.m.</span></span> <span> Sundays <span>7:00 a.m. - 12:00 p.m.</span></span>
				</div>
			</div>
		</div>
	</div>
	<h2>Thank you for visit </h2>
	<div id="footer">
		<div>
			<ul>
				<li >
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="about.php">about</a>
				</li>
				<li>
					<a href="doctors.php">Departments</a>
				</li>
				<li>
					<a href="services.php">Patient Care</a>
				</li>
				<li class="selected">
					<a href="registration.php">Registration</a>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				
				<li >
					<a href="query.php">Query</a>
				</li>
			</ul>
			<div>
				<span>stay connected:</span>
				<a href="http://www.facebook.com" id="facebook">facebook</a>
				<a href="http://www.twitter.com" id="twitter">twitter</a>
				<a href="http://www.googleplus.com" id="googleplus">googleplus</a>
			</div>
		</div>
	</div>
</body>
</html>
