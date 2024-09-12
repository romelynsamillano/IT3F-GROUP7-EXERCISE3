<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3 - Group 7</title>
</head>
<body>

<?php
$filename = "text.txt";

echo file_get_contents($filename) . "<br>";

file_put_contents($filename, "Good day! This is a test file from Group 7 of BSIT - 3F");
echo "File updated.<br>";

echo "File exists<br>";

print_r(file($filename));
?>

</body>
</html>
