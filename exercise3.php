<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
<?php
echo "<h1> My Exercise 3 - Masoud Amininiaki </h1>";

# Question 1
$m = date("F");
if ($m == "August"){
    echo "It's August, so it's still holiday.";
}
else {
    echo "Not August, This is $m so i don't have any holidays";
}

# Question 2
$color = "red";
if ($color == "red"){
echo "<br>" . '<span style="color:red;">The color is red.</span>';
}
else {
    echo "<br>" . "The color is not red.";
}

# Question 3
$grade = 73;

if ($grade > 80) {
    echo "<br>" . "Excellent ";
}
else if ($grade > 70 && $grade <= 80) {
    echo "<br>" . "Great";
}
else if ($grade > 60 && $grade <= 70) {
    echo "<br>" . "Good";
}
else if ($grade > 50 && $grade <= 60) {
    echo "<br>" . "Pass";
}
else {
    echo "<br>" . "Fail";
}

# Question 4


# Question 5
echo "<br>";
for ($x=8; $x>=1; $x--) {
    for ($y=1 ; $y<=$x; $y++) {
        echo $y;
    }
    echo "<br />";
}


# Question 6
/*
for ($i=0; $i<9; $i++) {
    for ($j=0; $j<$i; $j++) {
        echo "*";
    }
    echo "<br />";
}
*/
echo "<br>";
$i=0;
while ($i<9)
{
    $j=0;
    $i++;
while ($j<$i)
{  
echo "*";
$j++;
}
echo "<br />";
}

# Question 7


?>
    
</body>
</html>
