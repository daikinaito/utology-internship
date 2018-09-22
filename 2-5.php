<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2-5</title>

</head>
<body>
    <h1>2-5</h1>
    <?php
    if (!isset($_SESSION['count'])) {
      $_SESSION['count'] = 0;
    } else {
      $_SESSION['count']++;
    }
    echo 'アクセス回数は'.$_SESSION['count'].'です<br>';
    ?>
</body>
</html>

