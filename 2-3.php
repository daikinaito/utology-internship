<?php
if (isset($_POST['text'])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo $_POST['text'];
        echo "\n";
    }

    if (preg_match("/php/", $_POST['text'])) {
        echo "あります";
    } else {
        echo "ありません";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2-3</title>

</head>
<body>
    <h1>2-3</h1>
    <form action="2-3.php" method="POST" autocomplete="off">
        <input type="text" name="text"><br>
        <button type=submit>送信</button>
    </form>
</body>
</html>

