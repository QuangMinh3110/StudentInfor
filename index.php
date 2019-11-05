<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/customcss.css">
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
    <title>Student Information Page</title>
    <style type="text/css">
    	.a{
    		text-align: center;
    		font-size: 50px;
    	}
    </style>
  </head>
<body>

<div class="a"><b>STUDENT</b></div>
<div class="a"><i>Showing all Student</i></div>
<?php
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
	//your sql query
	$sql = "SELECT * FROM Student";
	$stmt = $pdo->prepare($sql);
	//execute the query on the server and return the result set
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$resultSet = $stmt->fetchAll();
	//display the data 
?>

<table class="tablebordered" align="center" border="1">
		<thead class="theaddark">
			<tr>
				<th>studentid</th>
				<th>fullname</th>
				<th>specialized</th>
			</tr>
		</thead>
		</body>
			<?php 
		foreach ($resultSet as $row) 
		{
			?>
			<form action="" method="post" role = "form">
				<tr>
					<td><?=$row["studentid"]?></td>
					<td><?=$row["fullname"]?></td>
					<td><?=$row["specialized"]?></td>
				</tr>
				</form>
			<?php
		}
		?>
	</tbody>
	</table>
	<a href="Add.php" class="btn primary" role="button" class="a">Add new Student Information...</a>
</body>
</html>