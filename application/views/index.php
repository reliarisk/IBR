<!doctype html>
<html>
<head>
<base href="<?= site_url();?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>IBR</title>
<link rel="stylesheet" href="<?= base_url("templates/ibr2015/css/ibr.css") ?>">
<link rel="stylesheet" href="<?= base_url("templates/ibr2015/includes/bootstrap/css/bootstrap.min.css");?>">
<link rel="stylesheet" href="<?= base_url("templates/ibr2015/includes/bootstrap/css/bootstrap-theme.min.css");?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?= base_url("templates/ibr2015/includes/bootstrap/js/bootstrap.min.js")?>"></script>
<!--<script>
	$(document).ready(function(){
		$("#gohome").on('click', function(){
			window.location = "/";
		});
	$('#info').click(function (e) {
  e.preventDefault()
  $('#message').html('<div class="alert alert-info fade in"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>Array!!</div>');
})
	});
</script>-->
<style>
body {
  min-height: 2000px;
  padding-top: 70px;
}
</style>
</head>
<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://www.joyofbootstrap.com/output/navbardefault.php">Default</a></li>
            <li><a href="http://www.joyofbootstrap.com/output/navbarstatic.php">Static top</a></li>
            <li class="active"><a href="http://www.joyofbootstrap.com/output/navbarfixed.php">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
<div class="container">
	<div class="header">
        <div class="row">
            <div class="col-xs-12">
                <!--<h1>Mike and Chichito's Love Affair!</h1>-->
               <!-- <p class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> CodeIgniter and Bootstrap has been succesfully installed!</p>-->
               
            </div>
        </div>
        <hr>
        <!--<a href="/" class="btn btn-lg btn-primary">asdasd</a>
        <button type="button" class="btn btn-lg btn-info" id="info">["hip", "hip"]</button>
        <button id="gohome" class="btn btn-danger">Otro</button>-->
    </div>
    <!--<div id="message"></div>-->
</div>
</body>
<footer>
 <p class="text-right"><span class="label label-default">CodeIgniter</span> <span class="label label-primary">Bootstrap</span> <span class="label label-danger">HTML5<span></p>
</footer>
</html>