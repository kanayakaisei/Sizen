<?php
$file = "request.txt";

// ファイルが存在すれば中身を0に上書き
if (file_exists($file)) {
    file_put_contents($file, "0", LOCK_EX);
    echo "reset ok";
} else {
    echo "request.txt not found";
}
