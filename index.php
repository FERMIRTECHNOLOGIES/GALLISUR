
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GALLI-SUR</title>
    <link rel="stylesheet" href="css/stylelogin.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/olvido_contra.js"></script>

<script src="js/SCF.ui/checkbox.js"></script>
  </head>

<body>

<div id="div_login" style="box-shadow: 3px 3px 9px -3px rgba(155, 203, 23, 0.20);">
<div id="titulo" style="font: bold 35px georgia,serif;">LOGIN</div>
<div class="login">
<p><label for="login">Email:</label> <input type="text" name="login" id="login" value="" /></p>
<p><label for="password">Password:</label> <input type="password" name="password" id="password" value="" /></p>
<p class="login-submit"><button id="login_boton" class="login-button">Login</button></p>

</div>
</div>
<section class="about">
<p class="author">&copy; 2018 Hecho por FERMIR TECHNOLOGIES</p>
</section>
<div id="error">
<div style="box-shadow: 3px 3px 9px -3px rgba(0, 0, 0, 0.4);">
<div id="bar_error">
<div style="float: left;"><img src="cancel.png" alt="Cancelar"/></div>
Error!</div>
</div>

<div style="margin-top: 15px; width: 170px;">
<div style="float: left; color: #ccc;"><img src="cancel2.png" alt="Cancel"/></div>
<div>El login no coincide!</div>
</div>
</div>
</body>
</html>
