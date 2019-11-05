<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table{
			color: #FFFFFF;
			text-align: center;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<form method="post" action="doAdd.php">
		<table class="table" align="center" border="1">
			<tr>
				<td>studentid</td>
				<td><input type="text" name="studentid"></td>
			</tr>
			<tr>
				<td>fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td>specialized</td>
				<td><input type="text" name="specialized"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="saving"></td>
			</tr>
		</table>
	</form>
</body>
</html>