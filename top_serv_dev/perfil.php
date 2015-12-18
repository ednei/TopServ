<html>
<head>

<?php
session_start();

class User {
	public $id;
    public $name;
}

$user = new User();

/*
$user->title = $_POST["firstname"];
$user-> = $_POST[""];
$user-> = $_POST[""];
*/


$user->name = "luizinho";

$_SESSION['user'] = $user;

?>  

	<title>Pesquisar Serviço</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/sidebar.css" rel="stylesheet">
		<link href="css/lateral.css" rel="stylesheet">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		</head>		
	<body>
		<div class= "container">
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
						<div class= "jumbotron">
				    <center><h1>Perfil: <?php echo $user->name; ?></h1></center>
					
				    </div>
	
			<div id="sidebar-wrapper" class="sidebar-toggle">
				<ul class="sidebar-nav">
			    	<li>
		      		<a href="servico_cadastrado.php">Serviços</a>
		    	</li>
		    	<li>
		      		<a href="#item2">Pagamentos</a>
		    	</li>
		    	<li>
		      		<a href="#item3">Editar Perfil</a>
		    	</li>
		  	</ul>
		</div>
  	</div>

</div>
</div>
	</body>
</<html>

