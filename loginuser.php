
<html>

<head>

  <meta charset="UTF-8">

  <title>BursaKerja!Online - Login</title>

    <link rel="stylesheet" href="cssloginuser.css" media="screen" type="text/css" />

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
<div id="kotakinfo"><center> User </center></div>
      <div id="login">

        <form action="simloginuser.php" method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" name="username" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Masuk"></p>

          </fieldset>

        </form>

        <p>Bukan Member? <a href="register.php">Daftar Sekarang</a><span class="fontawesome-arrow-right"></span></p>

      </div> 

    </div>

  </body>
</html>

</body>

</html>