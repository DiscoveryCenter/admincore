<!DOCTYPE html>
<html lang="es">
  <head><meta charset="euc-jp">
  
    <!-- Meta, title, CSS, favicons, etc. -->
    <!-- Hecho por Jefferson X. Espinoza -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Intranet | Discovery </title>

    <!-- Bootstrap -->
    <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendors/fontawesome/css/all.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="./vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Fontawesome -->
  
    <!-- Custom Theme Style -->
    <link href="./build/css/custom.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LcezBAaAAAAAMvUWGmPDwCvKAVONDWZ_oVw2jzM"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LcezBAaAAAAAMvUWGmPDwCvKAVONDWZ_oVw2jzM', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
  </head>
        
      <?php
      session_start();
      $token = md5(uniqid(rand(), true));
      $_SESSION['csrf'] = $token;
      
      if (isset($_SESSION['status'])) {
        # Reedirigir al login si la sesion existe
        header ("location: ./view/index.php");
     }
      
      ?>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method ="POST" action="./controller/session.php">
              <h1>Intranet Discovery</h1>
              <div>
                <input type="text" class="form-control" name = "usuario" value="" placeholder="Usuario" required="" autofocus/>
              </div>
              <div>
                <input type="password" name="password" value="" class="form-control" placeholder="Contrase&ntilde;a" required="" />
              </div>
              <div>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                <input type="hidden" name="csrf" value="<?php echo $token; ?>">
                <input class="btn btn-success submit" type="submit" name="submit" value="Entrar">
                <input class="btn btn-danger submit" type="reset" name="submit" value="Limpiar">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
              
                <div class="clearfix"></div>
                <br />
                <div>
                  <p>Desarrollado por: <a class="text-primary" href="https://jeffersonespinoza.com" rel="noopener noreferrer">Jefferson Espinoza </></a></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
