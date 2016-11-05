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
</head>
<body>
	
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
	        		<li><a href="cadastro_op.html">Realizar Operação</a></li>
			        <li class="active"><a href="lista_op.php">Visualizar Operações</a></li>
	      		</ul>
	    	</div>
	  	</div>
	</nav>

	<div class="container">
	
		<h2>Operações Realizadas</h2><br>

		<table class="table table-bordered">
			<thead>
		    	<tr>
					<th>Código da Mercadoria</th>
					<th>Nome da Mercadoria</th>
					<th>Tipo da Mercadoria</th>
					<th>Quantidade</th>
					<th>Preço</th>
					<th>Tipo do Negocio</th>
		      	</tr>
		    </thead>
		    <tbody>
		<?php
		include "conexao.inc";
			
		$query = "SELECT * FROM mercadorias";
		$result = mysqli_query($con, $query);
		while ($linha = mysqli_fetch_row($result)){
			$vcodigo = $linha[0];
			$vnome = $linha[1];
			$vtipoMercadoria = $linha[2];
			$vqtd = $linha[3];
			$vpreco = $linha[4];
			$vtipoNegocio = $linha[5];

			echo "<tr>";
				echo "<td> $vcodigo </td>
				<td> $vnome </td>
				<td> $vtipoMercadoria </td>
				<td> $vqtd </td>
				<td> $vpreco </td>
				<td> $vtipoNegocio </td>";
			echo "</tr>";

		}
		mysqli_close($con);
		?>
		    </tbody>
  		</table>
	
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>