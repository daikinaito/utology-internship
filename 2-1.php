<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $_POST['text'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2-1</title>

</head>
<body>
    <h1>2-1</h1>
    <form action="2-1.php" method="POST" autocomplete="off">
        <input type="text" name="text"><br>
        <button type=submit>送信</button>
    </form>
</body>
</html>

