<?php

$imagen='sources/img/slider_home_movil.jpg';
$img=imagecreatefromjpeg($imagen);
list($width, $height) = getimagesize($imagen);


  $img2 = imagecreatetruecolor($width, $height);
  imagecopyresampled($img2,$img,  0, 0, 0, 0, $width, $height, $width, $height);
  imageinterlace($img2, true);
  imagejpeg($img2,'sources/img/slider_home_movil_2.jpg',70);

 ?>
