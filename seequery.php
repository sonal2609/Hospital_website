<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>

<body>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jquery.chained.min.js"></script>-->
	<div id="header">
		<div>
			<div>
				<h1 style="color:white">Soksha Hospital </h1>
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
				<li >
					<a href="registration.php">Registration</a>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				
				<li  class="selected" >
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
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
	}
	if (mysqli_select_db( $conn, $db) === false)
        die("Could not select database");
	
	//$var1=$_SESSION['var'];
	//	 echo  "Welcome Dr. ".ucwords($var1);	
	
	if (isset($_POST["qid"])){ 
	$sql= "select * from query where qid={$_POST["qid"]}";
	$result = mysqli_query($conn, $sql);
	//$last_id=mysqli_insert_id($conn);

						if (mysqli_num_rows($result)>0) {
						    while($row=mysqli_fetch_assoc($result)){
								//echo $row["firstname"];
								echo "Name: " .$row["name"]. "<br>". "Age: " .$row["age"]. "<br>".
"Sex: " .$row["sex"]. "<br>"."Email_id: " .$row["email"]."<br>"."Phone: " .$row["phone"]. "<br>" ."Address: " .$row["address"]. "<br>"."Query: " .$row["message"]. "<br>"."Answer: " .$row["answer"]. "<br>"."<br>"."<br>"; 
							}
						}
						else{
							echo"Error". mysqli_error($conn);
						}
						echo '<a href="index.php">Home</a>'."<br>";
						
						
                        exit;
						
	  }
	  //else{echo"All fields are required";}
	?>
	<div id="body">
		<div class="content">
			<div id="section">
				<h2><b>Answer to the query</b></h2>
				<!--<b><a href="#">visit our florida office</a></b> <img src="images/florida.jpg" alt=""> <b><a href="#">visit our vancouver office</a></b> <img src="images/vancouver.jpg" alt="">-->
				 <form  method="post" action= "<?php $_SERVER["PHP_SELF"] ?>" >
					<!--<b>Enter Patient ID</b> <span class="tagline"> </span>-->
					<input type="text" name="qid"  placeholder="Enter Query id">
					<input type="submit"  value="Submit" style="color:blue; background-color: #bedfff">
				</form>
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
