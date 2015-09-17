<!DOCTYPE html>
<html>
<head>
    <!--<base href="<?= site_url();?>">-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>IBR</title>
    <link rel="stylesheet" href="<?= base_url("templates/ibr2015/css/ibr.css") ?>">
    <link rel="stylesheet" href="<?= base_url("templates/ibr2015/includes/bootstrap/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?= base_url("templates/ibr2015/includes/bootstrap/css/bootstrap-theme.min.css");?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?= base_url("templates/ibr2015/includes/bootstrap/js/bootstrap.min.js")?>"></script>
    <!--<script src="<?= base_url("templates/ibr2015/js/ibr.js")?>"></script>-->
    <script src="templates/ibr2015/js/ibr.js"></script>
    <style>
    body {
      min-height: 2000px;
      padding-top: 70px;
    }
    </style>
</head>
<body>

    <!-- Fixed navbar asd-->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="#" >
              <img alt="Brand" src="templates/ibr2015/img/logo_r2m.png" style="max-width: 100px; margin-top: -20px;">
          </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active menu-home"><a id="menu-1" href="http://ibr.reliarisk.info/">Home</a></li>
               <!-- <li class="menu-home"><a id="menu-2" href="#">Punch-In</a></li>-->
                 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Punch-In <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="menu-home"><a id="menu-2" href="#">Formulario</a></li>
                <li class="menu-home"><a id="menu-3" href="#">Tutorial</a></li>
              </ul>
            </li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
        <!-- Main container -->
        <div id="container-parent" class="container">
            <div class="jumbotron">
                <h1>IBR - reliarisk.info</h1>
                <p>Este proyecto está creciendo ante sus ojos, pronto muchas más características serán añadidas. Mientras tanto sírvase a entrar en la opción “Punch-In” del menú de navegación para reportar su participación en el proyecto.</p>
            </div>
            <div id="container-2">
                <video width="125%" class="center-block" controls>
                    <source src="templates/ibr2015/video/Demo.mp4" type="video/mp4">
                    <!--<source src="templates/ibr2015/video/Demo.webm" type="video/webm">-->
                    <!--<source src="https://drive.google.com/file/d/0B2tegvWG3G2lSEJEN1lVcWlMbGs" type="video/ogg">-->
                    Your browser does not support HTML5 video.
                </video>
            </div>
            <div id="container-1">
                <object id="googleDoc" data="https://docs.google.com/forms/d/1ZSNuMGHvsBiWJpggjfXaCl9D7eAUqnj7GuvJB5aQ35M/viewform" width="100%" height="700px"/>
            </div>
        </div> <!-- /container -->
    <footer>
        <p class="text-right"><span class="label label-default">CodeIgniter</span> <span class="label label-primary">Bootstrap</span> <span class="label label-danger">HTML5<span></p>
    </footer>

    
</body>
</html>