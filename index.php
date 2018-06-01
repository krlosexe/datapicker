<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		#semana div{
			margin: 5% auto;
		}
		#semana label{
			background: red;
			padding: 14px;
		}
	</style>
</head>
<body>

	<div id="semana">
		
	</div>


</body>
<script src="jquery.min.js"></script>
<script>
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
	};


	function select(day, element) {
		console.log(day);
		$("label").css('background', 'red');
		$(element).css('background', 'blue');
	}
</script>
</html>