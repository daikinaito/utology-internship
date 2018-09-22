<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $_POST['text'];
}

if (ctype_digit($_POST['text'])) {
        echo "$_POST['text']は数字です。\n";
    } else {
        echo "$_POST['text']は数字ではありません。\n";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2-2</title>

</head>
<body>
    <h1>2-2</h1>
    <form action="2-2.php" method="POST" autocomplete="off">
        <input type="text" name="text"><br>
        <button type=submit>送信</button>
    </form>
</body>
</html>

