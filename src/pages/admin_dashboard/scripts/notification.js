$(document).ready(function () {
  // Add event listener to notifications tab link
  $("#notificationsDropdown").click(function () {
    // Hide the badge
    $("#notificationCounter").hide();

    // Trigger AJAX request to mark all notifications as read
    $.ajax({
      url: "controllers/mark_notifications_as_read.php",
      type: "GET",
      success: function (response) {
        console.log("Notifications updated!");
      },
    });
  });
});
