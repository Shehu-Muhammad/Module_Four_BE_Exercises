<?php

function createTable($inputOne, $inputTwo) {
    echo("<table>");
    echo("
        <th>Num</th>
        <th>x</th>
        <th>Num</th>
        <th>=</th>
        <th>Num</th>
    ");
    for($row = 1; $row <= $inputTwo; $row++) {
        echo("
        <tr>
            <td>".$inputOne."</td>
            <td>x</td>
            <td>".$row."</td>
            <td>=</td>
            <td>".$inputOne*$row."</td>
        </tr>
        ");
    }
    echo("</table>");
}

function createMatrix($inputOne, $inputTwo) {
    for($tables = 1; $tables <= $inputOne; $tables++) {
        createTable($tables, $inputTwo);
    }
}

//first input controls the tables
//second input controls the amount of rows
createMatrix(5,5);

?>