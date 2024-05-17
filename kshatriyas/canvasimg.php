<?php

// Create a new image
$width = 800;
$height = 600;
$image = imagecreatetruecolor($width, $height);

// Define colors
$background_color = imagecolorallocate($image, 149, 196, 212); // #95C4D4
$overlay_color = imagecolorallocatealpha($image, 0, 0, 0, 0); // Transparent black

// Fill the background with the specified color
imagefilledrectangle($image, 0, 0, $width, $height, $background_color);

// Example settings from your JSON
$overlay_opacity = 0.15;
$content_width = 50;

// Calculate position and size for the content rectangle
$left = ($width - $content_width) / 2;
$top = ($height - $content_width) / 2;
$right = $left + $content_width;
$bottom = $top + $content_width;

// Fill the content rectangle with the specified color
imagefilledrectangle($image, $left, $top, $right, $bottom, $overlay_color);

// Apply opacity to the overlay
imagefilter($image, IMG_FILTER_COLORIZE, 0, 0, 0, 127 - (127 * $overlay_opacity));

// Save the image as JPEG
header('Content-Type: image/jpeg');
imagejpeg($image, 'output.jpg');

// Free up memory
imagedestroy($image);

?>
