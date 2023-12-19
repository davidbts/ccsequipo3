<?php
/** 
 * Equipo 3 :  Marco Antonio Romero Rodríguez - David Benjamin Trejo Salazar
 * 
 *  El proyecto cuenta con tres archivos PHP, un archivo CSS y dos imágenes.
 * El primer archivo PHP seria index.html, ya que por su nombre es el archivo principal. 
 * casi toda la funcionalidad se encuentra en este archivo, ya que contiene un formulario 
 * que tiene como acción el mismo documento para que se haga la validación de los datos, 
 * además de recuperar datos ingresados, así como mostrar los mensajes de error que existan, 
 * esto se logra utilizando un objeto myreg de la clase Register que se encuentra en otro 
 * archivo PHP, en el se generar todas las variables utilizadas para el manejo de error y 
 * mensajes, así como las validaciones. Las validaciones que se hicieron fueron, campo vacío, 
 * formato de correo, formato de RFC, Formato de CP, Formato de Telefono. Por ultimo si 
 * todo el formulario se encuentra correctamente llenado se guarda momentáneamente los datos 
 * en variables de sesión y se hace una redirección de pagina en la cual se cargan los datos 
 * y se borras las variables de sesión. 
 * 
*/
  
  session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Equipo 3</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body class="body">
  <section class="vtarget">
    <h2 class="form-title">Datos Correctos!!</h2>
    
    <div class="data">
      <div class="data-container">
        <em class="text-field">
            Nombre:
        </em>
        <p class="text-data">
          <?php
        echo ($_SESSION["name"]);
        ?>
        </p>
      </div> 
      <div class="data-container">
        <em class="text-field">
          Apellidos: 
        </em>
        <p class="text-data">
          <?php
          echo ($_SESSION["lastname"]);
          ?>
        </p>
      </div>
      <div class="data-container">
        <em class="text-field">
          Email:
        </em>
        <p class="text-data">
          <?php
          echo ($_SESSION["email"]);
          ?>
        </p>
      </div>
      <div class="data-container">
        <em class="text-field">
          Contraseña:
        </em>
        <p class="text-data">
          <?php
          echo ($_SESSION["pass"]);
          ?>
        </p>
      </div>
      <div class="data-container">
        <em class="text-field">
          Telefono:
        </em>
        <p class="text-data">
          <?php
          echo ($_SESSION["phone"]);
          ?>
        </p>
      </div>
      <div class="data-container">
        <em class="text-field">
          RFC:
        </em>
        <p class="text-data">
          <?php
          echo ($_SESSION["rfc"]);
          ?>
        </p>
      </div>
      <div class="data-container">
        <em class="text-field">
          Direccion:
        </em>
        <p class="text-data">
          <?php
          echo ($_SESSION["address"]);
          ?>
        </p>
      </div>
      <div class="data-container">
        <em class="text-field">
          Codigo Postal:
        </em>
        <p class="text-data">
          <?php
          echo ($_SESSION["cp"]);
          ?>
        </p>
      </div>
      <div class="data-container">
        <em class="text-field">
          Ciudad:
        </em>
        <p class="text-data">
          <?php
          echo ($_SESSION["city"]);
          ?>
        </p>
      </div>
      <div class="data-container">
        <em class="text-field">
          Fecha de Nacimiento:
        </em>
        <p class="text-data">
          <?php
          echo ($_SESSION["bdate"]);
          ?>
        </p>
      </div>
      <div class="data-container">
        <em class="text-field">
          Area:
        </em>
        <p class="text-data">
          <?php
          echo ($_SESSION["area"]);
          ?>
        </p>
      </div>
    </div>
    
    <a href="index.php">
      <button type="submit">Regresar
      </button>    
    </a>
  </section>
  <footer></footer>
</body>
<?php
unset($_SESSION['email']);
session_destroy(); 
?>
</html>