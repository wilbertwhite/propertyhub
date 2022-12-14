<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Log In</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background: #e8e1cc; color: white;">
    <div class="card shadow" style="text-align:center; margin-top: 30vh;">
        <div class="card-body">
            <h4 class="card-title">Log In</h4>
            <?php
            if (isset($_SESSION["account_success"])) {
                if ($_SESSION["account_success"] == true) {
                    echo ("<div>Account successfully created!</div>");
                }
            }
            ?>
            <form method="post" action="https://codd.cs.gsu.edu/~wwhite16/WP/P/3/login.php">
                <div>
                    <input style="background-color: #333; color: white; margin:auto; width: 20vw;" class="form-control" name="username" type="text" placeholder="Username" />
                </div>
                <div>
                    <input style="background-color: #333; color: white; margin:auto; width: 20vw;" class="form-control" name="password" type="password" placeholder="Password" />
                </div>
                <div>
                    <button class="form-control btn btn-primary" type="submit" id="login" name="login">Log In</button>
                </div>
            </form>
            <div class="card-link">
                Don't have an account? <a href="signupindex.php">Sign Up</a>
            </div>
        </div>
    </div>
</body>

</html>