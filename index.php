
<!DOCTYPE html>
<html lang="en">

<head>
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
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

  <title>Document</title>
</head>

<body>
  <form action="CrearPlaneacion.php" method="POST">
    <div class="container">
      <div class="card">
        <h3 class="card-header">Catalogo de Planeacion</h3>
        <div class="form-group">
          <label for="CMaestro">Seleccione al Maestro</label>
          <select class="form-control" name="CMaestro">
          <?php
            include 'config.php';
            $query = mysqli_query($mysql, "select id, nombre from Profesores;");

            while ($datos = mysqli_fetch_array($query)) {
            ?>
              <option value="<?php echo $datos['id']; ?>"><?php echo $datos['nombre']; ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="ciclo">Seleccione el ciclo</label>
          <select class="form-control" name="ciclo">
            <?php
            include 'config.php';
            $query = mysqli_query($mysql, "select id, NombreCiclo from cicloescolar;");

            while ($datos = mysqli_fetch_array($query)) {
            ?>
              <option value="<?php echo $datos['id']; ?>"><?php echo $datos['NombreCiclo']; ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="materia">Seleccione la materia</label>
          <select class="form-control" name="materia">
            <?php
            include 'config.php';
            $query = mysqli_query($mysql, "select id, NombreMateria from Materias;");

            while ($datos = mysqli_fetch_array($query)) {
            ?>
              <option value="<?php echo $datos['id']; ?>"><?php echo $datos['NombreMateria']; ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        </select>
  </form>
  </div>
  </div>
  </div>
</body>
</html>

