<?php 

include "conexion.php";

session_start();

if(!isset($_SESSION['Nombre_Usuario'])){
    header("Location: login.php");
}

$id_usuario = $_SESSION['ID_Usuario'];
$Titulo_Categoria =$_POST['Titulo_Categoria'];
$Descripcion_Categoria =$_POST['Descripcion_Categoria'];



//INSERT INTO curso(Instructor_Curso, Niveles_Curso, Costo_Curso, Descripcion_Curso, Calificacion_Curso, Titulo_Curso) VALUES ('$id_usuario', '$Niveles_Curso', '$Costo_Curso', '$Descripcion_Curso', '$Calificacion_Curso', '$Foto_Curso','$Titulo_Curso','$Foto_Curso2','$Foto_Curso3');

$query ="INSERT INTO categoria(Instructor_Categoria,Titulo_Categoria, Descripcion_Categoria) VALUES ('$id_usuario', '$Titulo_Categoria', '$Descripcion_Categoria')";
$resultado = $conn->query($query);

if($resultado){
    header("location:indexMaestro.php");
}else{
echo "No se Inserto";
}



?>