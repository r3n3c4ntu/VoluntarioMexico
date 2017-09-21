<!DOCTYPE html>
<html>
<head>
	<title>VolunMex</title>
	<link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
	<style type="text/css">
		.table{
			float: left;
			width: 25%;
			border-radius: 10px;
			border: 3px solid #00B285;
			padding: 0px;
			margin: 0px;
			margin: 4%;
			border-spacing:0px;
		}
		tbody{
			padding: 0px;
			margin: 0px;
		}
		.titleCenter{
			width: 100%;
			background-color: #00B285;
			color: white;
			font-family: arial;
			font-size: 20px;
			font-weight: 300;
			float: left;
			padding: 0px;
			margin: 0px;
			overflow: hidden;
		}
		.titleNeed{
			float: left;
			width: 49%;
			color: black;
			padding: 0px;
			margin: 0px;
		}
		.titleContact{
			float: left;
			width: 49%;
			color: black;
			padding: 0px;
			margin: 0px;
			height: 100%;
		}
		.titleDirection{
			float: left;
			width: 100%;
			padding: 0px;
			margin: 0px;
		
		}
		.titleHour{
			float: left;
			width: 49%;
			padding: 0px;
			margin: 0px;
			
		}
		.titleVol{
			float: left;
			width: 49%;
			padding: 0px;
			margin: 0px;
			
		}
		.titleDescription{
			float: left;
			width: 100%;
			padding: 0px;
			margin: 0px;
			
		}
		.titleLike{
			float: left;
			width: 25%;
			background-color:  #3498db ;
			color: white;
			padding: 0px;
			margin: 0px;
			text-align: center;
		}
		.titleDislike{
			float: left;
			width: 25%;
			background-color:  #dc7633 ;
			color: white;
			padding: 0px;
			margin: 0px;
			text-align: center;
		}
		.titleGoing{
			float: left;
			width: 25%;
			background-color: #884ea0;
			color: white;
			padding: 0px;
			margin: 0px;
			text-align: center;
		}
		.titleInterested{
			float: left;
			width: 25%;
			background-color: #f1c40f;
			color: white;
			padding: 0px;
			margin: 0px;
			text-align: center;
		}
		main{
			width: 100%;
			overflow: hidden;
			margin: 0px;
			padding: 0px;
		}
		body{
			padding: 0px;
			margin: 0px;
		}
		#top-cont{
			width: 100%;
			margin: 0px;
			padding: 0px;
			height: 100px;
		}
		#supersearch{
			width: 85%;
			float: right;
			border: 0px solid white;
			border-radius: 10px;
			border-bottom-left-radius: 0px;
			border-top-left-radius: 0px;
			height: 50px;
			background-color:  #e5e7e9;
			padding-left: 15px;
			color: #909497;
			font-size: 25px;
			font-family: arial;
		}
		#inner-top{
			width: 85%;
			margin: 0 auto;
			padding-top: 20px;
			overflow: hidden;
		}
		.top{
			font-size: 40px;
			line-height: 60px;
			color:  #bdc3c7 ;
		}
		.top:hover{
			color: #00B285;
			cursor: pointer;
		}
		.side{
			float: right;
			width: 5%;
			background-color: #e5e7e9;
			height: 50px;
			border-top-left-radius: 10px;
			border-bottom-left-radius: 10px;
			font-size: 35px;
			padding-left: 20px;
		}
		.magic{
			line-height: 60px;
			color:   #909497 ;
		}
		.nooo{
			display: none;
		}
		.h3{
			margin: 0px;
			color:  #717d7e ;
			font-family: arial;
			font-weight: 100;
			font-size: 15px;
		}
		.z{
			font-size: 30px;
			margin: 0 auto;
			text-align: center;
			margin-top: 40px;
		}
		.p{
						color: #e74c3c;
		}
		.butons{
			width: 100%;
		}
		.one{
			margin:0px;
		}
		.sendAjax{
			cursor: pointer;
		}
		.superred{
			float: left;
			font-family: arial;
			margin: 0px;
			padding: 0px;
			color: #e74c3c !important;
		}
	</style>
</head>
<body>	 
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<div id="top-cont">
	<div id="inner-top">
	<i class='step fi-home top'></i>
	<input type="search" name="search" id="supersearch" onkeyup="myFunction()">
	<div class="side">
	<i class='step fi-magnifying-glass magic'></i>
	</div>
	</div>
