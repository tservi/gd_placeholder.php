<?php
/*
 * gd_placeholder.php
 * done by Jean Tinguely Awais aka t-servi.com
 * use this script to make an image as a placeholder for your site
 * like http://placehold.it/ or http://placekitten.com/
 */

$text = "Placeholder";
$width = 110;
$height = 20;
if( isset( $_REQUEST[ 'text' ])) {$text = $_GET['text'];}
if( isset( $_REQUEST[ 'width' ])) {$text = $_GET['width'];}
if( isset( $_REQUEST[ 'height' ])) {$text = $_GET['height'];}

header("Content-type: image/png");
$im = @imagecreatetruecolor($width, $height)
    or die("Impossible d'initialiser la bibliothèque GD");

$orange = imagecolorallocate($im, 220, 210, 60);
$px     = (imagesx($im) - 7.5 * strlen($text)) / 2;
imagestring($im, 3, $px, 9, $text, $orange);
imagepng($im);
imagedestroy($im);

?>
