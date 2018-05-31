<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
	    var cont = 0;
	    $.each( dias, function( key, value ) {
	    	cont = cont + 1;
	      var dt = new Date('2018-05-'+cont);
		  
		  //var input  = 'Dia de la semana : '+ cont + ' - '+ dias[dt.getUTCDay()]+'<br>';
		   var input  = '<div><label for="'+dias[dt.getUTCDay()]+'">'+dias[dt.getUTCDay()]+'</label><input type="radio" name="dia" id="'+dias[dt.getUTCDay()]+'"></div>';
	   	  $("#semana").append(input);    
		});
	};
</script>
</html>