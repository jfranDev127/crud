<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!--link rel="stylesheet" href="estilos.css"-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/jquery-3.6.0.js">
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="modulo_usuario.php">Usuarios <i class="bi bi-person-square"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modulo_maquilladores.php">Maquilladores <i class="bi bi-brush-fill"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modulo_inventario.php">Inventario <i class="bi bi-receipt"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estadisticas <i class="bi bi-bar-chart-line-fill"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Categorias <i class="bi bi-bell-fill"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cerrar Sesion <i class="bi bi-box-arrow-right"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- contenido crud-->
    
    <br>
    <div class="container">
        <h1 class="text-center"> Lista de Articulos</h1>
        <br><br>
        <!--buscador-->
        <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Ingrese articulo" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
        </div>
        
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-bs-toggle="modal" data-bs-target="#insertar">
            Agregar Articulo <i class="bi bi-bag-plus-fill"></i>
            </button>
            
            <br><br>
        <table class="table table-striped table-hover caption-top">
            
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Serial</th>
                    <th scope="col">Color</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Activo</th>
                    <th scope="col">En stock</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
               <!--//Mostrar registro de la base de date_offset_get-->
                <?php include_once("mostrar.php")?>
                <?php foreach($usuarios as $usuario) {?>
                 <tr>
                   <!-- <td><?php echo $usuario->id?></td>
                    <td><?php echo $usuario->nombre?></td>
                    <td><?php echo $usuario->apellido?></td>
                    <td><?php echo $usuario->usuario?></td>
                    <td><?php echo $usuario->password?></td>
                    <td><?php echo $usuario->correo?></td>
                    <td><?php echo $usuario->sexo?></td>
                   <td>
                        <button type="button" class="btn btn-warning editbtn" data-bs-toggle="modal" data-bs-target="#editar">
                            Editar <i class="bi bi-pencil-square"></i>
                        </button>
                   </td>
                   <td>
                        <button type="button" class="btn btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#eliminar">
                            Eliminar <i class="bi bi-x-circle"></i>
                        </button>
                   </td>-->
                </tr>
                
                <?php
                }      
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal insertar-->
<div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <!--Formulario de insertar-->
                <form action="registro.php" method="POST">
                    <div class="form-group">
                        <br>
                        <input type="text" class="form-control"  name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="text" class="form-control"  name="usuario" placeholder="usuario">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="password" class="form-control"  name="password" placeholder="Contrase??a">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="email" class="form-control"  name="correo" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="">Genero</label>
                        <select name="sexo" id="" class="form-control">
                        <option value="">Seleccione su Genero</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>


      </div>
      
    </div>
  </div>
</div>

<!-- Modal Editar-->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
                <!--Formulario de insertar-->
                <form action="editar.php" method="POST">
                    <input type="hidden" name="id" id="update_id">
                    <div class="form-group">
                        <br>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contrase??a">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="">Genero</label>
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="">Seleccione su Genero</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>


      </div>
    </div>
  </div>
</div>


<!-- Modal Eliminar-->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <h4>??Esta seguro de eliminar este usuario?</h4>
                <!--Formulario de eliminar-->
                <form action="eliminar.php" method="POST">
                    <input type="hidden" name="id" id="delete_id">
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>


      </div>
    </div>
  </div>
</div>






<!--Escript para traer los datos de la base de datos al formulario dentro del modal-->

<script>
$('.editbtn').on('click' ,function(){
    $tr=$(this).closest('tr');
    var datos=$tr.children("td").map(function(){
        return $(this).text();
    });

    $('#update_id').val(datos[0]);
    $('#nombre').val(datos[1]);
    $('#apellido').val(datos[2]);
    $('#usuario').val(datos[3]);
    $('#password').val(datos[4]);
    $('#correo').val(datos[5]);
    $('#sexo').val(datos[6]);
});
</script>

<!--Script para eliminar-->

<script>
$('.deletebtn').on('click' ,function(){
    $tr=$(this).closest('tr');
    var datos=$tr.children("td").map(function(){
        return $(this).text();
    });

    $('#delete_id').val(datos[0]);
    
});
</script>

<!--librerias javascript-->
<script src="js/app.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>