<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php
			session_start();
			if($_SESSION == null)
			{
				header("Location: login.php");
			}
		?>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<title>Painel de Usuário</title>
	</head>
	<body>	
	<header>
		<div class='divLogo'>
			<img class='logo' src='images/logo.png' title='ChronoSchool'/>			
				<div class='divLogin'>
				
			</div>
		</div>		
	</header>
	<?php
		include "php/navbar.php";
	?>	
	<div class="corpo">			
		
	</div>	
	
	<footer>
		<div>
			<img class="logo" src="images/logo.png" title="ChronoSchool"/>			
		</div>
	</footer>
	</body>
</html>