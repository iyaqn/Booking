<?php
include '../../includes/autoloader.php';

// Create a new instance of the Notifications class
$db = new Database();
$conn = $db->getConnection();
$notifications = new Notifications(2, $conn);

// Mark all notifications as read
$notifications->markAllAsRead();

echo "Notifications marked as read successfully.";
?>
