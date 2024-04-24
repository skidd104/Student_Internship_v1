<?php
require_once('../../connection/connect.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the necessary POST parameters are set
    if (isset($_POST['company_id'], $_POST['name'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['ceo'])) {
        
        $company_id = $_POST['company_id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $ceo = $_POST['ceo'];


        
        // Update the record in the database
        $sql = "UPDATE intern_company SET `name`=?, `address`=?, phone_no=?, email=?, ceo=? WHERE company_id=?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters and execute the statement
            $stmt->bind_param("sssssi", $name, $address, $phone, $email, $ceo, $company_id);
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
