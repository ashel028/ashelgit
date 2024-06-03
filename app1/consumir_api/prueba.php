<?php
$datos = json_decode(file_get_contents("https://luisalumnos-714e4-default-rtdb.firebaseio.com/Alumnos.json"), true);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>

     <!-- Core theme CSS (includes Bootstrap)-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   </head>
   <body>
     <div class="container px-4 px-lg-5 mt-5">
         <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
     <?php
     foreach ($datos as $curso => $info) {
         ?>
     <div class="card" style="width: 18rem;">
       <img src="<?php echo $info["imagen"] ?>" class="card-img-top" alt="foto">
       <div class="card-body">
         <h5 class="card-title"> <?php echo $info["nombre"]?> </h5>

       </div>
     </div>
<?php
}
 ?>


</div>

</div>
     <!-- Importar jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   </body>
 </html>
