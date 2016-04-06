
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
<div id="kotakinfo"><center>Form Pendaftaran </center></div>
      <div id="login">
	  
	  <?php
include 'koneksi.php';
$data = $_GET['id'];

 ?>


        <form action="id_perusahaan.php?id=<?php echo"$data";?>"method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" name="username" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="text" name="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
			<p><span class="fontawesome-user"></span><input type="text" name="password2" value="Re-Type Password" onBlur="if(this.value == '') this.value = 'Re-Type Password'" onFocus="if(this.value == 'Re-Type Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            
		   <p><input type="submit" value="Daftar"></p>

          </fieldset>

        </form>

       

      </div> 
	  

    </div>

  </body>
</html>

</body>

</html>