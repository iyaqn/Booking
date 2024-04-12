<?php

if(isset($_GET['path'])) {
    $path = $_GET['path'];
    $fullPath = '../user_dashboard/uploads/payments/' . $path;
    
    // Check if the file exists
    if(file_exists($fullPath)) {
        echo "<img src='$fullPath' class='img-fluid' alt='proof of payment' width='800' height='480'>";
    } else {
        echo "Proof of payment not found.";
    }
} else {
    echo "No path specified.";
}
?>
