<?php
function removeWhitespace($array) {
    return array_map('trim', $array);
}

// Example usage
$Array = ["mohamed  ", "  ahmed", "  khaled  ", "football"];
$output = removeWhitespace($Array);

var_dump($output);
?>
