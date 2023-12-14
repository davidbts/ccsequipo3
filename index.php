
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Equipo 3</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body class="body">
  <section class="target">
  <?php
    require_once("Register.php");
    $myform = new Register();
    if(empty($_POST) != true){
      $myform->setName($_POST['name']);
      $myform->setLastname($_POST['lastname']);
      $myform->setEmail($_POST['email']);
      $myform->setPass($_POST['password']);
      $myform->setPhone($_POST['phone']);
      $myform->setRfc($_POST['rfc']);
      $myform->setAddress($_POST['address']);
      $myform->setCp($_POST['cp']);
      $myform->setCity($_POST['city']);
      $myform->setBdate($_POST['bdate']);
      $myform->setArea($_POST['area']);

    $noerror = false;
    if( $myform->errorEmpty("name") != 0){
      $noerror = true;
    }
    if($myform->errorEmpty("lastname") != 0){
      $noerror = true;
    }
    if($myform->errorEmpty("email") != 0 
        || $myform->errorEmail("email") ){
      $noerror = true;
    }
    if($myform->errorEmpty("pass") != 0
    || $myform->errorPassword("pass")
    || $myform->errorSamePassword("pass",$_POST['repassword']) ){
      $noerror = true;
    }
    if($myform->errorEmpty("phone") != 0
    || $myform->errorPhone("phone")
      ){
      $noerror = true;
    }
    if($myform->errorEmpty("rfc") != 0 
      || $myform->errorRFC("rfc") ){
      $noerror = true;
    }
    if($myform->errorEmpty("address") != 0){
      $noerror = true;
    }
    if($myform->errorEmpty("cp") != 0 
      || $myform->errorCP("cp") ){
      $noerror = true;
    }
    if($myform->errorEmpty("city") != 0){
      $noerror = true;
    }
    if($myform->errorEmpty("area") != 0){
      $noerror = true;
    }
    if($myform->errorEmpty("bdate") != 0){
      $noerror = true;
    }
    if($noerror == false ){
      session_start();
      $_SESSION["name"] = $myform->getName();
      $_SESSION["lastname"] = $myform->getLastname();
      $_SESSION["email"] = $myform->getEmail();
      $_SESSION["pass"] = $myform->getPass();
      $_SESSION["phone"] = $myform->getPhone();
      $_SESSION["rfc"] = $myform->getRfc();
      $_SESSION["address"] = $myform->getAddress();
      $_SESSION["cp"] = $myform->getCp();
      $_SESSION["city"] = $myform->getCity();
      $_SESSION["bdate"] = $myform->getBdate();
      $_SESSION["area"] = $myform->getArea();
      header('Location: verification.php');
    }
  }

