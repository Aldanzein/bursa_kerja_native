 
<b>Edit Akun<hr>
 <?php
 include "koneksi.php";
 
			$data = $_GET['id'];
		$sqldata= "select * from t_perusahaan where id_perusahaan='$data7'";
		$result=mysql_query($sqldata); 
		$data2=mysql_fetch_array($result);
?>


<center><table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
	`	 <form action="simupdate_perusahaan.php?id=<?php echo $data7;?>" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
			<tr>
			<td><b>Nama Perusahaan</td><td><input type="text" name="nama" value="<?php echo "$data2[nm_perusahaan]";?>"></td></tr>
			<tr>
			<td>Jenis Usaha</td><td><input type="text" name="alamat" value="<?php echo "$data2[jenis_usaha]";?>" ></td></tr>
			<tr>
			<td>Alamat</td><td><input type="text" name="tgl" value="<?php echo "$data2[alamat]";?>" ></td></tr>
			<tr>
			<td>Bidang</td><td><input type="text" name="pendidikan" value="<?php echo "$data2[bidang]";?>" ></td></tr>
			<tr>
			<td>Nama Pemilik</td><td><input type="text" name="komp" value="<?php echo "$data2[nm_pemilik]";?>" ></td></tr>
			<tr>
			<td>Gambar</td><td><input name="gambar" type="file" id="file" size="1" value="<?php echo "$data2[gambar]";?>" ></td></tr>
			<tr>
			
			<tr>
			<td><input type="submit" value="Input"></td><td><input type="reset" name="Submit2" value="Baru"></td></tr>
			

			
			</table>
			</form></center>