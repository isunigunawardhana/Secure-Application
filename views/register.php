<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
        }
        .register-form {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,.2);
        }
        .register-form h2 {
            margin-bottom: 20px;
            font-size: 28px;
            text-align: center;
        }
        .register-form .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        .register-form .form-control {
            border-radius: 25px;
            box-shadow: none;
            padding-left: 40px;
        }
        .register-form .form-control:focus {
            border-color: green;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .register-form .form-control-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: green;
        }
        .register-form .form-control-show-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: green;
        }
        .register-form .btn {
            font-size: 16px;
            border-radius: 25px;
            padding: 10px 20px;
            background: green;
            color: #fff;
            border: none;
            transition: background 0.3s;
        }
        .register-form .btn:hover {
            background: green;
        }
        .register-form .text-center {
            margin-top: 20px;
        }
        .register-form .text-center a {
            color: green;
        }
        .register-form .text-center a:hover {
            text-decoration: underline;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
            display: none; /* Hide by default */
        }
    </style>
</head>
<body>
    <div class="register-form">
        <h2>Register</h2>

        <form action="http://localhost/Secure-CRUD/public/index.php?action=register" method="POST">
            <div class="form-group position-relative">
                <i class="fas fa-user form-control-icon"></i>
                <input type="text" class="form-control" id="username" name="name" placeholder="Username" required>
            </div>
            <div class="form-group position-relative">
                <i class="fas fa-envelope form-control-icon"></i>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group position-relative">
                <i class="fas fa-envelope form-control-icon"></i>
                <input type="number" class="form-control" id="tele" name="tele" placeholder="Tele No" required>
            </div>

            <div class="form-group position-relative">
                <i class="fas fa-lock form-control-icon"></i>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <i class="fas fa-eye form-control-show-password" id="togglePassword"></i>
            </div>
            <div class="form-group position-relative">
                <i class="fas fa-lock form-control-icon"></i>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                <i class="fas fa-eye form-control-show-password" id="toggleConfirmPassword"></i>
            </div>

            <!-- Error message display -->
            <div class="error-message" id="error-message">Passwords do not match!</div>

            <button type="submit" class="btn btn-primary btn-block">Register</button>
            <div class="text-center">
                 Already have an account?
                <a href="http://localhost/Secure-CRUD/"> Login</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordField = document.getElementById('password');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
        const confirmPasswordField = document.getElementById('confirmPassword');
        const type = confirmPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPasswordField.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

    document.querySelector('form').addEventListener('submit', function (e) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const errorMessage = document.getElementById('error-message');
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Check if passwords match
    if (password !== confirmPassword) {
        e.preventDefault();  // Prevent form submission
        errorMessage.textContent = 'Passwords do not match.';
        errorMessage.style.display = 'block';  // Show the error message

        // Hide the error message after 4 seconds
        setTimeout(function () {
            errorMessage.style.display = 'none';
        }, 6000);  // 4000 milliseconds = 4 seconds
    } 
    // Check if password meets complexity requirements
    else if (!passwordPattern.test(password)) {
        e.preventDefault();  // Prevent form submission
        errorMessage.textContent = 'Password must be at least 8 characters long and include a mix of uppercase letters, lowercase letters, numbers, and symbols.';
        errorMessage.style.display = 'block';  // Show the error message

        // Hide the error message after 4 seconds
        setTimeout(function () {
            errorMessage.style.display = 'none';
        }, 8000);  // 4000 milliseconds = 4 seconds
    } else {
        errorMessage.style.display = 'none';  // Hide the error message if all checks pass
    }
});

</script>

</body>
</html>
