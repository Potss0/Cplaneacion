<!DOCTYPE html>
<html>
<head>
	<title>Carga Masiva</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">    
	<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/fileupload.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<br>
	<form id="fileupload" method="POST" enctype="multipart/form-data">
	<div class="container">
		<div class="card">
	  		<h3 class="card-header">Carga Masiva</h3>
	  		<div class="card-body">	  			
	  				<label for="file">Selecciona el archivo Excel</label><br>
	     			<input type="file" name="file" id="file">
	     			<input type="submit" id="cargar" class="btn btn-primary" value="Cargar archivo">
	     			
	  			</form>
	  			<div id="mensaje"></div>

			</div>
		</div> 
	</div>
</div>
</body>
</html>