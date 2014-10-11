<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view</title>
</head>
<body>
<p><?php

if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "files/" . $_FILES["upfile"]["name"])) {
    chmod("files/" . $_FILES["upfile"]["name"], 0644);
    //echo $_FILES["upfile"]["name"];
    echo "<IMG src=\"hoge.php?name=".$_FILES["upfile"]["name"]."\">";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "ファイルが選択されていません。";
}

?></p>
</body>
</html>