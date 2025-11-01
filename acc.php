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
            <a href="#" class="text-dark">
                <i class="fas fa-user-circle fs-3"></i>
            </a>
        </div>
    </div>
</nav>

<div id="user-app-layout">

    <a href="myday.php" class="text-dark ms-3 ml-2 mt-2"><i class="fas fa-arrow-left fs-3"></i></a>

    <div class="settings-content-wrapper">

        <div class="settings-section-title">Personal Info</div>

        <div class="personal-info-group">

            <div class="info-item">
                <div>
                    <div class="info-label">Username</div>
                    <div class="info-value">The Great King User</div>
                </div>
                <div class="info-arrow"><i class="fas fa-chevron-right"></i></div>
            </div>

            <div class="info-item">
                <div>
                    <div class="info-label">Email</div>
                    <div class="info-value">thegreatking@gmail.com</div>
                </div>
                <div class="info-arrow"><i class="fas fa-chevron-right"></i></div>
            </div>

            <div class="info-item">
                <div>
                    <div class="info-label">Create a password</div>
                </div>
                <div class="info-arrow"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>

        <div class="general-settings">
            <div class="toggles-group">
                <div class="settings-section-title">General</div>

                <div class="toggle-item">
                    <label class="form-check-label" for="toggle-confirm">Confirm before deleting</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="toggle-confirm" checked>
                    </div>
                </div>

                <div class="toggle-item">
                    <label class="form-check-label" for="toggle-reminders">Turned on reminder notification</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="toggle-reminders" checked>
                    </div>
                </div>

                <div class="toggle-item">
                    <label class="form-check-label" for="toggle-darkmode">Turn on dark mode</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="toggle-darkmode">
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column justify-content-start align-items-end">
                <!-- Button modified to trigger the modal -->
                <button class="delete-account-btn" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                    Delete Account
                </button>

                <div class="feedback-section mt-5">
                    Question or feedback? <br>
                    Email us at <a href="mailto:doit@gmail.com">Doit@gmail.com.</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Account Confirmation Modal -->
<div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteAccountModalLabel">Confirm Account Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you absolutely sure you want to delete your account? This action cannot be undone.</p>
                <p class="text-danger fw-bold">All your data, tasks, and history will be permanently erased.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="index.php">
                    <button type="button" class="btn btn-delete-confirm" onclick="handleAccountDeletion()">
                        Yes, Delete Permanently
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>