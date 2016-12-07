<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Patients' List </title>
	<!--<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			
	<div id="body">
		<div class="section">
			<h2> Current Patients' list</h2>
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
	
	$var2=$_SESSION['var'];
		 echo  "Welcome user ".($var2);
		
	$sql= "select * from patient where d_date is NULL";
	$result = mysqli_query($conn, $sql);

						/*if (mysqli_num_rows($result)>0) {
						    while($row=mysqli_fetch_assoc($result)){
								//echo $row["firstname"];
								echo "FirstName: " .$row["firstname"]. "<br>". "LastName: " .$row["lastname"]."<br>". "FathersName: " .$row["fathersname"]."<br>". "age: " .$row["age"]. "<br>".
								"sex: " .$row["sex"]. "<br>"."Bloodgroup: " .$row["bloodgroup"]. "<br>"."Email_id: " .$row["email"]."<br>". "Address: " .$row["address"]. "<br>"."Phone: " .$row["phone"]. 
								"<br>"."Visited: " .$row["visited"]. "<br>"."Doctor's Name: " .$row["doctor"]. "<br>"."Date: " .$row["date"]; 
							}
						}
						else{
							echo"Error". mysqli_error($conn);
						}
                        exit;*/


echo '<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
		<th>Last Name</th>
		<th>Fathers Name</th>
		<th>Age</th>
		<th>Sex</th>
		<th>Blood Group</th>
		<th>Email id</th>
		<th>Address</th>
		<th>Phone number</th>
		<th>Have you visited before</th>
		<th>Doctors Name</th>
		<th>Date</th>
		<th>Symptoms</th>
		<th>Treatment</th>
		<th>Medicines</th>
		<th>Total Bill</th>
		<th>Date Of Discharge</th>
		
		
    </tr>';

while ($row = mysqli_fetch_array($result)) {
    echo '
        <tr>
            <td>'.$row['p_id'].'</td>
            <td>'.$row['firstname'].'</td>
			<td>'.$row['lastname'].'</td>
			<td>'.$row['fathersname'].'</td>
			<td>'.$row['age'].'</td>
			<td>'.$row['sex'].'</td>
			<td>'.$row['bloodgroup'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['address'].'</td>
			<td>'.$row['phone'].'</td>
			<td>'.$row['visited'].'</td>
			<td>'.$row['doctor'].'</td>
			<td>'.$row['date'].'</td>
			<td>'.$row['symptoms'].'</td>
			<td>'.$row['treatment'].'</td>
			<td>'.$row['medicines'].'</td>
			<td>'.$row['bill'].'</td>
			<td>'.$row['d_date'].'</td>
			
	
        </tr>';

}

echo '
</table>';

	?>
	<a href="hosp.php">Back</a>
</body>
</html>
