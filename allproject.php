<?php
include 'layout/header.php';
?>


<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Project Details</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered" id="projectTable">
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
                        <!-- Rows will be appended here via AJAX -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>







<?php

include 'layout/footer.php';
?>

<script>
    $(document).ready(function () {
        function fetchProjects() {
            $.ajax({
                url: 'fetch_projects.php',
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        var projects = response.data;
                        var html = '';
                        $.each(projects, function (index, project) {
                            html += '<tr>';
                            html += '<td>' + project.project_name + '</td>';
                            html += '<td>' + project.category_name + '</td>';
                            html += '<td>' + project.timeline + '</td>';
                            html += '<td>' + project.manager_name + '</td>';
                            html += '<td>' + project.staff_names + '</td>';
                            html += '<td>';
                            html += '<button class="btn btn-sm btn-primary edit-btn">Edit</button> ';
                            html += '<button class="btn btn-sm btn-danger delete-btn">Delete</button>';
                            html += '</td>';
                            html += '</tr>';
                        });

                        $('#projectTable tbody').html(html); // Update the table body
                    } else {
                        $('#projectTable tbody').html('<tr><td colspan="6" class="text-center">' + response.message + '</td></tr>');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching projects:', error);
                    $('#projectTable tbody').html('<tr><td colspan="6" class="text-center text-danger">An error occurred while fetching projects.</td></tr>');
                }
            });
        }

        // Initial fetch
        fetchProjects();
    });

</script>