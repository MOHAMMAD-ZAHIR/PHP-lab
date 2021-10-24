<!DOCTYPE html>
<html>
	<head>
		<title>zahir</title>
	</head>
	<body>
		<form action="index.php" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="dname"></td>
				</tr>
				<tr>
					<td>Father's Name:</td>
					<td><input type="text" name="dfname"></td>
				</tr>
				<tr>
					<td>Mother's Name:</td>
					<td><input type="text" name="dmname"></td>
				</tr>
				<tr>
					<td>Sex:</td>
					<td>
						<label for="sex"></label>
						<select name="dsex" id="sex">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Transgender">Transgender</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="number" name="dphone"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"></td>
				</tr>
				
			</table>
		</form>
	</body>
</html>