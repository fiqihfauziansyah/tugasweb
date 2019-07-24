//<input type=text value=<?php echo $_GET['idpost'] ?> name=idpost>//
<?php 
include('koneksi.php');
$sql="select *from post where idpost='$idpost'";
$result = $db_connect->query($sql) or die ($db_connect->error);

while($row=$result->fetch_assoc()){
$no++;
$idpost=$row['idpost'];

}

echo "$idpost";
echo "<form action=prosestambahcommentpost.php method=post>
	<table class=table1>
		
		<tr>
			<td>Tanggal</td><td>:</td>
			<td>echo ('Y-m-d H:m:s'); <input type=text value=<?php echo date ('Y-m-d H:m:s'); ?>  name=tanggal_comment></td>
		</tr>
		<tr>
			<td>Nama</td><td>:</td>
			<td><input type=text name=idpost value=$idpost ></td>
		</tr>
		<tr>
			<td>Komentar</td><td>:</td>
			<td><input type=text name=comment></td>
		</tr>
		<tr>
			<td align=center colspan=3>
				<input type=submit value=kirim>
			</td>
		</tr>
	</table>
	
</form>";

 ?>