<!DOCTYPE html>
<html>



<head>
	<title> Probando el canvas</title>
<script type="text/javascript">
	function cargador(){
		var lienzo = document.getElementById('lienzo');
		var lienzo1 = lienzo.getContext('2d');

		if(lienzo.getContext){
			var ctx = lienzo.getContext('2d');
			ctx.moveTo(150,25);
			ctx.quadraticCurveTo(25,25,65,62.5);
			ctx.stroke();


		} else{
			alert('Navegador no soportado');
		}

		/*
		lienzo1.fillStyle = "rgba(0,0,200,1)";
		lienzo1.fillRect(45,30,35,100);
		lienzo1.fillStyle = "rgba(200,0,0,1)";
		lienzo1.fillRect(70,40,65,110);
		lienzo1.fillStyle = "rgba(4,175,21,1)";
		lienzo1.fillRect(115,50,95,90);
		

		
		lienzo1.beginPath(); 
		lienzo1.strokeStyle = "rgba(0,0,200,0.8)";
		lienzo1.moveTo(200,405);
		lienzo1.lineTo(200,175);
		lienzo1.lineTo(60,405);
		lienzo1.closePath();
		lienzo1.stroke();


		lienzo1.beginPath();
		lienzo1.strokeStyle = "rgba(200,200,0,0.8)";
		lienzo1.moveTo(180,300);
		lienzo1.lineTo(90,145);
		lienzo1.lineTo(60,300);
		lienzo1.lineTo(105,200);
		lienzo1.lineTo(120,210);
		lienzo1.closePath();
		lienzo1.stroke();

		lienzo1.beginPath();
		lienzo1.fillStyle = "rgba(125,0,125,0.5)";
		lienzo1.moveTo(200,405);
		lienzo1.lineTo(200,175);
		lienzo1.lineTo(60,405);
		lienzo1.closePath();
		lienzo1.fill();


		lienzo1.fillStyle = "rgba(200,0,0,0.5)";
		lienzo1.beginPath();
		lienzo1.moveTo(75,250);
		lienzo1.bezierCurveTo(75,247,70,235,50,235);
		lienzo1.bezierCurveTo(20,235,20,272,20,272);
		lienzo1.bezierCurveTo(20,290,40,312,75,330);
		lienzo1.bezierCurveTo(110,312,130,235,100,235);
		lienzo1.closePath();
		lienzo1.fill();*/



	}


</script>


</head>


<body onload="cargador()">
	<h1>Canvas</h1>
	<canvas id="lienzo"  > 

	</canvas>


</body>



</html>