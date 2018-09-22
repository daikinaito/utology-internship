<?php
    if (isset($_COOKIE['count'])) {
      $count = $_COOKIE['count'];
    } else {
      $count = 1;
    }
    $count++;
    setcookie('count', $count);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2-6</title>

</head>
<body>
    <h1>2-6</h1>
    <?php
    echo 'アクセス回数は'.$count.'です<br>';
    ?>
</body>
</html>

