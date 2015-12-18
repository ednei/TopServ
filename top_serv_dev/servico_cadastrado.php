<html>
<head>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/sidebar.css" rel="stylesheet">
		<script src= "js/js_sidebar.js"></script>

		<meta charset="utf-8">
		</head>		
	<body>
	<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
    
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Logo</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Início<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="#">Perfil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				<li ><a href="adicionar_servico.html">Anuncio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<?php
session_start();
$service = $_POST["service"];
$price = $_POST["price"];
$description = $_POST["description"];
if(empty($services)){
	$services = array();
}
else{
	$services = array_push($services, $service, $price, $description);	
}
?>
		<div class="container-fluid">
    			<div class="form-group">
    					<div class="control-group">
					<div class= "jumbotron">
				    <center><h1>Meus serviços cadastrados</h1></center>
				    </div>
					<table  style="width:100%">
					<tr>
						<th>Tipo</th>
						<th>Preço</th>
						<th>Descrição</th>		
					</tr>
					<tr>
						<?php
						echo "<td>".$services[0][0]."</td>";
						echo "<td>".$services[0][1]."</td>";
						echo "<td>".$services[0][2]."</td>";
						?>		
					</tr>
					</table>
					<hr>

				</div>
			</div>
		<div>
<div class="main">
<!-- Content Here -->
</div>
	</body>
</<html>