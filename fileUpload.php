<?php
require './globalFunc.php';

if(isset($_POST['my_file_upload']) && isset($_FILES)) :
  $uploadDir = $_SERVER['DOCUMENT_ROOT'].'/files'; 
 // $uploadDir = '/files'; //корневая папка проекта
  if  {mkdir($uploadDir, 0777)}
  else{(is_dir($uploadDir))} 
  endif;
  $file = $_FILES[0];
  $fileName = cyrillic_translit($file['name']);
  $filePath = $uploadDir.'/'.$fileName;
  if(!move_uploaded_file($file['tmp_name'], $filePath)) :
  err(400, 'Ошибка');
  elseif(empty(file_get_contents($filePath))) :
  err(422, 'Загружен пустой файл');
  else : 
  err(200, ['url' => $filePath]);
  endif;
endif;

?>
