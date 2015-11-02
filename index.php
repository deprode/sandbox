<?php
function add($a, $b)
{
    return $a + $b;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>テスト</title>
</head>
<body>
    <h1>テストです。</h1>
    <p>1 + 2 = <?php echo add(1, 2); ?></p>
    <hr>
    <p>some text</p>
</body>
</html>