<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.a{
			color: #F22525;
			text-align: center;
			font-size: 20px;
		}
		.b{
			text-align: center;
			background-color: #FF5151;
			font-size: 30px;
		}
	</style>
</head>
<body>
	<form method="post" action="doAdd.php">
		<table align="center" border="1">
			<tr>
				<th colspan="2" class="b"><b>STUDENT ADDING</b></th>
			</tr>
			<tr>
				<td class="a">studentid</td>
				<td><input type="text" name="studentid"></td>
			</tr>
			<tr>
				<td class="a">fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td class="a">specialized</td>
				<td><input type="text" name="specialized"></td>
			</tr>
			<tr>
				<th colspan="2"><input type="submit" name="saving"></th>
			</tr>
		</table>
	</form>
</body>
</html>