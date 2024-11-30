<?php
include 'db.php'; // Include database connection

$query = "SELECT 
    p.pname AS project_name, 
    c.cname AS category_name, 
    p.timeline, 
    CONCAT(mui.fname, ' ', mui.lname) AS manager_name, 
    GROUP_CONCAT(CONCAT(sui.fname, ' ', sui.lname) SEPARATOR ', ') AS staff_names
        FROM project p
        JOIN categoryy c ON p.category_id = c.cid
        JOIN users m ON p.manager_id = m.id AND m.role = 2
        JOIN user_info mui ON m.id = mui.user_id
       
        JOIN users s ON p.staff_id = s.id AND s.role = 3
        JOIN user_info sui ON s.id = sui.user_id
        GROUP BY p.pid;
        ";

$result = mysqli_query($conn, $query);

// Check if the query failed
if (!$result) {
    echo json_encode(['status' => 'error', 'message' => 'Query failed: ' . mysqli_error($conn)]);
    exit; // Stop further execution
}

$response = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $response[] = $row;
    }
    echo json_encode(['status' => 'success', 'data' => $response]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'No projects found']);
}
?>