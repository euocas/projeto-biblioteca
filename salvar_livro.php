<<<<<<< HEAD
=======
<<<<<<< HEAD
salvar_livro.php
 
=======
<<<<<<< HEAD
=======
salvar_livro.php
 
>>>>>>> e6860b3 (atualização da biblioteca)
>>>>>>> 6a253c7 (atualização biblioteca)
>>>>>>> 9ca5693 (att repo)
<?php
error_reporting(E_ALL);
ini_set('display_erros',1);
 
//criar pasta para salvar os livros
if(!is_dir("capas"));
mkdir("capas",0777,true);
//salvar os pdfs
if(!is_dir("pdfs"));
mkdir("pdfs",0777,true);
 
//Recebendo os dados do formulario
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$ano = $_POST["ano"];
$categoria = $_POST["categoria"];
 
//tratamentos dos nomes
$capa = time()."_".preg_replace("/[^a-zA-Z0-9.]/","_",$_FILES["capa"]["name"]);
$pdf = time()."_".preg_replace("/[^a-zA-Z0-9.]/","_",$_FILES["arquivo"]["name"]);
 
<<<<<<< HEAD
=======
<<<<<<< HEAD
move_uploaded_file($_FILES["capa"]["tmp_name"],"capas/" . $capa);
move_uploaded_file($_FILES["arquivo"]["tmp_name"],"pdfs/" . $pdf);
 
=======
<<<<<<< HEAD
=======
move_uploaded_file($_FILES["capa"]["tmp_name"],"capas/" . $capa);
move_uploaded_file($_FILES["arquivo"]["tmp_name"],"pdfs/" . $pdf);
 
>>>>>>> e6860b3 (atualização da biblioteca)
>>>>>>> 6a253c7 (atualização biblioteca)
>>>>>>> 9ca5693 (att repo)
//colocar como disponivel o livro
$status = "disponivel";
//como estamos usando texto iremos inserir o caracter | para separar as informações
$linha = "$titulo|$autor|$ano|$categoria|$capa|$pdf|$status\n";
//gravar as informações em um arquivo
file_put_contents("livros.txt",$linha,FILE_APPEND);
//redirecionar para apagina livros
header("location:index.php");
exit;
 
 
<<<<<<< HEAD
?>
=======
<<<<<<< HEAD
?>
 
=======
<<<<<<< HEAD
?>
=======
?>
 
>>>>>>> e6860b3 (atualização da biblioteca)
>>>>>>> 6a253c7 (atualização biblioteca)
>>>>>>> 9ca5693 (att repo)
