
<head>

	</head>
<b>Input Permintaan<hr>
<center><table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">

	`	<form action="siminputpermintaan.php?id=<?php echo $data2;?>" method="post">
			<tr >
			<td><b>Pendidikan</td><td><input type="text" name="pendidikan"></td></tr>
			<tr >
			<td><b>Usia</td><td><input type="text" name="usia"></td></tr>
			<tr >
			<td><b>Kompetensi </td><td><select name="kompetensi"> 
			<option value="Farmasi">&nbsp &nbsp Farmasi</option>
			<option value="Teknik Mesin">&nbsp &nbsp Teknik Mesin</option>
			<option value="Teknik Komputer Informatika">&nbsp &nbsp Teknik Komputer Informatika</option>
			<option value="Seni Rupa">&nbsp &nbsp Seni Rupa</option>
			<option value="Desain">&nbsp &nbsp Desain</option>
			<option value="Sipil">&nbsp &nbsp Sipil</option></select></td></tr>
			<tr >
			<td><b>Gaji</td><td><input type="text" name="gaji"></td></tr>
			<tr >
			<td><b>Informasi</td><td><input type="text" name="informasi"></td></tr>
			<tr >
			<td><input type="submit" value="Input"></td><td><input type="Reset" value="Reset"></td></tr>
			

			
			</table></form></center>