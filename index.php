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
    <div class="image-target">
      <img src="./10594784_4498893.jpg" alt="imagen de registro" >
    </div>
    <div class="form-target">
      <h2 class="form-title">Formulario de Registro</h2>
      <form action="" method="POST" class="content-form">
        <div class="field-form">
          <label for="name">Nombre(s)</label>
          <input type="text" id="name" >
        </div>
        <div class="field-form">
          <label for="lastname">Apellidos</label>
          <input type="text" id="lastname" >
        </div>
        <div class="field-form">
          <label for="email">Correo Electronico</label>
          <input type="email" id="email" >
        </div>
        <div class="field-form">
          <label for="password">Contraseña</label>
          <input type="password" id="password" >
        </div>
        <div class="field-form">
          <label for="repassword">Repetir Contraseña</label>
          <input type="password" id="repassword" >
        </div>
        <!-- <div class="field-form">
          <label for="photo">Foto de perfil</label>
          <div class="file-select">
            <input type="file" id="photo" name="photo">      
          </div>
        </div> -->
        <div class="field-form">
          <label for="phone">Telefono</label>
          <input type="number" id="phone" >
        </div>
        <div class="field-form">
          <label for="rfc">RFC</label>
          <input type="text" id="rfc" >
        </div>
        <div class="field-form">
          <label for="addres">Direccion</label>
          <input type="text" id="addres" >
        </div>
        <div class="field-form">
          <label for="cp">Codigo Postal</label>
          <input type="text" id="cp" >
        </div>
        <div class="field-form">
          <label for="city">Ciudad</label>
          <input type="text" id="city" >
        </div>
        <div class="field-form">
          <label for="area">Sector donde se desarrolla</label>
          <select name="area" id="area">
              <option value="educacion">Educacion</option>
          </select>
        </div>
  
        <input type="submit">
      </form>
    </div>
  </section>
  <footer></footer>
</body>
</html>