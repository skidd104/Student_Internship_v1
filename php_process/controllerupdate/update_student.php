<?php
require_once('../../connection/connect.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the necessary POST parameters are set
    if (isset($_POST['fname'], $_POST['lname'], $_POST['uname'], $_POST['password'])) {
        $student_id = $_POST['id'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $uname = $_POST['uname'];
        $password = $_POST['password'];
       


        
        // Update the record in the database
        $sql = "UPDATE intern_students SET `firstname`=?, `lastname`=?, username=?, password=? WHERE student_id=?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters and execute the statement
            $stmt->bind_param("ssssi", $firstname, $lastname, $uname, $password, $student_id);
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
