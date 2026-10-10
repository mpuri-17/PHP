<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | AIM Smile Dental Clinic</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/css/stylelogin.css">
</head>

<body class="register-page">

    <main class="container">

        <section class="form-card register-card">

            <div class="logo">
                <img src="img/logo.jpg" alt="AIM Smile Dental Clinic Logo">
            </div>

            <h1>AIM Smile</h1>

            <p class="clinic-name">
                DENTAL CLINIC
            </p>

            <h2>
                Create Account
            </h2>

            <p class="subtitle">
                Register for your dental care account
            </p>

            <form id="registerForm">

                <div class="form-group">

                    <label for="fullname">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="fullname"
                        name="fullname"
                        placeholder="Enter your full name"
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                    >

                </div>


                <div class="form-group">

                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your username"
                    >

                </div>


                <div class="form-group">

                    <label for="register-password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="register-password"
                        name="password"
                        placeholder="Create a password"
                    >

                </div>


                <div class="form-group">

                    <label for="confirm-password">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        id="confirm-password"
                        name="confirm-password"
                        placeholder="Confirm your password"
                    >

                </div>


                <div class="terms">

                    <input
                        type="checkbox"
                        id="terms"
                        name="terms"
                    >

                    <label for="terms">
                        I agree to the Terms and Conditions.
                    </label>

                </div>


                <div id="register-message"></div>


                <button type="submit">
                    Create Account
                </button>

            </form>


            <p class="account-text">

                Already have an account?

                <a href="login.php">
                    Login
                </a>

            </p>

        </section>

    </main>


<?php include 'includes/validation_register.php'; ?>

</body>
</html>
