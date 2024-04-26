<?php

include '../../../includes/autoloader.php';

// Check if form is submitted
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $db = new Database();
    $connection = $db->getConnection();

    $package = new Packages($connection);

    // Array of restricted package IDs
    $restrictedPackages = array("1", "2", "3", "4", "5");

    // Check if the package to be deleted is in the restricted list
    if (in_array($id, $restrictedPackages)) {
        // Redirect back with error message indicating deletion not permitted
        header('Location: ../packages.php?error=package_not_permitted');
        exit(); // Stop further execution
    }

    // Proceed with deletion for non-restricted packages
    $deletePackage = $package->deletePackage($id);

    if ($deletePackage) {
        header('Location: ../packages.php?success=package_deleted');
    } else {
        header('Location: ../packages.php?error=package_not_deleted');
    }
} else {
    // Handle case where no package ID is provided
    header('Location: ../packages.php?error=invalid_package_id');
}
?>
