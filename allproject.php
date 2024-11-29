<?php
include 'layout/header.php';
?>


<div class="container-xxl flex-grow-1 container-p-y  ">
    <div class="card ">
        <h5 class="card-header">Project Details</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
    <thead>
        <tr>
            <th>Project</th>
            <th>Category</th>
            <th>Timeline</th>
            <th>Manager</th>
            <th>Staff</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Website Redesign</td>
            <td>IT</td>
            <td>Jan 2024 - Mar 2024</td>
            <td>John Doe</td>
            <td>Jane Smith, Bob Lee</td>
            <td>
                <button class="btn btn-sm btn-primary">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Marketing Campaign</td>
            <td>Marketing</td>
            <td>Feb 2024 - Apr 2024</td>
            <td>Sarah Connor</td>
            <td>Tom Brown, Alice White</td>
            <td>
                <button class="btn btn-sm btn-primary">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>App Development</td>
            <td>Development</td>
            <td>Mar 2024 - Aug 2024</td>
            <td>Mike Johnson</td>
            <td>Emily Davis, Chris Evans</td>
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