<!DOCTYPE html>
<html>
<head>
	<title>Add complete</title>
</head>
<body>
	<?php 
		$StudentID = $_POST["StudentI"];
		$FullName = $_POST["FullName"];	
		$specialized = $_POST["specialized"];
		echo $name;
		
		//Refere to database 
	   $db = parse_url(getenv("DATABASE_URL"));
	   $pdo = new PDO("pgsql:" . sprintf(
	        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	        $db["host"],
	        $db["port"],
	        $db["user"],
	        $db["pass"],
	        ltrim($db["path"], "/")
	   ));
	   $data = [
		    'StudentID' => $StudentID,
		    'FullName' => $FullName,
		    'specialized' => $specialized,
		];
		$stmt =  $pdo->prepare("INSERT INTO product(StudentID, FullName, specialized) VALUES (:StudentID,:FullName,:specialized)");	
		$stmt->execute($data);

	 ?>
	 <h2>Add complete
	 </h2>
	 <ul>
	 	<li><?php echo $StudentID?></li>
	 	<li><?php echo $FullName?></li>
	 	<li><?php echo $specialized?></li>
	 </ul>
	 <a href="index.php">Return</a>
</body>
</html>