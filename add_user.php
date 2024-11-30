<?php
include 'db.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $type = $_POST['type']; // 2 for Manager, 3 for Staff
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];


    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);


    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, "uploads/" . $image); 
    } else {
        $image = null; 
    }


    $query = "INSERT INTO users (email, password, role) VALUES ('$email', '$hashedPassword', '$type')";
    if (mysqli_query($conn, $query)) {

        $user_id = mysqli_insert_id($conn); 


        $user_info_query = "INSERT INTO user_info (user_id, fname, lname, gender, contact, address, profileimage, email) 
                            VALUES ('$user_id', '$fname', '$lname', '$gender', '$contact', '$address', '$image', '$email')";

        if (mysqli_query($conn, $user_info_query)) {
            echo json_encode(['status' => 'success', 'message' => 'User added successfully!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to insert user info.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add user.']);
    }

    mysqli_close($conn); 
}
?>
