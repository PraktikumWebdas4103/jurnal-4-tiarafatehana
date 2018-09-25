<?php
if (isset($_POST['submit'])) {
		$user = $_POST['username'];
		$pass = $_POST['pass'];
		$data= $_POST['data'];
		$data.=$user."*".$pass."*"."||";

	}
?>
<form action=" " method="POST" enctype="multipart/form-data">
	<table>
	<tr>
		<td>Nama:</td>
		<td><input type="text" name="nama" style="width: 120px;height: 50px"></td>
	</tr>

	<tr>
		<td><h2>Hobi</td></h2>
	</tr>
	<tr>
		<td>
			<br><input type="checkbox" name="pilih[]">Berenang
			<br><input type="checkbox" name="pilih[]">Dengerin Musik
			<br><input type="checkbox" name="pilih[]">Planner
			<br><input type="checkbox" name="pilih[]">Badminton
			<br><input type="checkbox" name="pilih[]">Tidur
			<br><input type="checkbox" name="pilih[]">Makan
		</td>
	</tr>
	<tr>
		<td>Gambar : </td>
		<td><input type="file" name="foto"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="submit" style="color: black; width: 100px;height: 40px;border-radius: 10px"></td>
	</tr>
</table>
</form>

<?php
	if (isset($_POST['submit'])) {
		$gambar=$_FILES['foto']['name'];
		$hobi=$_POST['pilih'];

		echo "<img src='$gambar'>";
	}


