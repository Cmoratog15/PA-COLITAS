<?php
session_start();

$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // Datos del archivo a subir:
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Nombre nuevo archivo:
    //$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    $nombre = $_POST["nombre"];
    $newFileName = $nombre . '.' . $fileExtension;

    // Extensiones permitidas:
    //$allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
    //Solo permito Imágenes:
    $allowedfileExtensions = array('jpg', 'gif', 'png');

    if (in_array($fileExtension, $allowedfileExtensions)){
      // Directorio de destino:
      $uploadFileDir = '../img/animales/';
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)){
        $nombre = $_POST["nombre"];
        $message ='Archivo subido correctamente. Nombre: '. $nombre;
      }
      else{
        $message = 'Error subiendo el archivo, revise la conexión al servidor o la carpeta de destino.';
      }
    }else{
      $message = 'Error al subir el archivo. Revisa las extensiones permitidas: ' . implode(',', $allowedfileExtensions);
    }
  }else{
    $message = 'Error al subir el arhivo.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}
$_SESSION['message'] = $message;
header("Location: ../colabora.php");
