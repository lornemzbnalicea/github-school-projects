<?php

// Function to get the current date and time
function getCurrentDateTime() {
    $date = new DateTime();
    return $date->format("Y-m-d H:i:s");
}

// Example usage of the function
$currentTime = getCurrentDateTime();
echo "The current time is: $currentTime";

?>
