<?php
			if(isset($_POST['submit'])){
				$st_name = $_POST['dname'];
				$st_fname = $_POST['dfname'];
				$st_mname = $_POST['dmname'];
				$st_sex = $_POST['dsex'];
				$st_phone = $_POST['dphone'];
								
?>
<!DOCTYPE html>
<html>
<head><title>zahir</title></head>
<body>
<table border=1px>
	<tr>
		<td>Name:</td>
		<td>Father's Name:</td>
		<td>Mother's Name:</td>
		<td>Sex</td>
		<td>Phone</td>
	</tr>
	<tr>
		<td>
	<?php if(strlen($st_name)<8){
				echo"Enter more than 8 word";}
			else{
				echo $st_name;
				}?>
		</td>
		<td>
	<?php if(strlen($st_fname)<8){
				echo"Enter more than 8 word";}
			else{
				echo $st_fname;
				}?>
		</td>
		<td>
	<?php if(strlen($st_mname)<8){
				echo"Enter more than 8 word";}
			else{
				echo $st_mname;
				}?>
		</td>
		<td>
	<?php if(strlen($st_phone)<11){
				echo"Enter more than 8 word";}
			else{
				echo $st_phone;
				}?>
		</td>
		<td>
			<?php echo $st_sex; ?>
		</td>
	</tr>
</table>
</body>
<?php
			}
?>
</html>