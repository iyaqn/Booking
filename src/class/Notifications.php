<?php
class Notifications {
    private $notificationTypes = ["feedback", "new reservation", "get notifications"];
    private $type;
    private $conn;

    public function __construct($type, $conn)
    {
        $this->type = $type;
        $this->conn = $conn;
    }
    
    public function getNotifications() {
        $query = "SELECT * FROM notifications";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            $notifications = array();
            while ($row = $result->fetch_assoc()) {
                $notifications[] = $row;
            }
            return $notifications;
        }
    }

    public function addNotification($GuestID) {
        $query = "INSERT INTO notifications(GuestID, type, created_at) VALUES('$GuestID', '".$this->notificationTypes[$this->type]."', '".date('Y-m-d H:i:s')."')";
        $this->conn->query($query);
    }

    public function markAsRead($notificationID) {
        $query = "UPDATE notifications SET read_at = '".date('Y-m-d H:i:s')."' WHERE id = ".$notificationID;
        $this->conn->query($query);
    }

    public function markAllAsRead() {
        $query = "UPDATE notifications SET read_at = '".date('Y-m-d H:i:s')."' WHERE read_at IS NULL";
        $this->conn->query($query);
    }
    
}
