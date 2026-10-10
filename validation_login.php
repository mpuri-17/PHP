    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"></script>


    <script>
    $(document).ready(function(){

        var failedAttempts = 0;
        var locked = false;
        var lockoutTime = 30;
        var countdown;

        $("#loginForm").validate({

            rules: {

                username: {
                    required: true,
                    minlength: 5,
                    maxlength: 20
                },

                password: {
                    required: true,
                    minlength: 7
                }

            },

            messages: {

                username: {
                    required: "Username is required",
                    minlength: "Username must be at least 5 characters long",
                    maxlength: "Username cannot exceed 20 characters"
                },

                password: {
                    required: "Password is required",
                    minlength: "Password must be at least 7 characters long"
                }

            },

            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },

            submitHandler: function(form) {

                if (locked) {
                    return false;
                }

                var username = $("#username").val();
                var password = $("#login-password").val();

                var savedUsername = localStorage.getItem("username");
                var savedPassword = localStorage.getItem("password");

                if (username === savedUsername && password === savedPassword) {

                    failedAttempts = 0;

                    $("#login-message")
                        .removeClass("error")
                        .addClass("success")
                        .text("Login successful! Redirecting...")
                        .show();

                    setTimeout(function(){
                        window.location.href = "index.php";
                    }, 1000);

                } else {

                    failedAttempts++;

                    if (failedAttempts < 3) {

                        var remaining = 3 - failedAttempts;

                        $("#login-message")
                            .removeClass("success")
                            .addClass("error")
                            .text(
                                "Invalid username or password. " +
                                remaining +
                                " attempt(s) remaining."
                            )
                            .show();

                    } else {

                        locked = true;

                        $("#username").prop("disabled", true);
                        $("#login-password").prop("disabled", true);
                        $("button[type='submit']").prop("disabled", true);

                        startLockout();
                    }

                }

                return false;
            }

        });


        function startLockout() {

            var timeLeft = 30;

            $("#login-message")
                .removeClass("success")
                .addClass("error")
                .text(
                    "Too many failed attempts. Please wait " +
                    timeLeft +
                    " seconds."
                )
                .show();

            countdown = setInterval(function(){

                timeLeft--;

                if (timeLeft > 0) {

                    $("#login-message")
                        .text(
                            "Too many failed attempts. Please wait " +
                            timeLeft +
                            " seconds."
                        );

                } else {

                    clearInterval(countdown);

                    failedAttempts = 0;
                    locked = false;

                    $("#username").prop("disabled", false);
                    $("#login-password").prop("disabled", false);
                    $("button[type='submit']").prop("disabled", false);

                    $("#login-message")
                        .removeClass("error")
                        .text("You can try logging in again.")
                        .show();
                }

            }, 1000);
        }

    });
</script>