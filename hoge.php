<?php

if(isset($_GET['name'])) {
      $name = $_GET['name'];
}

$img = ImageCreateFromJPEG('files/' . $name);
$logoimg = ImageCreateFromPNG('logo.png');

# 元画像の幅と高さを取得
$img_w = ImageSx($img);
$img_h = ImageSy($img);

# ロゴの幅と高さを取得
$logo_w = ImageSx($logoimg);
$logo_h = ImageSy($logoimg);

# 右下にロゴを表示
ImageCopy($img, $logoimg,
    $img_w/2 - $logo_w/2, $img_h - $logo_h - 5,
    0, 0,
    $logo_w, $logo_h);

header('Content-Type: image/jpeg');
ImageJPEG($img);
?>