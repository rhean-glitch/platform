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
            <a href="planned.php" class="sidebar-item">
                <i class="fas fa-calendar-alt"></i> Planned
            </a>
            <a href="important.php" class="sidebar-item active">
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
            <h1>Important</h1>
            <hr>
        </div>

        <div class="task-list mt-4">

            <div class="task-item">
                <div class="form-check me-3">
                    <input class="form-check-input" type="checkbox" value="" id="task1">
                </div>
                <div class="task-details flex-grow-1">
                    <div class="task-title">Answer Assignment</div>
                    <div class="task-subtitle">IT ERA | Today</div>
                </div>
                <div class="task-star">
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="task-item">
                <div class="form-check me-3">
                    <input class="form-check-input" type="checkbox" value="" id="task2">
                </div>
                <div class="task-details flex-grow-1">
                    <div class="task-title">Make PPT</div>
                    <div class="task-subtitle">Platform Technologies | October 15, 2025</div>
                </div>
                <div class="task-star">
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="task-item">
                <div class="form-check me-3">
                    <input class="form-check-input" type="checkbox" value="" id="task3">
                </div>
                <div class="task-details flex-grow-1">
                    <div class="task-title">Do General Cleaning</div>
                    <div class="task-subtitle">Chores | November 3, 2025</div>
                </div>
                <div class="task-star">
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>
        <div class="fab-add-task">
            <i class="fas fa-plus"></i>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>