<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Dgit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Base Styling for Body and Background Shapes (Reused from login.html) */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f2f5;
            overflow: hidden;
            position: relative;
        }

        /* Large background shapes */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 70%;
            height: 100%;
            background-color: #f8f9fa;
            z-index: -2;
            /* Adjust the clip-path to match the image's division */
            clip-path: polygon(0 0, 70% 0, 30% 100%, 0% 100%);
        }

        body::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 70%;
            height: 100%;
            background-color: #343a40;
            z-index: -1;
            /* Adjust the clip-path to match the image's division */
            clip-path: polygon(30% 0, 100% 0, 100% 100%, 70% 100%);
        }

        /* Form Container Styling (Reused from login.html) */
        .signup-container {
            position: relative;
            z-index: 10;
            background-color: white;
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
            /* Move slightly right to center with illustration on left */
            margin-left: 20%;
        }

        .signup-container h2 {
            font-weight: 600;
            color: #333;
            margin-bottom: 2rem;
            text-align: left;
            color: #0d6efd;
            /* Use a distinct color like Bootstrap primary for the title */
        }

        /* Input Field Styling (Reused from login.html) */
        .form-control {
            border-radius: 0.75rem;
            padding: 0.85rem 1.25rem;
            margin-bottom: 1.25rem;
            background-color: #f0f2f5;
            border: 1px solid #e0e2e5;
        }

        .form-control:focus {
            background-color: #e9ecef;
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        /* Button Styling (Reused from login.html) */
        .btn-custom-orange {
            background-color: #ffc107;
            border-color: #ffc107;
            color: white;
            border-radius: 0.75rem;
            padding: 0.85rem 1.25rem;
            font-weight: bold;
            width: 100%;
            margin-top: 1rem;
            transition: background-color 0.2s ease;
        }

        .btn-custom-orange:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            color: white;
        }

        .footer-links {
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: #6c757d;
        }

        .footer-links a {
            color: #ffc107;
            /* Orange Sign In link */
            text-decoration: none;
            font-weight: 600;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        /* Dgit logo (Reused from login.html) */
        .dgit-logo {
            position: absolute;
            top: 2rem;
            left: 2rem;
            display: flex;
            align-items: center;
            font-weight: bold;
            font-size: 1.5rem;
            color: #343a40;
            z-index: 10;
        }

        .dgit-logo i {
            color: #0d6efd;
            margin-right: 0.5rem;
        }

        /* Illustration positioning (Updated for Sign Up) */
        .illustration-signup {
            position: absolute;
            left: 10%;
            bottom: 25%;
            width: 350px;
            z-index: 5;
        }

        /* Media Query for responsiveness */
        @media (max-width: 992px) {
            .illustration-signup {
                display: none;
                /* Hide illustration on tablets/mobile */
            }

            .signup-container {
                margin-left: 0;
                /* Center form completely */
            }
        }
    </style>
</head>

<body>

    <div class="dgit-logo">
        <img src="../assets/images/logo.png" style="width: 6rem;">
    </div>

    <img src="../assets/images/login.png" class="illustration-signup img-fluid d-none d-md-block" style="position: absolute; top: 5rem; left: 4rem; width: 44.25rem; height: 34.5rem;">

    <div class="signup-container">
        <h2>Sign in</h2>
        <form action="dashboard.php">
            <div class="mb-3 text-start">
                <label for="email" class="form-label visually-hidden">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Email address">
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label visually-hidden">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-custom-orange">Sign In</button>
        </form>
        <div class="footer-links">
            Don't have an account? <a href="sign_up.php">Sign Up</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>