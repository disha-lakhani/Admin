<?php
include 'layout/header.php';
?>


<div class="container-xxl flex-grow-1 container-p-y  ">
    <div class="card ">
        <h5 class="card-header">Manager Details</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Role</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John</td>
            <td>Manager</td>
            <td>Male</td>
            <td>john.doe@example.com</td>
            <td>+1 123 456 7890</td>
            <td>
                <img src="uploads/staff.png" alt="John's Image" class="img-thumbnail" style="width:50px;">
            </td>
            <td>
                <button class="btn btn-sm btn-primary">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Jane</td>
            <td>Assistant Manager</td>
            <td>Female</td>
            <td>jane.smith@example.com</td>
            <td>+1 987 654 3210</td>
            <td>
                <img src="uploads/staff.png" alt="Jane's Image" class="img-thumbnail" style="width:50px;">
            </td>
            <td>
                <button class="btn btn-sm btn-primary">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Sam</td>
            <td>HR</td>
            <td>Male</td>
            <td>sam.wilson@example.com</td>
            <td>+1 555 666 7777</td>
            <td>
                <img src="uploads/staff.png" alt="Sam's Image" class="img-thumbnail" style="width:50px;">
            </td>
            <td>
                <button class="btn btn-sm btn-primary">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
            </td>
        </tr>
    </tbody>
</table>



            </div>
        </div>
    </div>
</div>





<?php

include 'layout/footer.php';
?>