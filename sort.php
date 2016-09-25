<!doctype html>
<html lang="en">
<head>
	<meta charset ="utf-8">
	<title>Sorting Multidimensional Arrays</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>
<?php # script 1.1 - sort.php

// this page creates a multidimensional array of names and grades.
// the array is then sorted twice, once by name then by grade.#

//create the array
//array structure:
// studentID => array('name' => 'Name', 'grade' => XX.X)

$students = array(
	256 => array('name' => 'Jon', 'grade' => 98.5),
	2 => array('name' => 'Vance', 'grade' => 85.1),
	9 => array('name' => 'Stephen', 'grade' => 94.0),
	364 => array('name' => 'Steve', 'grade' => 85.1),
	68 => array('name' => 'Rob', 'grade' => 74.6)
	);

//name the sorting function
function name_sort($x, $y) {
	return strcasecmp($x['name'], $y['name']);
}
	
//grade sorting function
function grade_sort($x, $y) {
	return ($x['name'] < $y['name']);
}

echo '<h2> Array As Is</h2><pre>' .print_r($students, 1) . '</pre>';

//sort by name
uasort($students, 'name_sort');
echo '<h2> Array Sorted By Name</h2><pre>' .print_r($students, 1) . '</pre>';

uasort($students, 'grade_sort');
echo '<h2> Array Sorted By Grade</h2><pre>' .print_r($students, 1) . '</pre>';

?>

</body>
</html>