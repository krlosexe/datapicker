<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

	<style>
		#agenda{
			position: relative;
			background: #eee;
			width: 500px;
			overflow: hidden;
			padding: 1%;

		}
		#semana div{
			width: 100%;
		}
		#semana label{
			background: red;
			padding: 14px;
		}
	</style>
</head>
<body>

	<div id="agenda">
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
		  
		  var input  = '<div><label onclick="select(\''+dias[dt.getUTCDay()]+'\',this)" id="'+dias[dt.getUTCDay()]+'">'+cont+' '+dias[dt.getUTCDay()]+'</label></div>';
	   	  $("#semana").append(input);    
	    cont = cont + 1;
		});

		$(".owl-carousel").owlCarousel({
			margin:1,
			nav:true,
		});
	};


	function select(day, element) {
		console.log(day);
		$("label").css('background', 'red');
		$(element).css('background', 'blue');
		$("#day").val(day);
	}
</script>
</html>