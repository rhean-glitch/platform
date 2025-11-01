<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard (Bootstrap)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>

        :root {
            --sidebar-width: 250px;
            --sidebar-bg: #212529;
            --primary-blue: #0d6efd;
            --page-bg: #f8f9fa;
        }

        #wrapper {
            overflow-x: hidden;
            min-height: 100vh;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            width: var(--sidebar-width);
            transition: margin 0.25s ease-out;
            background-color: var(--sidebar-bg) !important;
        }

        .sidebar-active {
            background-color: var(--page-bg) !important;
            color: #212529 !important;
            margin-right: 1rem;
            padding-left: 1.5rem !important;
        }

        .sidebar-active i {
            color: #212529 !important;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        .profile-card {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .profile-avatar {
            font-size: 150px;
            color: #212529;
            border: 2px solid #212529;
            border-radius: 50%;
            padding: 20px;
            display: inline-block;
        }

        .profile-info-box {
            background-color: var(--page-bg);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .profile-info-box span {
            font-weight: 400;
            /* Value text */
        }

        /* Settings list cleanup (retained from previous step) */
        .settings-list .list-group-item {
            border-left: 0;
            border-right: 0;
            border-radius: 0;
            padding: 1rem 1.25rem;
        }

        .settings-list .list-group-item:first-child {
            border-top: 0;
        }

        /* Sidebar Toggle Logic (retained) */
        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        .btn-custom {
            border: none;
        }

        @media (min-width: 992px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: calc(0px - var(--sidebar-width));
            }
        }

        @media (max-width: 991.98px) {
            #sidebar-wrapper {
                margin-left: calc(0px - var(--sidebar-width));
            }
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-dark text-white border-end" id="sidebar-wrapper" >
            <div class="list-group list-group-flush mt-5">
                <a href="#dashboard"
                    class="list-group-item list-group-item-action bg-dark text-white-50 p-3 sidebar-link"
                    data-target="dashboard-section">
                    <i class="fas fa-home me-3"></i> Dashboard
                </a>
                <a href="#users" class="list-group-item list-group-item-action bg-dark text-white-50 p-3 sidebar-link"
                    data-target="users-section">
                    <i class="fas fa-users me-3"></i> Users
                </a>
                <a href="#tasks" class="list-group-item list-group-item-action bg-dark text-white-50 p-3 sidebar-link"
                    data-target="tasks-section">
                    <i class="fas fa-tasks me-3"></i> Tasks
                </a>
                <a href="#settings"
                    class="list-group-item list-group-item-action bg-dark text-white-50 p-3 sidebar-link"
                    data-target="settings-section">
                    <i class="fas fa-cog me-3"></i> Settings
                </a>
            </div>
        </div>
        <div id="page-content-wrapper" class="flex-grow-1 bg-light">
            <nav id="main-navbar"
                class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm sticky-top">
                <div class="container-fluid">
                    <button class="btn btn-custom me-3" id="navbarToggleButton">
                        <i class="fas fa-bars" id="navbarToggleIcon"></i>
                    </button>

                    <form id="searchForm" class="d-flex me-auto my-2 my-lg-0">
                        <div class="input-group">
                            <input class="form-control border-0 rounded-pill ps-3" type="search"
                                placeholder="Search........." aria-label="Search" style="width: 250px;">
                            <span
                                class="input-group-text bg-white border-0 p-0 position-absolute end-0 top-50 translate-middle-y me-3">
                                <i class="fas fa-search text-muted"></i>
                            </span>
                        </div>
                    </form>

                    <div class="d-flex align-items-center ms-auto ms-sm-0">
                        <a href="#" class="text-muted me-3" id="notificationIcon">
                            <i class="fas fa-bell fs-5"></i>
                        </a>
                        <a href="#" class="text-muted d-flex align-items-center text-decoration-none profile-trigger">
                            <i class="fas fa-user-circle fs-5 me-2"></i>
                            <span class="d-none d-sm-inline">Admin</span>
                        </a>
                    </div>
                </div>
            </nav>
            <div id="content-container">
                <div id="dashboard-section" class="container-fluid py-4 content-section active">
                    <h1 class="text-center mb-5 text-uppercase fw-bold text-dark">ADMIN DASHBOARD</h1>
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6 col-sm-10 mb-4">
                            <div class="card shadow-sm p-4 text-center">
                                <p class="card-title text-muted mb-2 fs-6 fw-semibold">Total Users</p>
                                <p class="card-text display-4 fw-bolder text-dark mb-4">250</p>
                                <a href="#" class="text-decoration-none text-primary fw-medium">Manage Users</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-10 mb-4">
                            <div class="card shadow-sm p-4 text-center">
                                <p class="card-title text-muted mb-2 fs-6 fw-semibold">Total Tasks</p>
                                <p class="card-text display-4 fw-bolder text-dark mb-4">560</p>
                                <a href="#" class="text-decoration-none text-primary fw-medium">Manage Tasks</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="users-section" class="container-fluid py-4 content-section">
                    <h1 class="text-center mb-5 text-uppercase fw-bold text-dark">USER MANAGEMENT</h1>

                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="card shadow-sm">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th scope="col">User ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>John Doe</td>
                                                    <td>john@example.com</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                    <td>
                                                        <a href="#" class="text-primary me-2"><i
                                                                class="fas fa-edit"></i></a>
                                                        <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jane Smith</td>
                                                    <td>jane@example.com</td>
                                                    <td><span class="badge bg-danger">Suspended</span></td>
                                                    <td>
                                                        <a href="#" class="text-primary me-2"><i
                                                                class="fas fa-edit"></i></a>
                                                        <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="tasks-section" class="container-fluid py-4 content-section">
                    <h1 class="text-center mb-5 text-uppercase fw-bold text-dark">TASK MANAGEMENT</h1>

                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="card shadow-sm">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th scope="col">Task ID</th>
                                                    <th scope="col">Task Name</th>
                                                    <th scope="col">Assigned User</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">101</th>
                                                    <td>Finish Homework</td>
                                                    <td>John Doe</td>
                                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                                    <td>
                                                        <a href="#" class="text-primary me-2"><i
                                                                class="fas fa-check"></i></a>
                                                        <a href="#" class="text-danger"><i class="fas fa-times"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">102</th>
                                                    <td>Read Book</td>
                                                    <td>Jane Smith</td>
                                                    <td><span class="badge bg-success">Done</span></td>
                                                    <td>
                                                        <a href="#" class="text-primary me-2"><i
                                                                class="fas fa-check"></i></a>
                                                        <a href="#" class="text-danger"><i class="fas fa-times"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">103</th>
                                                    <td>Buy Groceries</td>
                                                    <td>Bob Johnson</td>
                                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                                    <td>
                                                        <a href="#" class="text-primary me-2"><i
                                                                class="fas fa-check"></i></a>
                                                        <a href="#" class="text-danger"><i class="fas fa-times"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="settings-section" class="container-fluid py-4 content-section">
                    <h1 class="text-center mb-5 text-uppercase fw-bold text-dark">SETTINGS</h1>

                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="card shadow-sm">
                                <div class="list-group list-group-flush settings-list">
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Account Retention Policy</span>
                                        <i class="fas fa-chevron-right text-muted"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Default Task Status</span>
                                        <i class="fas fa-chevron-right text-muted"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Theme Mode</span>
                                        <i class="fas fa-chevron-right text-muted"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Export Data</span>
                                        <i class="fas fa-chevron-right text-muted"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="profile-section" class="container-fluid py-4 content-section">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="profile-card">
                                <div class="row align-items-center text-center text-md-start">
                                    <div class="col-12 col-md-4 mb-4 mb-md-0 d-flex flex-column align-items-center">
                                        <i class="fas fa-user-circle profile-avatar"></i>
                                        <span class="mt-3 fw-bold">Rank: Admin 1</span>
                                    </div>

                                    <div class="col-12 col-md-8">
                                        <div class="profile-info-box">
                                            <span class="fw-bold">Full Name:</span> Christiania Arcdom
                                        </div>

                                        <div class="profile-info-box">
                                            <span class="fw-bold">Email:</span> anjh@gmail.com
                                        </div>

                                        <a href="#"
                                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center mb-4">
                                            <span class="fw-semibold">Change Password</span>
                                            <i class="fas fa-chevron-right text-muted"></i>
                                        </a>

                                        <a href="sign_in.php">
                                            <button class="btn btn-light shadow-sm py-2 px-4 fw-semibold border">
                                                Log-out
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // --- DOM Elements ---
        const wrapper = document.getElementById('wrapper');
        const sidebarLinks = document.querySelectorAll('.sidebar-link');
        const contentSections = document.querySelectorAll('.content-section');
        const navbarToggleButton = document.getElementById('navbarToggleButton');
        const navbarToggleIcon = document.getElementById('navbarToggleIcon');
        const searchForm = document.getElementById('searchForm');
        const notificationIcon = document.getElementById('notificationIcon');
        const profileTriggers = document.querySelectorAll('.profile-trigger');

        let currentView = 'dashboard-section'; // Track the current main view

        // --- Sidebar Toggle/Back Button Logic ---
        const toggleSidebar = () => {
            if (currentView === 'profile-section') {
                // If on profile page, act as BACK button
                showMainContent(lastMainView || 'dashboard-section');
            } else {
                // If on a main page, toggle the sidebar
                wrapper.classList.toggle('toggled');
            }
        };

        navbarToggleButton.addEventListener('click', toggleSidebar);

        // --- Navbar State Manager ---
        const updateNavbarForView = (viewId) => {
            const isProfileView = viewId === 'profile-section';

            // 1. Change Navbar Button Icon
            navbarToggleIcon.className = isProfileView ? 'fas fa-arrow-left' : 'fas fa-bars';

            // 2. Show/Hide Search and Notification
            searchForm.style.display = isProfileView ? 'none' : 'flex';
            notificationIcon.style.display = isProfileView ? 'none' : 'block';

            // 3. Update currentView tracker
            currentView = viewId;
        };

        // --- Main Content Display Function ---
        let lastMainView = 'dashboard-section';

        const showMainContent = (targetId) => {
            // 1. Hide all content sections
            contentSections.forEach(s => s.classList.remove('active'));

            // 2. Show the target section
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.classList.add('active');
            }

            // 3. Update Navbar state
            updateNavbarForView(targetId);

            // 4. Update sidebar links (if not profile)
            if (targetId !== 'profile-section') {
                lastMainView = targetId;
                sidebarLinks.forEach(l => {
                    const isActive = l.getAttribute('data-target') === targetId;
                    l.classList.toggle('sidebar-active', isActive);
                    l.classList.toggle('bg-dark', !isActive);
                    l.classList.toggle('text-white-50', !isActive);
                    l.classList.toggle('bg-primary', isActive);
                    l.classList.toggle('text-white', isActive);
                });
                // Ensure sidebar is closed on small screens after navigation
                if (window.innerWidth < 992) {
                    wrapper.classList.add('toggled');
                }
            } else {
                // If switching to profile view, deselect sidebar link
                sidebarLinks.forEach(l => {
                    l.classList.remove('sidebar-active', 'bg-primary', 'text-white');
                    l.classList.add('bg-dark', 'text-white-50');
                });
            }
        };

        // --- Event Listeners ---

        // 1. Sidebar Navigation
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                showMainContent(this.getAttribute('data-target'));
            });
        });

        // 2. Profile Trigger
        profileTriggers.forEach(trigger => {
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                showMainContent('profile-section');
            });
        });

        // 3. Initial Load Setup
        document.addEventListener('DOMContentLoaded', () => {
            showMainContent('dashboard-section');
        });
    </script>
</body>

</html>