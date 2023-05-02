<?php 

include "conexion.php";

session_start();

if(!isset($_SESSION['Nombre_Usuario'])){
    header("Location: login.php");
}

$id_usuario = $_SESSION['ID_Usuario'];
$Niveles_Curso =$_POST['Niveles_Curso'];
$Costo_Curso =$_POST['Costo_Curso'];
$Descripcion_Curso =$_POST['Descripcion_Curso'];
$Calificacion_Curso =$_POST['Calificacion_Curso'];
$Foto_Curso = addslashes(file_get_contents($_FILES['Foto_Curso']['tmp_name']));
$Titulo_Curso =$_POST['Titulo_Curso'];
$Foto_Curso2 = addslashes(file_get_contents($_FILES['Foto_Curso2']['tmp_name']));
$Foto_Curso3 = addslashes(file_get_contents($_FILES['Foto_Curso3']['tmp_name']));


//INSERT INTO curso(Instructor_Curso, Niveles_Curso, Costo_Curso, Descripcion_Curso, Calificacion_Curso, Titulo_Curso) VALUES ('$id_usuario', '$Niveles_Curso', '$Costo_Curso', '$Descripcion_Curso', '$Calificacion_Curso', '$Foto_Curso','$Titulo_Curso','$Foto_Curso2','$Foto_Curso3');

$query ="INSERT INTO curso(Instructor_Curso, Niveles_Curso, Costo_Curso, Descripcion_Curso, Calificacion_Curso, Foto_Curso, Titulo_Curso, Foto_Curso2, Foto_Curso3) VALUES ('$id_usuario', '$Niveles_Curso', '$Costo_Curso', '$Descripcion_Curso', '$Calificacion_Curso', '$Foto_Curso','$Titulo_Curso','$Foto_Curso2','$Foto_Curso3')";
$resultado = $conn->query($query);

if($resultado){
echo "Si se inserto";
}else{
echo "No se Inserto";
}



?>