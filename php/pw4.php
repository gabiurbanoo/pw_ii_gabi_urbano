<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $matriz = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    if (in_array(5, $matriz) === true) {
        echo "essa matriz possui o número 5.";
    }
    else {
        echo "essa matriz não possui o número 5.";
    }
?>
</body>
</html>