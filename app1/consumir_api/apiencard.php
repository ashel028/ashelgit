<?php
//convertimos en un array los datos de la api que estan en formato json y lo guardamos en una variable.

$datos = json_decode(file_get_contents("https://luisalumnos-714e4-default-rtdb.firebaseio.com/Alumnos.json"), true);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--<meta http-equiv="refresh" content="5">-->
    <title>api en card</title>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                foreach ($datos as $curso => $info) {
                    ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo $info['imagen'] ?>" alt="">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="card-title" style="width: 100%; font-size:25px;"><?php echo $info['Apellido'] ?></h5>
                                    <!-- Product price-->
                                    <span> <?php echo $info['nombre']; ?></span>
                                    <br>
                                  </div>
                            </div>
                            <!-- Product actions-->
                          </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

       <!-- Importar jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>
</html>
