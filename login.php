<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | AIM Smile Dental Clinic</title>
    <link rel="stylesheet" href="assets/css/stylelogin.css">
</head>

<body class="login-page">

    <main class="container">

        <section class="form-card">

            <div class="logo">
                <img src="img/logo.jpg" alt="AIM Smile Dental Clinic Logo">
            </div>

            <h1>AIM Smile</h1>

            <p class="clinic-name">
                DENTAL CLINIC
            </p>

            <h2>
                Welcome Back!
            </h2>

            <p class="subtitle">
                Login to your account
            </p>


            <form id="loginForm" action="index.html" method="get">

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
                
                    <label for="login-password">
                        Password
                    </label>
                
                        <input
                            type="password"
                            id="login-password"
                            name="password"
                            placeholder="Enter your password"
                        >
                
                    </div>
                
                    <div class="options">

                        <label class="remember">
                            <input
                                type="checkbox"
                                name="remember"
                               >
                            Remember me
                        </label>
                    
                        <a href="#">Forgot Password?</a>
                    
                    </div>

                    <div id="login-message"></div>
                    <button type="submit">
                        Login
                    </button>

                </form>



            <p class="account-text">

                Don't have an account?

                <a href="register.php">
                    Register
                </a>

            </p>

        </section>

    </main>


<?php include 'includes/validation_login.php'; ?>

</body>
</html>
