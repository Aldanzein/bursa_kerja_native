
<html>

<head>

  <meta charset="UTF-8">

  <title>BursaKerja!Online - Login</title>

    <link rel="stylesheet" href="cssregister.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Login</title>




  </head>

  <body>

    <div class="container">
<div id="kotakinfo"><center>Form Pendaftaran<br> User </center></div>
<a href="registerperusahaan.php"><div id="kotakinfo2">Perusahaan</div></a>
      <div id="login">

        <form action="siminputanggota.php" method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" name="nama" value="Nama Lengkap" onBlur="if(this.value == '') this.value = 'Nama Lengkap'" onFocus="if(this.value == 'Nama Lengkap') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="text" name="alamat"  value="Alamat" onBlur="if(this.value == '') this.value = 'Alamat'" onFocus="if(this.value == 'Alamat') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
			<p><span class="fontawesome-user"></span><input type="date" name="tanggal" style="width: 310px;" value="Tanggal Lahir (tahun/bulan/tanggal)" onBlur="if(this.value == '') this.value = 'Tanggal Lahir (tahun/bulan/tanggal)'" onFocus="if(this.value == 'Tanggal Lahir (tahun/bulan/tanggal)') this.value = 'tahun/bulan/tanggal'" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="text" name="pendidikan"  value="Pendidikan" onBlur="if(this.value == '') this.value = 'Pendidikan'" onFocus="if(this.value == 'Pendidikan') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
           <p><span class="fontawesome-lock"></span><select name="jurusan" style="width: 310px;"> 
			<option value="">&nbsp &nbsp Bidang</option>
			<option value="Farmasi">&nbsp &nbsp Farmasi</option>
			<option value="Teknik Mesin">&nbsp &nbsp Teknik Mesin</option>
			<option value="Teknik Komputer Informatika">&nbsp &nbsp Teknik Komputer Informatika</option>
			<option value="Seni Rupa">&nbsp &nbsp Seni Rupa</option>
			<option value="Desain">&nbsp &nbsp Desain</option>
			<option value="Sipil">&nbsp &nbsp Sipil</option></select>
           
		   <p><input type="submit" value="Lanjut"></p>

          </fieldset>

        </form>

       

      </div> 
	  

    </div>

  </body>
</html>

</body>

</html>