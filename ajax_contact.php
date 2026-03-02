<?php
include('Config.php');

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = trim($_POST['firstname'] ?? '');
    $lastname  = trim($_POST['lastname'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $phone     = trim($_POST['phone'] ?? '');
    $message   = trim($_POST['message'] ?? '');
    $service   = trim($_POST['service'] ?? '');

    // Validation
    if (empty($firstname) || empty($email) || empty($phone) ) {
        $response['status'] = "error";
        $response['message'] = "All required fields are mandatory!";
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['status'] = "error";
        $response['message'] = "Invalid email format!";
    }
    elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
        $response['status'] = "error";
        $response['message'] = "Phone number must be 10 digits!";
    }    
    else {

        $stmt = $conn->prepare("INSERT INTO contact_messages 
        (firstname, lastname, email, phone, service, message) 
        VALUES (?, ?, ?, ?, ?, ?)");

        // ✅ 6 types = 6 variables
        $stmt->bind_param("ssssss", 
            $firstname, 
            $lastname, 
            $email, 
            $phone, 
            $service, 
            $message
        );

        if ($stmt->execute()) {
            $response['status'] = "success";
            $response['message'] = "Message sent successfully!";
        } else {
            $response['status'] = "error";
            $response['message'] = "Database error. Please try again!";
        }

        $stmt->close();
    }
}

echo json_encode($response);
exit;