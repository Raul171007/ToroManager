<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>

body{
font-family:Arial;
background:url("fondo_index.jpg") no-repeat center center fixed;
background-size:cover;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

form{
background:rgba(245,222,179,0.9);
padding:35px;
border-radius:12px;
width:350px;
}

h1{
text-align:center;
color:#800020;
}

input{
width:100%;
padding:10px;
margin-top:10px;
}

button{
margin-top:15px;
width:100%;
padding:12px;
background:#800020;
color:#f5deb3;
border:none;
font-weight:bold;
cursor:pointer;
}

button:hover{
background:#f5deb3;
color:#800020;
}

a{
    display:block;
    text-align:center;
    margin-top:10px;
    color:#800020;
}

.error{
color:red;
text-align:center;
margin-top:10px;
}

</style>

</head>

<body>

<form action="verificar_login.php" method="POST">

<h1>Login</h1>

<input 
type="email" 
name="email" 
value="<?php echo isset($_COOKIE['ultimo_usuario']) ? $_COOKIE['ultimo_usuario'] : ''; ?>" 
required>

<input type="password" name="contrasena" placeholder="Contraseña" required>

<button type="submit">Entrar</button>

<a href="registro.php">¿No tienes cuenta? Regístrate</a>

<?php
if(isset($_GET['error'])){
echo "<p class='error'>Usuario o contraseña incorrectos</p>";
}
?>

</form>


</body>
</html>