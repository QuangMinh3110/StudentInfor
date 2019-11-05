<!DOCTYPE html>
<html>
<head>
	<title>Add complete</title>
</head>
<body>
	<?php 
		$studentid = $_POST["studentid"];
		$fullname = $_POST["fullname"];	
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
		    'studentid' => $studentid,
		    'fullname' => $fullname,
		    'specialized' => $specialized,
		];
		$stmt =  $pdo->prepare("INSERT INTO product(studentid, fullname, specialized) VALUES (:studentid,:fullname,:specialized)");	
		$stmt->execute($data);

	 ?>
	 <h2>Add complete
	 </h2>
	 <ul>
	 	<li><?php echo $studentid?></li>
	 	<li><?php echo $fullname?></li>
	 	<li><?php echo $specialized?></li>
	 </ul>
	 <a href="index.php">Return</a>
</body>
</html>