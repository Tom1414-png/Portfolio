<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="..\css\competence.css"/>
		<title>Mes compétences</title>
	</head>
	<body>
		<div class="menu">
			<ul>
				<li><a href="../index.php">Accueil</a></li>
				<li><a href="..\php/Compétence.php">Compétences</a></li>
            	<li><a href="..\php/Formation.php">Formation</a></li>
            	<li><a href="..\php/Réalisations.php">Réalisation</a></li>
            	<li><a href="..\php/Contact.php">Contact</a></li>
			</ul>
		</div>
	</body>

<?php

require_once("..\yaml\yaml.php");
$data=yaml_parse_file('..\fichieryaml/Compétences.yaml');

echo "<h2>Competence</h2>\n";
$Competence=$data["Competence"] ;
echo "<p>".ucfirst($Competence["domaines1"])."</p>\n";
echo "<p>".ucfirst($Competence["item"])."</p>\n";
echo "<p>".ucfirst($Competence["domaine2"])."</p>\n";
?>