?>
    <div class="image-target">
      <img src="./10594784_4498893.jpg" alt="imagen de registro" >
    </div>
    <div class="form-target">
      <h2 class="form-title">Formulario de Registro</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="content-form" novalidate="novalidate">
        <div class="field-form tooltip-container">
          <label for="name">Nombre(s)</label>
          <input
            placeholder="Nombre(s)"
            type="text" id="name" name="name" 
            value="<?php echo (($myform->getName())?$myform->getName():"" ) ?>" 
            class='nada <?php echo (($myform->getCodeError("name") != 0)?"error":"") ?>' >
          <?php 
          if($myform->getCodeError("name") != 0){
            echo "<span class='tooltip-text error' > ";
            echo ($myform->getMsjError("name"));
            echo  "</span>";
          }
          ?>
        </div>
        <div class="field-form tooltip-container">
          <label for="lastname">Apellidos</label>
          <input
          placeholder="Apellidos"
          type="text" id="lastname" name="lastname" 
          class='nada <?php echo (($myform->getCodeError("lastname") != 0)?"error":"") ?>' 
          value="<?php echo (($myform->getLastname())?$myform->getLastname():"" ) ?>"> 
          <?php 
          if($myform->getCodeError("lastname") != 0){
            echo "<span class='tooltip-text error' > ";
            echo ($myform->getMsjError("lastname"));
            echo  "</span>";
            }
          ?>
        </div>
        <div class="field-form tooltip-container">
          <label for="email">Correo Electronico</label>
          <input
            placeholder="Correo electrónico"
            type="email" id="email" name="email" 
            value="<?php echo (($myform->getEmail())?$myform->getEmail():"" ) ?>" 
            class='nada <?php echo (($myform->getCodeError("email") != 0)?"error":"") ?>' >
          <?php 
          if($myform->getCodeError("email") != 0){
            echo "<span class='tooltip-text error' > ";
            echo ($myform->getMsjError("email"));
            echo  "</span>";
            }
          ?>
        </div>
        <div class="field-form tooltip-container">
          <label for="password">Contraseña</label>
          <input
            placeholder="Incluir mayuscula, minuscula y numero"
            type="password" id="password" name="password" 
            value="<?php echo (($myform->getPass())?$myform->getPass():"" ) ?>" 
            class='nada <?php echo (($myform->getCodeError("pass") != 0)?"error":"") ?>' >
          <?php 
          if($myform->getCodeError("pass") != 0){
            echo "<span class='tooltip-text error' > ";
            echo ($myform->getMsjError("pass"));
            echo  "</span>";
            }
          ?>
        </div>
        <div class="field-form tooltip-container">
          <label for="repassword">Repetir Contraseña</label>
          <input
            placeholder="Incluir mayuscula, minuscula y numero" 
            type="password" id="repassword" name="repassword"  >
        </div>
        <div class="field-form tooltip-container">
          <label for="phone">Telefono</label>
          <input
            placeholder="Numero de contacto" 
            type="number" id="phone" name="phone" 
            value="<?php echo (($myform->getPhone())?$myform->getPhone():"" ) ?>" 
            class='nada <?php echo (($myform->getCodeError("phone") != 0)?"error":"") ?>' >
          <?php 
          if($myform->getCodeError("phone") != 0){
            echo "<span class='tooltip-text error' > ";
            echo ($myform->getMsjError("phone"));
            echo  "</span>";
            }
          ?>
        </div>
        <div class="field-form tooltip-container">
          <label for="rfc">RFC</label>
          <input
            placeholder="RFC" 
            type="text" id="rfc" name="rfc" 
            value="<?php echo (($myform->getRfc())?$myform->getRfc():"" ) ?>" 
            class='nada <?php echo (($myform->getCodeError("rfc") != 0)?"error":"") ?>' >
          <?php 
          if($myform->getCodeError("rfc") != 0){
            echo "<span class='tooltip-text error' > ";
            echo ($myform->getMsjError("rfc"));
            echo  "</span>";
            }
          ?>
        </div>
        <div class="field-form tooltip-container">
          <label for="address">Direccion</label>
          <input
          placeholder="Calle, no. ext y no. int"
            type="text" id="addres" name="address" 
            value="<?php echo (($myform->getAddress())?$myform->getAddress():"" ) ?>" 
            class='nada <?php echo (($myform->getCodeError("address") != 0)?"error":"") ?>' >
          <?php 
          if($myform->getCodeError("address") != 0){
            echo "<span class='tooltip-text error' > ";
            echo ($myform->getMsjError("address"));
            echo  "</span>";
            }
          ?>
        </div>
        <div class="field-form tooltip-container">
          <label for="cp">Codigo Postal</label>
          <input 
            placeholder="Codigo postal - 5 digitos"
            value="<?php echo (($myform->getCp())?$myform->getCp():"" ) ?>"
            type="number" id="cp" name="cp" 
            class='nada <?php echo (($myform->getCodeError("cp") != 0)?"error":"") ?>' >
          <?php 
          if($myform->getCodeError("cp") != 0){
            echo "<span class='tooltip-text error' > ";
            echo ($myform->getMsjError("cp"));
            echo  "</span>";
            }
          ?>
        </div>
        <div class="field-form tooltip-container">
          <label for="city">Ciudad</label>
          <input
            placeholder="ej. CDMX"
            type="text" id="city" name="city" 
            value="<?php echo (($myform->getCity())?$myform->getCity():"" ) ?>" 
            class='nada <?php echo (($myform->getCodeError("city") != 0)?"error":"") ?>' >
          <?php 
          if($myform->getCodeError("city") != 0){
            echo "<span class='tooltip-text error' > ";
            echo ($myform->getMsjError("city"));
            echo  "</span>";
            }
          ?>
        </div>
        <div class="field-form tooltip-container">
          <label for="bdate">Fecha de Nacimineto</label>
          <input
            type="date" id="bdate" name="bdate" 
            value="<?php echo (($myform->getBdate())?$myform->getBdate():"" ) ?>" 
            class='nada <?php echo (($myform->getCodeError("bdate") != 0)?"error":"") ?>' >
          <?php 
          if($myform->getCodeError("bdate") != 0){
            echo "<span class='tooltip-text error' > ";
            echo ($myform->getMsjError("bdate"));
            echo  "</span>";
            }
          ?>
        </div>  
        <div class="field-form  tooltip-container">
          <label for="area">Sector donde se desarrolla</label>
          <select name="area" id="area">
              <option value="educacion">Educacion</option>
              <option value="educacion">Ingenieria</option>
              <option value="educacion">Desarrollo</option>
              <option value="educacion">PM</option>
          </select>
        </div>
  
        <input type="submit">
      </form>
    </div>
  </section>
  <footer></footer>
</body>
</html>