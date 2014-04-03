<?php
/*
 * gd_placeholder.php
 * done by Jean Tinguely Awais aka t-servi.com
 * use this script to make an image as a placeholder for your site
 * like http://placehold.it/ or http://placekitten.com/
 */

 
 
$text = "GD Placeholder by t-servi.com";
$width = 110;
$height = 20;
$red = 220;
$green = 210;
$blue = 60;
if( isset( $_REQUEST[ 'text' ])) {$text = $_REQUEST['text'];}
if( isset( $_REQUEST[ 'width' ])) {$width = $_REQUEST['width'];}
if( isset( $_REQUEST[ 'height' ])) {$height = $_REQUEST['height'];}
if( isset( $_REQUEST[ 'red' ])) {$red = $_REQUEST['red'];}
if( isset( $_REQUEST[ 'green' ])) {$green = $_REQUEST['green'];}
if( isset( $_REQUEST[ 'blue' ])) {$red = $_REQUEST['blue'];}

header("Content-type: image/png");
$im = @imagecreatetruecolor($width, $height)
    or die("GD Library is not present!");

$text_color = imagecolorallocate($im, $red, $green, $blue);
$px     = (imagesx($im) - 7.5 * strlen($text)) / 2;
imagestring($im, 3, $px, 9, $text, $text_color);
imagepng($im);
imagedestroy($im);

?>
