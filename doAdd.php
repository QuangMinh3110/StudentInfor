<!DOCTYPE html>
<html>
<head>
	<title>Add complete</title>
	<style type="text/css">
		.a{
			text-align: center;
		}
	</style>
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
	 <h2 class="a">Add Complete
	 </h2>
	 <ul class="a">
	 	<li><?php echo StudentID: $studentid?></li>
	 	<li><?php echo FullName: $fullname?></li>
	 	<li><?php echo Specialized: $specialized?></li>
	 </ul>
	 <a href="index.php" class="a">Return</a>
</body>
</html>