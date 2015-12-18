<html>
<head>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/sidebar.css" rel="stylesheet">
		<script src= "js/js_sidebar.js"></script>

		<meta charset="utf-8">
		</head>		
	<body>
		<div class="container">
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
				<li class="active"><a href="procurar_servico.html">Pesquisar<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></a></li>

				<li ><a href="perfil.html">Perfil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>


				<li ><a href="cadastro_cliente.html">Cadastrar-se<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-plus"></span></a></li>
			</ul>
		</div>
	</div>
</nav>
<?php
session_start();

class Service {
    public $title;
    public $price;
	public $desc;
}

$service = new Service();

$service->title = $_POST["service"];
$service->price = $_POST["price"];
$service->desc = $_POST["description"];

if (!isset($_SESSION['service_id'])){
	$service_id = 0;
}else{
	$service_id = $_SESSION['service_id'];
	$service_id++;
}

/*
$service->title = "st";
$service->price = "18.99";
$service->desc = "sd";
*/
if (!isset($_SESSION['services'])){
	$services = array();
}else{
	$services = $_SESSION['services'];
}

$services[$service_id] = $service;
$_SESSION['service_id'] = $service_id;
$_SESSION['services'] = $services;

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
					<?php
						for ($x=0; $x < count($services); $x++){
							echo "<tr>";
							echo "<td>".$services[$x]->title."</td>";
							echo "<td>".$services[$x]->price."</td>";
							echo "<td>".$services[$x]->desc."</td>";
							echo "<td><input type=\"submit\" value=\"Contratar\" class=\"btn btn-primary\"></td>";
							echo "</tr>";
						}
					?>
					</table>
					<hr>

				</div>
			</div>
		<div>

</div>
	</body>
</<html>