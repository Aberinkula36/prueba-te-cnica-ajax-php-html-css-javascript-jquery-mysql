<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.min.js"></script>
	<link href="css/styles.css" rel="stylesheet">
    <title>AJAX</title>
</head>
<body>
    <form id="formulario" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="" placeholder="Escriba aquí su email"><br><br>
        <label for="password">Contraseña:</label>
        <input type="text" id="password" name="password" value="" placeholder="Introduzca aquí su contraseña"><br>
        <button id="comprobar">Comprobar usuario</button>
    </form>
	<div id="respuesta"></div>
</body>
<script type="text/javascript">
		$('#comprobar').click(function(){
			$.ajax({
				type:"POST",
				url:"comprobar.php",
				data:$('#formulario').serialize(),
				success:function(res){
					$("#respuesta").html(res);
				}
			});
			return false;
		});
</script>
</html>