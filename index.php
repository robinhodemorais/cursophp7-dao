<?php
require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);
*/


//retona 1 usuario com o id
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//carrega lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

//carrega o usuario
//$usuario = new Usuario();
//$usuario->login("root","123");
//echo $usuario;

//insert
//$aluno = new Usuario("aluno","45564");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
//carrega o usuario 9
$usuario->loadById(9);
$usuario->update("Alice","654");

echo $usuario;


?>