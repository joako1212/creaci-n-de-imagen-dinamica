<?php 
// FETCH IMAGE & WRITE TEXT
$img = imagecreatefromjpeg('tarjet.jpg');
$white = imagecolorallocate($img, 255, 255, 255);
$nombre = "Arturo Inés";
$apellido = "Bonaparte";
$numero_cliente = "3453423";
$font_bold = "Roboto-Bold.ttf"; 
$font = "Roboto-Regular.ttf"; 


// THE IMAGE SIZE
$width = imagesx($img);
$height = imagesy($img);


// THE TEXT SIZE
$text_size = imagettfbbox(75, 0, $font_bold, $nombre);
$text_width = max([$text_size[2], $text_size[4]]) - min([$text_size[0], $text_size[6]]);
$text_height = max([$text_size[5], $text_size[7]]) - min([$text_size[1], $text_size[3]]);


// CENTERING THE TEXT BLOCK
$centerX = CEIL(($width - $text_width) / 2);
$centerX = $centerX<0 ? 0 : $centerX;
$centerY = CEIL($height  / 2);
$centerY = $centerY<0 ? 0 : $centerY;
imagettftext($img, 74, 0, $centerX, $centerY, $white, $font_bold, $nombre);


// THE TEXT SIZE DOS
$text_size_dos = imagettfbbox(55, 0, $font_bold, $apellido);
$text_width_dos = max([$text_size_dos[2], $text_size_dos[4]]) - min([$text_size_dos[0], $text_size_dos[6]]);
$text_height_dos = max([$text_size_dos[5], $text_size_dos[7]]) - min([$text_size_dos[1], $text_size_dos[3]]);

// CENTERING THE TEXT BLOCK
$centerX_dos = CEIL(($width - $text_width_dos) / 2);
$centerX_dos = $centerX_dos<0 ? 0 : $centerX_dos;
imagettftext($img, 54, 0, $centerX_dos, $centerY+90, $white, $font_bold, $apellido);


// THE TEXT SIZE TRES
$text_size_tres = imagettfbbox(44, 0, $font, $numero_cliente);
$text_width_tres = max([$text_size_tres[2], $text_size_tres[4]]) - min([$text_size_tres[0], $text_size_tres[6]]);
$text_height_tres = max([$text_size_tres[5], $text_size_tres[7]]) - min([$text_size_tres[1], $text_size_tres[3]]);

// CENTERING THE TEXT BLOCK
$centerX_tres = CEIL(($width - $text_width_tres) / 2);
$centerX_tres = $centerX_tres<0 ? 0 : $centerX_tres;
imagettftext($img, 44, 0, $centerX_tres, $centerY+160, $white, $font, $numero_cliente);



// OUTPUT IMAGE
header('Content-type: image/png');
imagejpeg($img);
// imagedestroy($jpg_image);

// OR SAVE TO A FILE
// THE LAST PARAMETER IS THE QUALITY FROM 0 to 100
imagejpeg($img, $numero_cliente.".jpg", 70);
 
?>
