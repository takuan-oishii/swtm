<?php

if(isset($_GET['name'])) {
      $name = $_GET['name'];
}

$img = ImageCreateFromJPEG('files/' . $name);
$logoimg = ImageCreateFromPNG('logo.png');

# 元画像の幅と高さを取得
$img_w = ImageSx($img);
$img_h = ImageSy($img);

$out = ImageCreateTrueColor($img_w*(400/$img_w), $img_h *(400/$img_w));
ImageCopyResampled($out, $img,
    0,0,0,0, $img_w*(400/$img_w), $img_h *(400/$img_w), $img_w, $img_h);

# ロゴの幅と高さを取得
$logo_w = ImageSx($logoimg);
$logo_h = ImageSy($logoimg);

$img_w = ImageSx($out);
$img_h = ImageSy($out);

# 右下にロゴを表示
ImageCopy($out, $logoimg,
    $img_w/2 - $logo_w/2, $img_h - $logo_h - 5,
    0, 0,
    $logo_w, $logo_h);

header('Content-Type: image/jpeg');
ImageJPEG($out);
?>