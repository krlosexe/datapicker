<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
			background: red;
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
	</style>
</head>
<body>
	<div id="agenda">
		<h4>Agenda para una visita</h4>
		<h3>Selecciona un dia</h3>
		<div id="semana" class="owl-carousel">
			
		</div>	
	</div>

	
	<br>

	<input type="text" name="day" id="day">




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
		  
		  var input  = '<div><div class="day" onclick="select(\''+dias[dt.getUTCDay()]+'\',this)" id="'+dias[dt.getUTCDay()]+'">'+cont+' '+dias[dt.getUTCDay()]+'</div></div>';
	   	  $("#semana").append(input);    
	    cont = cont + 1;
		});

		$(".owl-carousel").owlCarousel({
			margin:20,
			nav:true,
			navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
		});
	};


	function select(day, element) {
		console.log(day);
		$(".day").css('background', 'red');
		$(element).css('background', 'blue');
		$("#day").val(day);
	}
</script>
</html>