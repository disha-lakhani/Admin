<?php
include 'layout/header.php';
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-lg-9 mx-auto">
        <div class="card mb-6">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="mx-auto">Add Project</h3>
                
            </div>
            <div class="card-body">
                <form action="your-action-page.php" method="POST">
                    <!-- Project Name -->
                    <div class="mb-3">
                        <label for="project-name" class="form-label">Project Name</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-project-name" class="input-group-text"><i
                                    class="ri-pencil-line ri-20px"></i></span>
                            <input type="text" class="form-control" id="project-name" name="project_name"
                                placeholder="Project Name" aria-label="Project Name"
                                aria-describedby="basic-icon-default-project-name" required />
                        </div>
                    </div>

                    <!-- Category Dropdown -->
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select id="category" name="category" class="form-select" required>
                            <option value="">Select Category</option>
                            <option value="development">Development</option>
                            <option value="marketing">Marketing</option>
                            <option value="design">Design</option>
                            <option value="research">Research</option>
                        </select>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="project-description" class="form-label">Description</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-description" class="input-group-text"><i
                                    class="ri-edit-box-line ri-20px"></i></span>
                            <textarea id="project-description" name="description" class="form-control"
                                placeholder="Project Description" aria-label="Project Description"
                                aria-describedby="basic-icon-default-description" style="height: 100px"
                                required></textarea>
                        </div>
                    </div>

                    <!-- Timeline -->
                    <div class="mb-3">
                        <label for="project-timeline" class="form-label">Timeline</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-timeline" class="input-group-text"><i
                                    class="ri-calendar-line ri-20px"></i></span>
                            <input type="text" id="project-timeline" name="timeline" class="form-control"
                                placeholder="Timeline" aria-label="Timeline"
                                aria-describedby="basic-icon-default-timeline" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="manager" class="form-label">Manager</label>
                                <select id="manager" name="manager" class="form-select" required>
                                    <option value="">Select Manager</option>
                                    <!-- Add dynamic list of managers from your database -->
                                    <option value="manager1">Manager 1</option>
                                    <option value="manager2">Manager 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="mb-3">
                        <label for="staff" class="form-label">Staff</label>
                        <select id="staff" name="staff" class="form-select" required>
                            <option value="">Select staff</option>
                            <option value="staff1">Staff 1</option>
                            <option value="staff2">Staff 2</option>
                            <option value="staff3">Staff 3</option>
                            <option value="staff4">Staff 4</option>
                        </select>
                    </div>
                        </div>
                    </div>
                    <!-- Manager Dropdown -->


                    <!-- Staff Dropdown -->
                    

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100 mt-3">Add Project</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'layout/footer.php';
?>