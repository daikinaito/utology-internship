<?php
if (isset($_POST['text'])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo $_POST['text'];
        echo "\n";
    }

    touch('2-4.txt');

   file_put_contents("2-4.txt", $_POST['text'].PHP_EOL, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2-4</title>

</head>
<body>
    <h1>2-4</h1>
    <form action="2-4.php" method="POST" autocomplete="off">
        <input type="text" name="text"><br>
        <button type=submit>送信</button>
    </form>
    <pre>
      <?php
        $file = "2-4.txt";
        $contents = file_get_contents($file);
        echo $contents;
      ?>
    </pre>
</body>
</html>

