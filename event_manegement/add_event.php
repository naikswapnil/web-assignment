 <?php
include "config.php";

if (isset($_POST['submit'])) {

    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $venue = $_POST['venue'];
    $organizer = $_POST['organizer'];

    $sql = "INSERT INTO events (event_name, event_date, event_time, venue, organizer)
            VALUES ('$event_name', '$event_date', '$event_time', '$venue', '$organizer')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Event Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<?php include "header.php"; ?>

<div class="container mt-4">
    <h2>Add Event</h2>

    <form method="POST">

        <div class="mb-3">
            <label class="form-label">Event Name</label>
            <input type="text" name="event_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Event Date</label>
            <input type="date" name="event_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Event Time</label>
            <input type="time" name="event_time" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Venue</label>
            <input type="text" name="venue" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Organizer</label>
            <input type="text" name="organizer" class="form-control" required>
        </div>

        <button type="submit" name="submit" class="btn btn-success">
            Save Event
        </button>

    </form>
</div>

<?php include "footer.php"; ?>