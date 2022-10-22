<?php
$image=$_POST["image"];
if($image!=""){
 $pic=date("Ymdhis").".jpg";
 file_put_cntents("images/",base64_decode($image));
 echo "upload done!";
}