</div> 
<main>
			<?php 

			require("connect_db.php");
			$sqlCenter="SELECT * FROM Centros";
			$centerquery=mysqli_query($mysqli,$sqlCenter);

				 while($arreglo=mysqli_fetch_array($centerquery)){
				 	echo "<table class='table'>";
				  	echo "<tr class='tableContent'>";
				 
				    	echo "<td class = 'titleCenter'><h3>$arreglo[1]</h3></td>";
				    	echo "<td class = 'titleNeed'><i class='step fi-first-aid p'></i><p class='superred'>Se necesita&nbsp</p><h3 class='h3'>$arreglo[2]</h3></td>";
				    	echo "<td class = 'titleContact'><i class='step fi-telephone p'><p class='superred'>Contacto&nbsp</p><h3 class='h3'>$arreglo[4]</h3></td>";
				    	echo "<td class = 'titleDirection'><i class='step fi-marker p'><p class='superred'>Dirección&nbsp</p><h3 class='h3'>$arreglo[3]</h3></td>";
						echo "<td class = 'titleHour'><i class='step fi-clock p'><p class='superred'>Horario&nbsp</p><h3 class='h3'>$arreglo[5]</h3></td>";
						echo "<td class = 'titleVol'><i class='step fi-torsos-male-female p'><p class='superred'>Voluntarios&nbsp</p><h3 class='h3'>$arreglo[10]</h3></td>";
						echo "<td class = 'titleDescription'><i class='step fi-info p'><p class='superred'>Descripción de voluntario &nbsp</p><h3 class='h3'>$arreglo[11]</h3></td>";
						echo "<td class = 'titleLike sendAjax'><div class='butons'><i class='step fi-like z'></div></i><h3 class= 'one'>$arreglo[6]</h3></td>";
						echo "<td class = 'titleDislike sendAjax'><div class='butons'><i class='step fi-dislike z'></div></i><h3 class= 'one'>$arreglo[7]</h3></td>";
						echo "<td class = 'titleGoing sendAjax'><div class='butons'><i class='step fi-clipboard-pencil z'></div></i><h3 class= 'one'>$arreglo[8]</h3></td>";
						echo "<td class = 'titleInterested sendAjax'><div class='butons'><i class='step fi-star z'></div></i><h3 class= 'one'>$arreglo[9]</h3></td>";
						echo "<td class = 'nooo'>$arreglo[0]</td>";
				    

					echo "</tr>";

				echo "</table>";

					/*extract($_GET);
					if(@$idbaja==2){

						$sentencia="update $getCountry set Estatus='BAJA', FechaDeBaja='$date' where id='$id'";
						$resent=mysqli_query($mysqli,$sentencia);
							if ($resent==null) {
								echo "Error de procesamieno no se han actuaizado los datos";
								echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
								header("location: 'user-edit.php?country='+countryText");
								
								echo "<script>location.href='admin.php'</script>";
							}else {
								echo '<script>swal("Registro Actualizado", "Ha dado de baja a un alumno", "success")</script> ';
								echo "<script>location.href='user-edit.php?country='+countryText</script>";

								
							}
					}

					if(@$idalta==2){
				
						$sentencia1="update $getCountry set Estatus='ALTA', FechaDeBaja='' where id='$id'";
						$resent1=mysqli_query($mysqli,$sentencia1);
							if ($resent1==null) {
								echo "Error de procesamieno no se han actuaizado los datos";
								echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
								header("location: 'user-edit.php?country='+countryText");
								
								echo "<script>location.href='../admin.php'</script>";
							}else {
								echo '<script>swal("Registro Actualizado", "Ha dado de alta a un alumno", "success")</script> ';
								echo "<script>location.href='user-edit.php?country='+countryText</script>";

								
							}
						}*/
					};
			?>
		</main>
		<script type="text/javascript">
			$(".top").click(function(){
	 window.history.back(); 
});
		</script>
		<script type="text/javascript">
			function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("supersearch");
  filter = input.value.toUpperCase();
 
	var numItems = $('.table').length;
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < numItems; i++) {
  	td = $(".table:eq("+i+") .titleCenter");
    if (td) {
      if (td.text().toUpperCase().indexOf(filter) > -1) {
        $( ".table" ).eq(i).show();
      } else {
         $( ".table" ).eq(i).hide();
      }
    }
  }
}
		</script>
		<script type="text/javascript">
		var opLike;
		var opDislike;
		var opGoing;
		var opInterested;
		var mainTry ;
		$( window ).load(function() {
  		opLike = true;
		opDislike = true;
		opGoing = true;
		opInterested = true;
		mainTry = false;
});
		$(".sendAjax").click(function(){
			var id = parseInt($(this).parent().closest('table').find('.nooo').text());
			var later = parseInt($(this).text());
			later++;
			var checkthis;

			if ($( this ).hasClass( "titleLike" )) {
				if (opLike == true) {
				operation = "like";
				opLike = false;
				mainTry = true;
				checkthis = $(this).find('h3');
			}
			}
			if ($( this ).hasClass( "titleDislike" )) {
				if (opDislike) {
				operation = "ds";
				opDislike = false;
				mainTry = true;
				checkthis = $(this).find('h3');
			}
			}
			if ($( this ).hasClass( "titleGoing" )) {
				if (opGoing) {
				operation = "going";
				opGoing = false;
				mainTry = true;
				checkthis = $(this).find('h3');
			}
			}
			if ($( this ).hasClass( "titleInterested" )) {
				if (opInterested) {
				operation = "interested";
				opInterested = false;
				mainTry = true;
				checkthis = $(this).find('h3');
			}
		}
			if (mainTry) {
			$.ajax({
						  		type: "POST",
						  		url: "checkInf.php",
						  		data: {oper : operation, id : id},
						  		cache: false,

						  		success: function(){
						  			operation= null;
						  			checkthis.text(later);
						  		}
						  	});
			}
		});
		</script>
</body>
</html>