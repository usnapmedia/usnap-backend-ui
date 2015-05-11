<?php
// // Load the stamp and the photo to apply the watermark to
// $stamp = imagecreatefrompng('usnap.png');
// $im = imagecreatefromjpeg('http://d.tanios.ca/usnap/api/uploads/1333912412.jpg');

// // Set the margins for the stamp and get the height/width of the stamp image
// $marge_right = 10;
// $marge_bottom = 10;
// $sx = imagesx($stamp);
// $sy = imagesy($stamp);

// // Copy the stamp image onto our photo using the margin offsets and the photo 
// // width to calculate positioning of the stamp. 
// imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// // Output and free memory
// header('Content-type: image/png');
// imagepng($im, 'new/image.png'  , 0);
// imagedestroy($im);

// Content type
header('Content-Type: image/png');
// Get new dimensions
$percent = 0.25;
list($width, $height) = getimagesize('image.png');
$new_width = $width * $percent;
$new_height = $height * $percent;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefrompng('image.png');
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
imagepng($image_p,'new1.png',0);
// Output
imagejpeg($image_p, null, 100);
?>