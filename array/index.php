<?php
$student = array(
    "name" => "StudentName",
    "age" => 20,
    "grade" => "A"
);

echo "Student's Name: " . $student["name"] . "<br>";
echo "Student's Age: " . $student["age"] . "<br>";
echo "Student's Grade: " . $student["grade"] . "<br>";

$student["age"] = 21;
$student["grade"] = "B";

echo "<br>After Modification:<br>";
echo "Student's Name: " . $student["name"] . "<br>";
echo "Student's Age: " . $student["age"] . "<br>";
echo "Student's Grade: " . $student["grade"] . "<br>";

$student["city"] = "New York";
echo "<br>After Adding City:<br>";
foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}
?>
