<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <table border="1">
<?php
$number = 10;
        for($row = 1; $row <= $number; $row++) {
?>
        <tr>
<?php
            for($column = 1; $column <= $number; $column++) {
?>
                <td>
<?php
                    echo($row*$column);
    ?>
                </td>
<?php
            }
?>
        </tr>
<?php
        }
?>
    </table>
</body>
</html>
