<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DocumentS</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

	<style>
		#agenda{
			position: relative;
			background: #eee;
			width: 70%;
			overflow: hidden;
			padding: 1%;

		}
		#semana div{
			width: 100%;
		}
		.day{
			border: 1px solid #999;
			text-align: center;
			padding: 10% 0;
			border-radius: 8px;
		}

		.day label{
			font-size: 2em;
		}
		.owl-nav{
			position: absolute;
			top: -40px;
			right: 0;
			text-align: right;
			margin-right: 2%;
		}

		.owl-nav i{
			font-size: 1.6em;
			color: #37c9ff;
		}

		.owl-nav button{
			margin: 0 2%;
		}

		

		#turno{
			text-align: center;
		}
		#turno div{
			display: inline-block;
			padding: 4% 2%;
			border: 1px solid #eee;
			text-align: center;
			border-radius: 8px;

		}
	</style>
</head>
<body>
	<div id="agenda">
		<h4>Agenda para una visita</h4>
		<h3>Selecciona un dia</h3>
		<div id="semana" class="owl-carousel">
			
		</div>	

		<h3>Elije un tiempo se adecue a ti</h3>

		<div id="turno">
			<div class="turno" onclick="select_turno('Mañana', this)" id="manana"><span>Mañana <br> AM - 12 PM</span></div>
			<div class="turno" onclick="select_turno('Mediodia', this)" id="medidia"><span>Mediodia <br> 12PM - 13PM</span></div>
			<div class="turno" onclick="select_turno('Tarde', this)" id="tarde"><span>Tarde <br> 15PM - 19Pm</span></div>
		</div>
	</div>

	
	<br>

	<input type="text" name="day" id="day">
	<input type="text" name="turno" id="turnos">




</body>
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script>

	$(document).ready(function(){
	 // $(".owl-carousel").owlCarousel();
	});

	window.onload = function(){
    var dia="16";
    var mes="November";
    var anio="2016";
    diaSemana();
	}

	function diaSemana(){
	    var dias=["dom", "lun", "mar", "mie", "jue", "vie", "sab"];
	    var cont = 25;
	    $.each( dias, function( key, value ) {
	      var dt = new Date('2018-05-'+cont);
		  var dia_mostrar = traducir_day(dias[dt.getUTCDay()]);
		  var input  = '<div><div class="day" onclick="select(\''+dias[dt.getUTCDay()]+'\',\''+cont+'\',this)" id="'+dias[dt.getUTCDay()]+'"><span>'+dia_mostrar+'</span> <br><label>'+cont+'</label></div></div>';
	   	  $("#semana").append(input);    
	    cont = cont + 1;
		});

		$(".owl-carousel").owlCarousel({
			margin:20,
			nav:true,
			navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
		});
	};


	function select(day, cont, element) {
		console.log(day);
		$(".day").css('border-color', '#999');
		$(element).css('border-color', '#37c9ff');
		$("#day").val(cont+' '+day);
	}


	function select_turno(turno, element) {
		console.log(turno);
		$(".turno").css('border-color', '#eee');
		$(element).css('border-color', '#37c9ff');
		$("#turnos").val(turno);
	}



	function traducir_day(day) {
		if (day == "dom") {
			return "Domingo"
		}
		if (day == "lun") {
			return "Lunes"
		}

		if (day == "mar") {
			return "Martes"
		}
		if (day == "mie") {
			return "Miercoles"
		}
		if (day == "jue") {
			return "Jueves"
		}
		if (day == "vie") {
			return "Viernes"
		}
		if (day == "sab") {
			return "Sabado"
		}
	}
</script>
</html>