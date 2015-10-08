<?php
$img_dest = imagecreatefrompng('img/cover1.png');
$img_src_or = imagecreatefromjpeg('img/flor.jpg');

// Merging profile picture with the cover photo which has low opacity
imagecopyresampled( $img_src_or, $img_dest, //dst_image, src_image
                    0, 0, //Co-ordiante to position image on resized image
                    0, 0, //Co-ordiante of resize image to show
                    imagesx($img_src_or), imagesy($img_src_or),//Width and height of src image            
                    imagesx($img_dest), imagesy($img_dest)); //Width and height of resize

// Saving merged image
imagejpeg($img_src_or,"img/output.jpeg");

// Destroying created images
imagedestroy($img_src_or);
imagedestroy($img_dest);
?>