<? php
session_start();

echo "BIENVENUE".$_SESSION['phone'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>menu de site</title>
	<link rel="stylesheet" type="text/css" href="infosO.css">
</head>
<body>
	<?php include('menu.php');?>

	<div class="liste">
 			<h2>MENU du COURS</h2>
 			<ul><b>
 			<a href="#">Accueil</a><br>
 			<a href="#">Cours de Base</a><br>
 			<a href="#">Systeme d'exploitation</a><br>
 			<a href="#">Reseau</a><br>
 			<a href="#">Web</a><br>
 			<a href="#">Programation</a></b><br><br><br>
 			</ul>
 		</div>
 	</div>
 <div class="block">
 	<div class="container about">
 		<div class="colonnes">
 			<div class="colonne1">
 				<img src="images/Java et C++.png"class="retouche">
 				<br> 
 				<p>
 				</p>
 			</div>
 			<div class="colonne2">
 			<img src="images/La POO.png" class="retouche">
 			<br>
 				<p>
 				</p>
 			</div>
 			
 			<div class="colonne3">
 				<img src="images/Modelisation_BDD.png" class="retouche">
 			<br>
 				<p>
 					
 				</p>
 			</div>
 			<div class="colonne4">
 				<img src="images/UML2_BDD.png" class="retouche">
 			<br>
 				<p>
 					
 				</p>
 			</div>
  		</div>
 		
 	</div>
 	
 </div>
</body>
</html>