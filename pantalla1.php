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
        <title>Document</title>
    </head>
    <body>
    <form action="insertar_datos.php" method="POST">
    <div class="container">
        <div class="card">
            <h3 class="card-header">Catalogo de Planeacion</h3>
            <div class="card-body">            
                      <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre de la Materia</label>
                    <input type="text" class="form-control" name="Nmateria" id="Nmateria" placeholder="Ejemplo : Programacion Orientada Objetos " required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre de la Unidad</label>
                    <input type="text" class="form-control" name="Nunidad" id="Nunidad" placeholder="Unidad 1. Introduccion a la programacion " required>
                </div>
                <div class="form-group shadow-textarea">
                    <label for="    ">Topics(Temas)</label>
                    <textarea class="form-control z-depth-1" name="topics" id="topics"placeholder="Descripcion de el tema"required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput4">Estrategias de aprendizaje / enseñanza</label>
                    <textarea class="form-control" name="learning" id="learning"placeholder="Estrategias de aprendizaje"required></textarea>
                </div>
                   <div class="form-group">
                    <label for="exampleFormControlInput4">Recursos educativo</label>
                    <textarea class="form-control" name="MEducativo" id="MEducativo"placeholder="Ejemplo: Internet,Equipo de computo"required></textarea>
                </div>
            </form>
                <div class="form-group">
                    <label for="exampleFormControlInput4">Material de referencia</label>
                    <textarea class="form-control" name="referencias" id="referencias"placeholder="Ejemplo: - Restrepo J. A.Computadoras para todos Ed. Vintage Español"required></textarea>
                </div>

                <div class="form-group">
                    <input class="btn btn-secondary btn-lg" type="submit" value="Insertar Datos a Catalogo">

                    <button type="button" class="btn btn-secondary btn-lg " onclick="location.href='Cargamasiva.php'">Cargar Masiva con Excel</button>
                </div>
            </form>
            </div>
        </div>
    </div>
          </div>
    </body>
</html>