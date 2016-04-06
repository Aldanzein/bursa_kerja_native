
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

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">



  </head>

  <body>

    <div class="container">
<div id="kotakinfo"><center>Form Pendaftaran Perusahaan </center></div>
<a href="register.php"><div id="kotakinfo3"><center>User</center></div></a>
      <div id="login">

        <form action="siminputperusahaan.php" method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" name="nm_perusahaan" value="Nama Perusahaan" onBlur="if(this.value == '') this.value = 'Nama Perusahaan'" onFocus="if(this.value == 'Nama Perusahaan') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><select name="jenis_usaha"> 
			<option value="">&nbsp &nbsp Jenis Perusahaan</option>
			<option value="PT">&nbsp &nbsp PT</option>
			<option value="Firma">&nbsp &nbsp Firma </option>
			<option value="CV">&nbsp &nbsp CV </option>
			<option value="Lain - Lain">&nbsp &nbsp Lain - Lain </option></select>
			</p> 
			<p><span class="fontawesome-user"></span><input type="text" name="alamat" value="Alamat" onBlur="if(this.value == '') this.value = 'Alamat'" onFocus="if(this.value == 'Alamat') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><select name="bidang"> 
			<option value="">&nbsp &nbsp Bidang</option>
			<option value="Farmasi">&nbsp &nbsp Farmasi</option>
			<option value="Teknik Mesin">&nbsp &nbsp Teknik Mesin</option>
			<option value="Teknik Komputer Informatika">&nbsp &nbsp Teknik Komputer Informatika</option>
			<option value="Seni Rupa">&nbsp &nbsp Seni Rupa</option>
			<option value="Desain">&nbsp &nbsp Desain</option>
			<option value="Sipil">&nbsp &nbsp Sipil</option></select>
           <p><span class="fontawesome-lock"></span><input type="text" name="nm_pemilik"  value="Nama Pemilik" onBlur="if(this.value == '') this.value = 'Nama Pemilik'" onFocus="if(this.value == 'Nama Pemilik') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
           
		   <p><input type="submit" value="Lanjut"></p>

          </fieldset>

        </form>



      </div> 
	  

    </div>

  </body>
</html>

</body>

</html>