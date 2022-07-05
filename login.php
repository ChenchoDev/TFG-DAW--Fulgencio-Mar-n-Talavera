<!DOCTYPE html>
<?php
header("Content-Type: text/html;charset=utf-8");

function connect()
{

    $link = mysqli_connect('b7fpfyjphuabyukthepa-mysql.services.clever-cloud.com', 'ubsku5wg6scdm0lx', '8tZYVqVQ0T6QwfA7a7Ik', 'b7fpfyjphuabyukthepa');

    if (!$link) {
        echo "Error: No se pudo conectar a MySQL.<br/>";
        exit;
    }

    return $link;
}
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Clinica de Salud | SANA</title>
</head>

<body>
    <?php
    connect();
    ?>
    <div class="container-fluid sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top m-auto">
            <div class="header container">
                <div class="logo d-flex flex-column align-items-center justify-content-center text-center">

                    <a class="navbar-brand" href="index.php">
                        <img src="img/frog.svg" alt="logoSana" height="80px">
                        <p>SANA</p>
                    </a>
                </div>

                <form class=" d-flex align-content-sm-around">

                    <a class="btntipo" href="#">CONTACTO</a>

                </form>
            </div>
        </nav>

    </div>
    <header class="container-fluid">
        <div class="content_login container-fluid">
            <form action="#" method="post" class=" formulario align-items-center justify-content-center text-center">
                <div class="mb-3">
                    
                    <input type="text" class="form-control" id="name" placeholder="Nombre">
                    
                </div>
                <div class="mb-3">
                  
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
             
                <button type="submit" class="btntipo">ACCEDER</button>
            </form>
        </div>


    </header>
    <footer class="container-fluid  p-2 ">
        <div class=" text-center">
            <p class="text-white h6">SANA | Todos los derechos reservados 2023</p>

        </div>


    </footer>




    <script src="js/app.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
</body>

</html>