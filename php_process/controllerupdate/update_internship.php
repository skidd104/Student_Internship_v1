<?php
require_once('../../connection/connect.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the necessary POST parameters are set
    if (isset($_POST['internship_id'], $_POST['company_id'], $_POST['title'], $_POST['desc'], $_POST['start_date'], $_POST['end_date'])) {
        $internship_id = $_POST['internship_id'];
        $company_id = $_POST['company_id'];
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $start_date = $_POST['start_date'];
        $start_date = date ('Y/m/d', strtotime($start_date));
        $end_date = $_POST['end_date'];
        $end_date = date ('Y/m/d', strtotime($end_date));
        
        // Update the record in the database
        $sql = "UPDATE intern_internship SET title=?, description=?, start_date=?, end_date=?, company_id=? WHERE internship_id=?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters and execute the statement
            $stmt->bind_param("ssssii", $title, $desc, $start_date, $end_date, $company_id, $internship_id);
            if ($stmt->execute()) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error updating record']);
            }
            $stmt->close();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Statement preparation failed']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Missing required parameters']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}

$conn->close();
?>
