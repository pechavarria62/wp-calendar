<?php
require_once 'db.php';

$sql = "SELECT id, title, start_datetime AS start, end_datetime AS end FROM events";
$result = $conn->query($sql);

$events = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($events);
?>
