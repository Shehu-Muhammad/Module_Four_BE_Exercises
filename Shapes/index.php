<?php

// triangle
// for($row = 0; $row <= 3; $row++) {
//     for($column = 0; $column < $row; $column++) {
//         echo("&nbsp;");
//     }
//     echo("<br>");
// }

// for($row = 0; $row <= 5; $row++) {
//     if($row > 0) {
//         echo("*");
//     }
//     for($column = 0; $column < $row; $column++) {
//         if($column == $row-1) {
//             echo("*");
//         } else {
//             echo("&nbsp;");
//         }
//     }
//     echo("<br>");
// }

function printSpace() {
    for($row = 4; $row >= 0; $row--) {
        for($column = $row; $column > 0; $column--) {
            if($column > 0) {
                echo("*");
            } else {
                echo("space");
            }
        }
        echo("<br>");
    }
}

function rightTriangle() {
    for($row = 0; $row <= 3; $row++) {
        for($column = 0; $column < $row; $column++) {
            echo("*");
        }
        echo("<br>");
    }
}

function lineTopLeftToBottomRight() {
    for($row = 0; $row <= 5; $row++) {
        for($column = 0; $column < $row; $column++) {
            if($column == $row-1) {
                echo("*");
            } else {
                echo("&nbsp;");
            }
        }
        echo("<br>");
    }
}

function upsideDownRightTriangele() {
    for($row = 4; $row >= 0; $row--) {
        for($column = $row; $column > 0; $column--) {
            if($column > 0) {
                echo("*");
            } else {
                echo("space");
            }
        }
        echo("<br>");
    }
}

function stairs() {
    for($row = 0; $row <= 5; $row++) {
        if($row > 0) {
            echo("*");
        }
        for($column = 0; $column < $row; $column++) {
            if($column == $row-1) {
                echo("*");
            } else {
                echo("&nbsp;");
            }
        }
        echo("<br>");
    }
}

// lineTopLeftToBottomRight();
// printSpace();

function star() {
        for($row = 0; $row <= 5; $row++) {
            echo("<br>");
            if($row == 1 || $row == 5) {
                echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                echo("*");
            } else if($row == 2 || $row == 4) {
                echo("&nbsp; * * * ");
            } else if($row == 3) {
                echo("* * * * *");
            }
    }
}

star();


?>