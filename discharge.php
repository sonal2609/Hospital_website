<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Patients' List </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<!--<div id="header">
		<div>
			
	<div id="body">
		<div class="section">
			<h4>Patient to be discharged </h4>-->
			
			
			
			
			
			
			
			
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
				<li >
					<a href="registration.php">Registration</a>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				
				<li >
					<a href="query.php">Query</a>
				</li>
				<li class="selected">
					<a href="adminlgin.php">Admin login</a>
				</li>
			</ul>
		</div>
	</div>
<?php
   

    // enable sessions
    session_start();
	
	 
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
		
	if (isset($_POST["pid"]) && (isset($_POST["d_date"])) && (isset($_POST["bill"]))){
	
	$sql1= "select * from pat_hosp where p_id={$_POST["pid"]} and treatment not like 'Not diagnosed'";
	$result1 = mysqli_query($conn, $sql1);
	//echo"ab";
	//$last_id=mysqli_insert_id($conn);

						if (mysqli_num_rows($result1)>0) {
						
						$sql2="update pat_hosp set d_date='".$_POST['d_date']."',bill='".$_POST['bill']."' where p_id={$_POST['pid']}";
	$result2 = mysqli_query($conn, $sql2);
	if ($result2 != true) {
		echo"Error1". mysqli_error($conn);	
				}	
	$sql="update patient set d_date='".$_POST['d_date']."',bill='".$_POST['bill']."' where p_id={$_POST['pid']}";
	$result = mysqli_query($conn, $sql);
	if ($result != true) {
	echo"Error2". mysqli_error($conn);
				}
				
	
						    while($row=mysqli_fetch_assoc($result1)){
								echo "First Name: " .$row["firstname"]. "<br>". "Last Name: " .$row["lastname"]."<br>". "Father's Name: " .$row["fathersname"]."<br>". "Age: " .$row["age"]. "<br>".
								"Sex: " .$row["sex"]. "<br>"."Blood group: " .$row["bloodgroup"]. "<br>"."Email_id: " .$row["email"]."<br>". "Address: " .$row["address"]. "<br>"."Phone: " .$row["phone"]. 
								"<br>"."Visited: " .$row["visited"]. "<br>"."Doctor's Name: " .$row["doctor"]. "<br>"."Date: " .$row["date"]."<br>"."Symptoms: ".$row["symptoms"]."<br>"."Treatment: ".$row["treatment"]."<br>"."Medicines ".$row["medicines"]."<br>"/*."Total Bill: ".$row["bill"]."<br>"."Date Of Discharge: ".$row["d_date"]."<br>"*/; 
							}
							$sql3= "delete from pat_hosp where p_id={$_POST["pid"]}";
	$result3 = mysqli_query($conn, $sql3);
	if ($result3 != true) {
							echo"Error4". mysqli_error($conn);
						}
						}
						else{
							echo"Error". mysqli_error($conn)."<br>"."<br>"."<br>";
						}
						
	echo '<a href="hosp.php">Back</a>'."<br>";

						
                        exit;
						
	  }					
	?>
	
	
	<form  method="post" action= "<?php $_SERVER["PHP_SELF"] ?>" >
					<p>Enter the id of the patient to be discharged: 
					<input type="text" name="pid" placeholder="Patient ID" required><br></p>
					<p>Date of discharge: 
					<input type="date" name="d_date" placeholder="Date Of Discharge" required><br></p>
					<p>Total bill: 
					<input type="text" name="bill"  placeholder="Total Bill" required><br></p>
					<input type="submit"  value="Discharge" style="color:blue; background-color: #bedfff"><br><br>
					
</body>
</html>
