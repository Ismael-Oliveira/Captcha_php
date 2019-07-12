<?php
    session_start();
    // transformar php em imgem
    header("Content-type: image/jpeg"); 

    $n = $_SESSION['captcha'];

    $img = imagecreate(110, 60);

    imagecolorallocate($img, 200, 200, 200);

    // $fontcolor = imagecolorallocate($img, 20, 20, 20);

    imagettftext($img,40,0,14,45,15,__DIR__.'/desperado.ttf',$n);
    // outra fonte
    //imagettftext($img,40,0,14,45,15,__DIR__.'/Ginga.otf',$n);

    imagejpeg($img, null, 100);
?>