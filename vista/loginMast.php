<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/talentsv.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/logins.css"/>
    <link rel="stylesheet" href="../css/form2.css"/>
    <title>Login Maestros</title>
</head>
<body>

<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("contraseña");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
        }
    }
</script>

<section>
<div id="background">
		
    <div id="contenido">
      
      <div id="form">
                    <img src="../imagenes/talentsv.png" class="img-fluid" />
                
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                <h3 class="font-weight-bold mb-4">Login Administrador</h3>
                    <div class="mb-4">
                      <form action="../controlador/validarMast.php" method="post">
                      
                        <label for="correo" class="form-label font-weight-bold">Correo: </label>
                        <input type="email" name="correo" id="correo" class="form-control bg-dark-x border-0" id="exampleInputEmail1" placeholder="Ingresa tu correo" aria-describedby="correo1">
                        
                        <div class="mb-4">
                        <label for="contra" class="form-label font-weight-bold">Contraseña: </label> 
                        <input class="form-control" type="password" name="contraseña" id="contraseña"  class="form-control bg-dark-x border-0 mb-2" placeholder="Ingresa tu contraseña" id="contraseña1">
                        <br>
                        <div class="col">
                          <button class="btn btn-primary" type="button" onclick="mostrarContrasena()">Mostrar Contraseña</button>
                          <br><br>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    <a href="../index.html" class="btn btn-primary">Volver al Inicio</a>
                  </div>
                  </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </form>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>