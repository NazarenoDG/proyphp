<?php 
session_start();
    if($_POST){
        if( ($_POST['usuario']=="develoteca") && ($_POST['contraseña']=="12345") ){

            $_SESSION['usuario'] ="develoteca";


            header("Location:index.php" );

        }else{
            echo "<script> alert('Usuario o contraseña incorrecta'); </script>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>

            <div class="col-md-4">
            <br/>

                <div class="card">
                    <div class="card-header">
                        Iniciar sesion
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Usuario: <input class="form-control" type="text" name="usuario" id="">
                            <br/>
                            Contraseña: <input class="form-control" type="password" name="contraseña" id="">
                            <br/>
                            <button class="btn btn-success" type="submit">Entrar al portafolio</button>
                        </form>  
                    </div>
                    <div class="card-footer text-muted">
                        
                    </div>
                </div>
                
            </div>
            <div class="col-md-4">
                
            </div>
        </div>


          
    </div>


</body>
</html>