<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
$i = 1;

while ($i <= 10)
	{
	echo $i . "<br />";
	$i++;
	}

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step)
to create array of numbers 5 to 100 with the step 5
(example: 5, 10, 15, ...)
*/
$number_array = range(5, 100, 5);
/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even?
Divide it by 2, and if there is a remainder, the number is odd.
Use modulus operator (outputs the remainder after division),
for example:
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/
$number_count = sizeof($number_array);
$i = 0;

for ($i = 0; $i < $number_count; $i++)
	{
	if ($number_array[$i] % 2 == 1)
		{
		echo $number_array[$i] . "<br />";
		}
	}

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 3 |
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
Use while-loop to print array elements (every food in a new row).
*/
$food_array_count = sizeof($food);
$i = 0;

while ($i < $food_array_count)
	{
	echo $food[$i] . "<br />";
	$i++;
	}

echo "<br />";
/*
Use for-loop to print array elements (every food in a new row).
*/

for ($i = 0; $i < $food_array_count; $i++)
	{
	echo $food[$i] . "<br />";
	}

echo "<br />";
/*
Use foreach-loop to print array elements (every food in a new row).
*/

foreach($food as $food_items)
	{
	echo $food_items . "<br />";
	}


// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
echo "<ul>";

foreach($food as $food_items)
	{
	echo "<li>" . $food_items . "</li>";
	}

echo "</ul>";

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array.
The meal courses are broken down based on the type (salad, main course, dessert, ...)
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
"pizza" => [
"type" => "main course",
"origin" => "Italy"
],
"cheesesake" => [
"type" => "desert",
"origin" => "Greece"
]
]

So, food_assoc is an associative array.
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself
and carries the information about the type and origin.
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
Loop through $food_assoc and use print_r() to print the entire meal course
(entire array that includes type and origin).
*/
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array)
and print the type and origin as nested list items (see the example below).
*/

foreach($food_assoc as $food_assoc => $food_assoc_key)
	{
	echo "<ul><li>" . $food_assoc . "</li><ul>";
	$label_setter = 0;
	foreach($food_assoc_key as $food_assoc_key => $food_assoc_key_1)
		{
		if ($label_setter == 0)
			{
			echo "<li>type: " . $food_assoc_key_1 . "</li>";
			$label_setter++;
			}
		  else
			{
			echo "<li>origin: " . $food_assoc_key_1 . "</li>";
			}
		}

	echo "</ul></ul>";
	}

?>
