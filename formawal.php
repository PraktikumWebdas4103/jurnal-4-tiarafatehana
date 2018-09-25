<form action="proses.php" method="POST">
	<table>
	<tr>
		<td>Username :</td>
		<td><input type="text" name="username" style="width: 120px;height: 50px"></td>
	</tr>
	<tr>
		<td>Password : </td>
		<td><input type="password" name="pass"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="hidden" name="data" value="<?php echo "$data"; ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="submit" style="color: black; width: 100px;height: 40px;border-radius: 10px"></td>
	</tr></table>
</form>


