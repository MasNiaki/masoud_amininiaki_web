<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCISE 4</title>
    <style>
        body {
            color: #160252;
            font-family: Arial, Helvetica, sans-serif;
            background-color:#E5F787;
        }
        h2 {
            color: blue;
            font-family: "Times New Roman", Times, serif;
        }
        h4 {
            color: #E5910A;
        }


    </style>
</head>
<body>
<?php
/*
1. Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
*/

echo "<h2> Question 1 </h2>";
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $courses)
{
echo "<li>$courses</li>";
}


/* 2. The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
*/

echo "<h2> Question 2 </h2>";
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

// remove element at index 1 which is "HTML"
unset($courses1[1]); 

// Print modified array
//var_dump($courses1);

// Re-index the array elements
$courses2 = array_values($courses1);

// Print re-indexed array
//var_dump($courses2);

foreach ($courses2 as $courses2)
{
echo "<li>$courses2</li>";
}


/* 
3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
*/

echo "<h2> Question 3 </h2>";

echo "<h4> a) ascending order sort by value </h4>";
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
foreach ($courses3 as $courses3)
{
echo "<li>$courses3</li>";
}

echo "<h4> b) ascending order sort by Key </h4>";
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
ksort($courses3);
foreach ($courses3 as $courses3)
{
echo "<li>$courses3</li>";
}

echo "<h4> c) descending order sort by Value </h4>";
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
arsort($courses3);
foreach ($courses3 as $courses3)
{
echo "<li>$courses3</li>";
}

echo "<h4> d) descending order sort by Key </h4>";
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
krsort($courses3);
foreach ($courses3 as $courses3)
{
echo "<li>$courses3</li>";
}


/* 
 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
*/

echo "<h2> Question 4 </h2>";

/*
$courses4 = array("php" => 1, "html" => 2, "javascript" => 3, "cms" => 4, "project" => 5);
print_r(array_change_key_case($courses4, CASE_UPPER));
echo "<br>";
echo "<br>";
*/

$courses4=array("php", "html", "javascript", "cms", "project");
$courses4_convert = array_map("strtoupper", $courses4);
foreach( $courses4_convert as $courses4_convert ) {
 echo $courses4_convert . '</br>' ;
 }


// 5. Create an array that holds your favorite colors and print them. (indexed arrays)

echo "<h2> Question 5 </h2>";
$colors1 = array ("Blue", "Green", "Black", "Pink");
foreach ($colors1 as $colors1) {
    echo $colors1 . '</br>';
}


// 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)

echo "<h2> Question 6 </h2>";
$colors2 = array("Blue"=>"#0000FF", "Green"=>"#008000","Black"=>"#000000", "Pink"=>"#FFC0CB");
?>
<table class="list">
    <tr>
        <th>colors</th>
        <th>hexadecimal</th>
    </tr>    
<?php
foreach($colors2 as $colors2 => $hexadecimal) {
    echo " <tr><td>$colors2</td><td>$hexadecimal</td></tr>";
}?>
</table>

<?php


// 7. Include 12 months in an array named month and print them using loop statement.

echo "<h2> Question 7 </h2>";

/*
$month = array("January","February","March","April","May","June","July","August","September","October","November","December");
foreach ($month as $m) {
    echo $m . "</br>";
}
*/

$month = array("January","February","March","April","May","June","July","August","September","October","November","December");
$m = count($month);
for ($i=0; $i < $m; $i++) {
    echo " $month[$i] <br>";
}


/*
 8. PHP script to calculate and display average temperature, five lowest and highest temperatures.

Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Write comments to explain the following code (when asked):
*/
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

/* what is explode and what does the below code do? : explode() is a built in function in PHP used to split a string in
different strings. The explode() function splits a string based on a string delimiter, i.e. it splits the string 
wherever the delimiter character occurs. This functions returns an array containing the strings formed by splitting the 
original string.*/
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count? It is used to count the elements of an array or the properties of an object.
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do? sorts arrays in ascending order.
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
/* explain the following loop: The loop starts from min of five highest temperatures and ends in highest temperatures. Then print
 five highest temperatures */
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>
</body>
</html>
