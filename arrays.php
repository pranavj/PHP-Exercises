<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food
(at least 4 array elements). Name the array food.
*/
$food = array(
	"Chicken",
	"Paneer",
	"Coffee",
	"Ras-Malai"
);
/*
Print every array element in a new line.
*/
echo $food[0] . "<br />" . $food[1] . "<br />" . $food[2] . "<br />" . $food[3];

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
<li>...</li>
<li>...</li>
<li>...</li>
<li>...</li>
</ul>
*/
echo "<ul>
<li>$food[0]</li>
<li>$food[1]</li>
<li>$food[2]</li>
<li>$food[3]</li>
</ul>";

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc.
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = array(
	$food[0] => "main course",
	$food[1] => "main course",
	$food[2] => "drink",
	$food[3] => "dessert"
);
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse
cheesesake | desert
*/

foreach($food_assoc as $food_assoc => $food_assoc_key)
	{
	echo $food_assoc . " | " . $food_assoc_key;
	echo "<br />";
	}

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...)
and country of origin (Italy, Spain, India, ...)
food_assoc:
pizza:
type: main course
origin: Italy
cheesesake:
type:desert
origin: Greece

So, food_assoc is still going to be an associative array.
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself
and carries the information about the type and origin
*/
$food_assoc = array(
	$food[0] => array(
		"type" => "main course",
		"country" => "World-wide"
	) ,
	$food[1] => array(
		"type" => "main course",
		"country" => "India"
	) ,
	$food[2] => array(
		"type" => "drink",
		"country" => "Arab"
	) ,
	$food[3] => array(
		"type" => "dessert",
		"country" => "India"
	)
);
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

foreach($food_assoc as $food_assoc => $food_assoc_key)
	{
	echo $food_assoc;
	foreach($food_assoc_key as $food_assoc_key => $food_assoc_key_1)
		{
		echo " | " . $food_assoc_key_1;
		}

	echo "<br />";
	}

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
<tr>
<th>food</th>
<th>type</th>
<th>origin</th>
</tr>
<tr>
<td>pizza</td>
<td>main course</td>
<td>Italy</td>
</tr>
<tr>
<td>cheesecake</td>
<td>desert</td>
<td>Greece</td>
</tr>
</table>
*/
$food_assoc = array(
	$food[0] => array(
		"type" => "main course",
		"country" => "World-wide"
	) ,
	$food[1] => array(
		"type" => "main course",
		"country" => "India"
	) ,
	$food[2] => array(
		"type" => "drink",
		"country" => "Arab"
	) ,
	$food[3] => array(
		"type" => "dessert",
		"country" => "India"
	)
);
echo '<table style="border: 1px solid;"> <tr>
<th>food</th>
<th>type</th>
<th>origin</th>
</tr>';

foreach($food_assoc as $food_assoc => $food_assoc_key)
	{
	echo "<tr>";
	echo "<td>" . $food_assoc . "</td>";
	foreach($food_assoc_key as $food_assoc_key => $food_assoc_key_1)
		{
		echo "<td>" . $food_assoc_key_1 . "</td>";
		}

	echo "</tr>";
	}

echo "</table>";
?>