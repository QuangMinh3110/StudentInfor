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
    		font-size: 30px;
    		background-color: #32ECFD;
    	}
    	.b{
    		font-size: 20px;
    		text-align: center;
    	}
    	.c{
    		background-color: #DEF448;
    		text-align: center;
    		font-size: 25px;
    	}
    	.d{
    		text-align: center;
    	}
    </style>
  </head>
<body>
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

<table class="tablebordered" align="center" border="2">
		<thead class="theaddark">
			<tr><th class="a" colspan="3"><b>STUDENT</b></th></tr>
			<tr><th class="c" colspan="3"><b>Showing all Student</b></th></tr>
			<tr>
				<th class="b">StudentID</th>
				<th class="b">FullName</th>
				<th class="b">Specialized</th>
			</tr>
		</thead>
		</body>
			<?php 
		foreach ($resultSet as $row) 
		{
			?>
			<form action="" method="post" role = "form">
				<tr>
					<td class="b"><?=$row["studentid"]?></td>
					<td class="b"><?=$row["fullname"]?></td>
					<td class="b"><?=$row["specialized"]?></td>
				</tr>
				</form>
			<?php
		}
		?>
	</tbody>
			<tr>
				<th colspan="3" class="d"><a href="Add.php" class="btn primary" role="button">Add new Student Information...</a></th>
			</tr>
			<tr>
				<th colspan="3" class="d"><a href="delete.php" class="btn primary" role="button">Delete a Student Information...</a></th>
			</tr>
	</table>
</body>
</html>