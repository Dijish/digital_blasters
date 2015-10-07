<?php
$img_dest = imagecreatefrompng('img/cover.png');
$img_src_or = imagecreatefromjpeg('img/profile_picture.jpg');

//imagepng($img_dest,"");

$width=imagesx($img_src_or);
$height=imagesy($img_src_or);

/* Make a resize image of specified width and height */
$img_src_resize = imagecreatetruecolor( $width, $height );

/* Copy the profile picture on the right end of reaized image */
imagecopymerge( $img_src_resize, $img_dest, //dst_image, src_image
                    0, 0, //Co-ordiante to position image on resized image
                    0, 0, //Co-ordiante of resize image to show
                    imagesx($img_src_or), imagesy($img_src_or),
                    70); //Width and height of src image

imagecopyresampled( $img_src_resize, $img_dest, //dst_image, src_image
                    0, 0, //Co-ordiante to position image on resized image
                    0, 0, //Co-ordiante of resize image to show
                    imagesx($img_src_or), imagesy($img_src_or),//Width and height of src image            
                    imagesx($img_dest), imagesy($img_dest)); //Width and height of resize

header('Content-Type: image/png');
imagejpeg($img_src_resize,"img/hai.jpeg");

imagedestroy($img_src_or);
imagedestroy($img_dest);
?>