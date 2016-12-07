<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Query</title>
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
					<a href="department.php">Doctors</a>
				</li>
				<!--<li>
					<a href="services.php">Patient Care</a>
				</li>-->
				<li>
					<a href="registration.php">Registration</a>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				
				<li class="selected">
					<a href="query.php">Query</a>
				</li>
				<li>
					<a href="adminlgin.php">Admin login</a>
				</li>
			</ul>
		</div>
	</div>
	<?php
   

    // enable sessions
    //session_start();
	
	 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="hospi";

	// Create connection
	$connq = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$connq) {
    echo("Connection failed: " . mysqli_connect_error());
	}
	if (mysqli_select_db( $connq, $db) === false)
        die("Could not select database");
	//echo "hlkhslhdsn";
		

	if (isset($_POST["Name"]) ){ //&& (isset($_POST["Age"])) && (isset($_POST["Sex"])) && (isset($_POST["BloodGroup"])) && (isset($_POST["email"])) && (isset($_POST["Address"])) && (isset($_POST["phone"])) && (isset($_POST["visited"])) && (isset($_POST["Doctors"])) && (isset($_POST["date"]))){
	$sqlq= "INSERT INTO query(name,age,sex,email,phone,address,message) VALUES ('".$_POST["Name"]."', '".$_POST["Age"]."','".$_POST["Sex"]."','".$_POST['Email']."','".$_POST['Phone']."','".$_POST['Address']."','".$_POST['Message']."')";
	//echo"sonal";
	$resultq = mysqli_query($connq, $sqlq);
	
	$last_id=mysqli_insert_id($connq);

						if ($resultq == true) {
						    echo"                              Submitted Successfully              "."<br>";
							echo"      Your queryID is " .$last_id;
						}
						else{
							echo"Error". mysqli_error($connq);
						}
						
                       exit;
						
	  }
	  //else{echo"All fields are required";}
	?>
	<div id="body">
		<div class="content">
			<div id="section">
				<h2>Query</h2>
				<!--<b><a href="#">visit our florida office</a></b> <img src="images/florida.jpg" alt=""> <b><a href="#">visit our vancouver office</a></b> <img src="images/vancouver.jpg" alt="">-->
				<form method="post" action= "<?php $_SERVER["PHP_SELF"] ?>">
					<b>Ask any Query to us</b> <span class="tagline"> </span><!--This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free.</span>-->
					<input type="text" name="Name"  placeholder="Name" required>
					<input type="text" name="Age"  placeholder="Age"required>
					<select name="Sex" placeholder="Sex" required>
						<option>Select sex</option>
						<option>Female</option>
						<option>Male</option>
						<option>Others</option>
					</select>
					<input type="text" name="Email"  placeholder="Email Address" required>
					<input type="text" name="Phone"  placeholder="Phone" required>
					
					<input type="text" name="Address"  placeholder="Address" required>
					<!--<select name="Departments">
						<option>Select one</option>
						<option>nurology</option>
						<option>urology</option>
						<option>cardiology</option>
						<option>orthology</option>
						<option>gynacologist</option>
						
					</select>-->
					<textarea name="Message"  cols="30" rows="10" placeholder="Write questions here/Feedback." required></textarea>
					<input type="submit" name="send" value="send message"><br><br><br><br>
					<a href="seequery.php"><b>View Answer</b></a>
				</form>
				
			</div>
			<div id="sidebar">
				
				<div class="contact">
					<h3>contact information</h3>
					<ul class="first">
						<li class="office">
							<b>Jaipur office</b><span>2700,East JLN Marg</span>
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
					<a href="doctors.php">Doctors</a>
				</li>
				<li>
					<a href="services.php">Patient Care</a>
				</li>
				<li>
					<a href="registration.php">Registration</a>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				
				<li class="selected">
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
