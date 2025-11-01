<?php
require_once 'header.php';
?>



<nav class="navbar navbar-light user-navbar">
    <div class="container-fluid">
        <a href="#" class="dgit-logo">
            <img src="assets/images/logo.png" style="width: 6rem; margin-left: 2rem;">
        </a>

        <form class="d-flex navbar-search me-auto" style="width: 400px;">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Search........" aria-label="Search">
                <span class="input-group-text">
                    <i class="fas fa-search text-muted"></i>
                </span>
            </div>
        </form>

        <div class="d-flex me-3">
            <a href="acc.php" class="text-dark">
                <i class="fas fa-user-circle fs-3"></i>
            </a>
        </div>
    </div>
</nav>

<div id="user-app-layout" class="">

    <div class="sidebar-wrapper">

        <div class="list-group list-group-flush">
            <div class="sidebar-list-group-title">TASKS</div>
            <a href="myday.php" class="sidebar-item">
                <i class="fas fa-sun"></i> My Day
            </a>
            <a href="planned.php" class="sidebar-item active">
                <i class="fas fa-calendar-alt"></i> Planned
            </a>
            <a href="important.php" class="sidebar-item">
                <i class="fas fa-star"></i> Important
            </a>
            <a href="completed.php" class="sidebar-item">
                <i class="fas fa-check-circle"></i> Completed
            </a>
        </div>

        <div class="list-group list-group-flush mt-3">
            <div class="sidebar-list-group-title d-flex justify-content-between align-items-center">
                SCHOOL WORK
                <i class="fas fa-chevron-down text-muted me-2"></i>
            </div>
            <a href="school_work.php" class="sidebar-item">
                <i class="fas fa-list-ul" style="color: #ffc107;"></i> IT ERA
            </a>
            <a href="school_pt.php" class="sidebar-item">
                <i class="fas fa-list-ul" style="color: #4db6ac;"></i> Platform Technologies
            </a>
        </div>

        <div class="list-group list-group-flush mt-3">
            <div class="sidebar-list-group-title d-flex justify-content-between align-items-center">
                PERSONAL
                <i class="fas fa-chevron-down text-muted me-2"></i>
            </div>
            <a href="personal_movie.php" class="sidebar-item">
                <i class="fas fa-list-ul" style="color: #0d6efd;"></i> Movie Marathon
            </a>
            <a href="personal_chores.php" class="sidebar-item">
                <i class="fas fa-list-ul" style="color: #f44336;"></i> Chores
            </a>
        </div>

        <div class="d-flex justify-content-between p-3 position-absolute bottom-0"
            style="background-color: var(--sidebar-bg); border-top: 1px solid rgba(0, 0, 0, 0.1); width: 15.5rem;">
            <a href="#" class="text-muted text-decoration-none">
                <i class="fas fa-plus me-1"></i> Add New Folder
            </a>
            <a href="#" class="text-muted">
                <i class="fas fa-folder-plus"></i>
            </a>
        </div>
    </div>

    <div class="mt-1">
        <button class="menu-toggle-btn ms-3" id="menu-toggle" aria-label="Toggle navigation menu">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <div class="task-content-wrapper">

        <div class="content-header">
            <h1>Planned</h1>
            <hr>
        </div>

        <div class="task-list mt-4" id="task-list">
        </div>

        <div class="fab-add-task" data-bs-toggle="modal" data-bs-target="#taskAddModal">
            <i class="fas fa-plus"></i>
        </div>
    </div>
</div>

<div class="modal fade" id="taskAddModal" tabindex="-1" aria-labelledby="taskAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-secondary" id="taskAddModalLabel">Add New Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="add-task-form">
                    <div class="mb-3">
                        <label for="new-task-title" class="form-label">Task Title</label>
                        <input type="text" class="form-control" id="new-task-title" required>
                    </div>
                    <div class="mb-3">
                        <label for="new-task-folder" class="form-label">Folder</label>
                        <select class="form-select" id="new-task-folder" required>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="new-task-date" class="form-label">Due Date</label>
                        <input type="date" class="form-control" id="new-task-date" value="">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="new-task-important">
                        <label class="form-check-label" for="new-task-important">
                            Mark as Important
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Add Task</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="taskEditModal" tabindex="-1" aria-labelledby="taskEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="form-check me-3">
                    <input class="form-check-input" type="checkbox" id="modal-edit-complete-check"
                        style="width: 20px; height: 20px; cursor: pointer;">
                </div>
                <h5 class="modal-title visually-hidden" id="taskEditModalLabel">Edit Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" id="modal-edit-task-title" value="">

                <div class="modal-details mb-4">
                    <span id="modal-edit-task-folder"><i class="fas fa-list-ul"></i> Folder</span>
                    <span class="mx-2 text-muted">|</span>
                    <span id="modal-edit-task-date"><i class="fas fa-calendar-alt"></i> Date</span>
                    <span class="mx-2 text-muted">|</span>
                    <span id="modal-edit-task-star"><i class="far fa-star"></i> Important</span>
                </div>

                <hr class="my-4">

                <input type="hidden" id="modal-edit-task-id">

                <div class="mb-3">
                    <label for="modal-edit-folder-select" class="form-label text-muted">Move to Folder</label>
                    <select class="form-select" id="modal-edit-folder-select">
                    </select>
                </div>

                <div class="mb-3">
                    <label for="modal-edit-due-date" class="form-label text-muted">Due Date</label>
                    <input type="date" class="form-control" id="modal-edit-due-date">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" id="delete-task-btn"><i
                        class="fas fa-trash-alt"></i> Delete Task</button>
                <button type="button" class="btn btn-primary" id="save-task-btn">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>