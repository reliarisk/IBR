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
<script>
	$(document).ready(function(){
		$("#gohome").on('click', function(){
			window.location = "/";
		});
	});
</script>
</head>
<body>
<div class="container">
	<div class="header">
        <div class="row">
            <div class="col-xs-12">
                <h1>It's Working!</h1>
                <p class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> CodeIgniter and Bootstrap has been succesfully installed!</p>
                <p class="text-right"><span class="label label-default">CodeIgniter</span> <span class="label label-primary">Bootstrap</span> <span class="label label-danger">HTML5</span></p>
            </div>
        </div>
        <hr>
        <a href="/" class="btn btn-lg btn-primary">asdasd</a>
        <button id="gohome" class="btn btn-danger">Otro</button>
        
    </div>
</div>
</body>
</html>