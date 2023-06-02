<?php
// if statement
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
}
echo "<br><br>";

// if..else
if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br><br>";

// if…elseif…else
if ($t < "10") {
    echo "Have a good morning!";
} else if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br><br>";

// swith statement 
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br><br>";

// while
$x = 1;
while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
echo "<br><br>";

// do...while 
do {
    echo "The number is: $x <br>";
} while ($x <= 5);
echo "<br><br>";

// for 
for ($X = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
echo "<br><br>";

// foreach 
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}
?>