<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Query List </title>
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
			<h2>Query list</h2>
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
		
		$var1=$_SESSION['var'];
		 echo  "Welcome user ".ucwords($var1);
		 
		 
	$sql= "select * from query";
	$result = mysqli_query($conn, $sql);


echo '<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
		<th>Age</th>
		<th>Sex</th>
		<th>Email Address</th>
		<th>Phone number</th>
		<th>Address</th>
		<th>Query</th>
		<th>Answer</th>
		
    </tr>';

while ($row = mysqli_fetch_array($result)) {
    echo '
        <tr>
            <td>'.$row['qid'].'</td>
            <td>'.$row['name'].'</td>
			<td>'.$row['age'].'</td>
			<td>'.$row['sex'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['phone'].'</td>
			<td>'.$row['address'].'</td>
			<td>'.$row['message'].'</td>
			<td>'.$row['answer'].'</td>
			
			
	
        </tr>';

}

echo '
</table>';

	?>
	<a href="hosp.php">Back</a>
</body>
</html>
