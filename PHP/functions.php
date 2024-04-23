<?php
// Function to format date
function formatDate($date) {
    // Convert the date string to a timestamp
    $timestamp = strtotime($date);

    // Format the timestamp into a more readable date format
    // Day with ordinal suffix (e.g., 1st, 2nd, 3rd)
    $formattedDate = date('jS F Y', $timestamp);

    return $formattedDate;
}

?>