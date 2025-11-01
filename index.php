<?php
require_once 'header.php';
?>

<div class="container">
    <nav class="navbar navbar-expand-lg landing-navbar">
        <a href="#" class="dgit-logo">
            <img src="assets/images/logo.png" style="width: 6rem">
        </a>
        <div class="ms-auto nav-links">
            <button type="button" class="btn btn-sign-in" data-bs-toggle="modal" data-bs-target="#roleSelectionModal">
                Sign in
            </button>
            <a href="sign_up.php" class="btn btn-sign-up">Sign up</a>
        </div>
    </nav>
</div>

<div class="hero-section">
    <div class="container">
        <div class="screen-mockups">

            <img src="path/to/your/image_1e4e7e.png" alt="DOIT App Mockup Screenshots">
        </div>
    </div>
</div>
<div class="content-block">
    <div class="container">
        <h2>Welcome to DOIT!</h2>
        <h3>Organize Your Day. Accomplish Your Goals.</h3>

        <p>
            Tired of feeling overwhelmed by your tasks? DOIT is your personal productivity assistant, designed to
            bring clarity and control back to your day. From daily errands to big projects, we make managing your
            to-do list simple, intuitive, and satisfying.
        </p>

        <a href="#" class="btn btn-get-started">Get Started</a>
    </div>
</div>

<div class="modal fade" id="roleSelectionModal" tabindex="-1" aria-labelledby="roleSelectionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-secondary" id="roleSelectionModalLabel">Sign In As...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-center text-muted">Select your account type to proceed to the login page.</p>

                <div class="row g-3">
                    <div class="col-6">
                        <a href="sign_in.php" class="text-decoration-none text-dark d-block">
                            <div class="p-4 text-center role-option-card">
                                <i class="fas fa-user"></i>
                                <h5>Regular User</h5>
                                <p class="text-muted small mb-0">Manage tasks and productivity.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-6">
                        <a href="admin/sign_in.php" class="text-decoration-none text-dark d-block">
                            <div class="p-4 text-center role-option-card">
                                <i class="fas fa-user-shield"></i>
                                <h5>Administrator</h5>
                                <p class="text-muted small mb-0">Access settings and system control.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>