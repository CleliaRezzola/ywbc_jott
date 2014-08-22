<?php
/*
This scans the directory, and puts all the file names
into an array
*/
           
$dir = "../journals/";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
  $files[] = $filename;
}
           
// Now we can foreach through that array to make some HMTL:
           
$images = array();

foreach ($files as $img) {
// This function now checks if it ends in jpg, png or gif:
  if(!is_dir($img) && (strpos($img, '.jpg')>0 || strpos($img, '.png')>0 || strpos($img, '.gif')>0)) {
    // echo "<img src=\"images/". $img ."\" alt=\"img\" class=\"thumb\" />";
    $images[] = $img;
    }
}

// var_dump($images);

echo json_encode($images);

?>