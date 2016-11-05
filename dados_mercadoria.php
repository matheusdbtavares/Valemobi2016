<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste Valemobi 2016</title>
	<!-- Bootstrap -->
  	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		include "conexao.inc";
		
		$vcodigo = $_POST['codigo'];
		$vnome = $_POST['nome'];
		$vtipoMercadoria = $_POST['tipoMercadoria'];
		$vqtd = $_POST['qtd'];
		$vpreco = $_POST['preco'];
		$vtipoNegocio = $_POST['tipoNegocio'];
		
		$sql = "INSERT INTO mercadorias VALUES ('$vcodigo','$vnome','$vtipoMercadoria','$vqtd','$vpreco','$vtipoNegocio')";
		$res = mysqli_query($con,$sql);
		mysqli_close($con);
	?>
	
	<nav class="navbar navbar-inverse" style="border-radius: 0px;">
		<div class="container-fluid">
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
	    		<a class="navbar-brand" href="cadastro_op.html">Valemobi</a>
	    	</div>
	    	<div class="collapse navbar-collapse" id="myNavbar">
	      		<ul class="nav navbar-nav">
	        		<li class="active"><a href="cadastro_op.html">Realizar Operação</a></li>
			        <li><a href="lista_op.php">Visualizar Operações</a></li>
	      		</ul>
	    	</div>
	  	</div>
	</nav>
	
	<div class="container">
	  	<div class="page-header">
	    	<h1>Operação registrada com sucesso!</h1>      
	  	</div>
	 	<ul class="pager">
	  		<li><a href="cadastro_op.html">Realizar outra operação</a></li>
	  		<li><a href="lista_op.php">Visualizar operações realizadas</a></li>
		</ul>    
	</div>
</body>
</html>