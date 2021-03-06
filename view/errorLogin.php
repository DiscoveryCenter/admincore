
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Error de Credenciales | Discovery </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/fontawesome/css/all.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Fontawesome -->
  
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
        
  <body class="login">
    <div class="d-flex justify-content-center mt-5">
    <div class="d-flex justify-content-center  widget widget_tally_box">
        <div class="x_panel ui-ribbon-container fixed_height_390">
            <div class="ui-ribbon-wrapper">
            <div class="ui-ribbon">
                Error
            </div>
            </div>
            <div class="x_title">
            <h2>Credenciales</h2>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">

            <div style="text-align: center; margin-bottom: 17px">
                <span class="chart" data-percent="86">
                   <span class="text-danger"><i  style="font-size: 150px;"class="fa fa-lock"></i></span>
                <canvas height="110" width="110"></canvas></span>
            </div>

            <h3 class="name_title">Oooops !</h3>
          

            <div class="divider"></div>

            <p>Las credenciales que ingresaste son incorrectas o su usuario a sido desactivado ! Por favor intentalo de nuevo.</p>
            <?php header("refresh:3; url=../");?>

            </div>
        </div>
        </div>
              
        <div class="clearfix"></div>
        <br />
  </body>
</html>
