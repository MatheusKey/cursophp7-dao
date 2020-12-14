<?php 

require_once("config.php");

//Carrega um usuário.
/*$root = new Usuario();

$root->loadbyId(4);

echo $root;*/

//Carrega uma lista de usuários.
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega uma lista de usuários buscando pelo login
/*$search = Usuario::search("ro");
echo json_encode($search);*/

//Carrega um usuário usando o login e a senha.
/*$usuario = new Usuario();
$usuario->login("root", "!@#$");

echo $usuario;*/

//Criando um novo usuário
/*$aluno = new Usuario("aluno", "@aluno");
$aluno->insert();

echo $aluno;*/

//Alterar um usuário.
/*$usuario = new Usuario();
$usuario->loadbyId(8);
$usuario->update("professor", "!@#$%¨¨&");

echo $usuario;*/

$usuario = new Usuario();
$usuario->loadbyId(7);
$usuario->delete();
echo $usuario;


 ?>