<!DOCTYPE html>

<html lang="fr">
<head>
	  <title>One Bee - Graphique</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="bootstrap.min.css" rel="stylesheet">
	  <script src="jquery-3.2.1.min.js"></script>
	  <script src="bootstrap.min.js"></script>
	  <meta charset="utf-8" />

	<link href="graphe.css" rel="stylesheet" type="text/css" />
	<script src="highcharts.js"></script>
	<script src="graphiques.js"></script>
	<script src="exporting.js"></script>
	<script src="canvas-tools.js"></script>
	<script src="jspdf.min.js"></script>
	<script src="highcharts-export-clientside.js"></script>

	<title>Test pour les graphiques</title>	
</head>
<body style="marging-top :100 px">

<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span class="navbar-brand">One Bee</span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">ACCUEIL</a></li>
		  <li class="active"><a href="graphe.php">GRAPHIQUE</a></li>
		  <li><a href="flux.php">FLUX VIDEO</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		  <li><a href="#">REDEMARER</a></li>
		</ul>
	  </div>
	</nav>


	<div class="chartTest">
		<div id="chart1"></div>
		
		<!-- des boutons... -->
		<form method="post">
			<!-- format date s'affiche sur Chrome et Edge, pour Firefox on ne voit qu'un champ de texte, format américain "mm/jj/aaaa hh:mm" -->
			<input type="datetime-local" id="selectDateDebut" />
			<input type="datetime-local" id="selectDateFin" />
			<span id="lblGranul">Granularité</span>
			<select id="selectGranularite">
				<option value="minute">Minute</option>
				<option value="heure">Heure</option>
				<option value="jour">Jour</option>
				<option value="semaine">Semaine</option>
				<option value="mois">Mois</option>
				<option value="annee">Année</option>
			</select>
		</form>
		<button id="update">Mettre à jour</button>

		<script>
			$(function() {
				$('#update').click(function() {
				// TEST
				/*console.log($("#selectDateDebut").val());
				console.log($("#selectDateFin").val());
				console.log($("#selectGranularite").val());*/
				
					$("#chart1").load("graphiques.php", {
						dateDebut: $("#selectDateDebut").val(),
						dateFin: $("#selectDateFin").val(),
						granul: $("#selectGranularite").val()
					});
				}); 
			});/*
			$(function() {
				$('#update').click(function() {
				// TEST
				console.log($("#selectDateDebut").val());
				console.log($("#selectDateFin").val());
				console.log($("#selectGranularite").val());
				
					$("#chart1").load("graphiques.php", 'dateDebut='+$("#selectDateDebut").val()+'&dateFin='+$("#selectDateFin").val()+'&granul='+$("#selectGranularite").val());
				}); 
			});*//*
			$(function() {
				$('#update').click(afficher()); 
			});*/
			
			// page onload
			$("#chart1").load("graphiques.php");
		</script>
	
	</div>
</div>
		
</html>
</body>

