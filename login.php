<?php
use Illuminate\Database\Capsule\Manager as DB; 
require "vendor\autoload.php";
require "config\database.php";


$user=DB::table('usuarios')
->leftjoin('perfiles', 'usuarios.idperfil', '=', 'perfiles.idperfil')
->where('nombreusuario', $_POST['usuario'])->first();

$mensage='';
if ($user->password == $_POST['password']){
    $mensage="<h1> bienvenido:{$user->idusuario}'>entrar al sistema escolar</a>";
} else{
    $mensage="<h1>usuario y/o contraseña erroneos, porfavor verifique y vuelva auntenticarse</h1>
    <br><ahref=index.html>regresar </a>";
}

  echo $mensage;