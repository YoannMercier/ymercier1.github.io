<?php

// Création de l'image
$image = imagecreatetruecolor(400, 400);

// Couleurs
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, 400, 400, $white);
// Dessin de l'arc de cercle
imagefilledarc($image, 200, 200, 300, 200, 0, 180, $black, IMG_ARC_PIE);

// Calcul des coordonnées de la droite
$rayon = 150;
$centreX = 200;
$centreY = 200;
$debutX = $centreX + $rayon;
$debutY = $centreY;
$finX = $centreX - $rayon;
$finY = $centreY;

// Dessin de la droite
imageline($image, $debutX, $debutY, $finX, $finY, $black);

// Envoi de l'image au navigateur
header('Content-Type: image/png');
imagepng($image);

// Libération de la mémoire
imagedestroy($image);
?>
