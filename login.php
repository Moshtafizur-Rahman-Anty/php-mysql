<?php

require 'includes/url.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == 'Moshtafizur' && $_POST['password'] == 'iamravs100') {
        session_regenerate_id(true);
        $_SESSION['is_logged_in'] = true;
        redirect('/php');
    } else {
        $error = "Login incorrect";
    }
}

require 'includes/header.php';

?>

<h2>Login</h2>

<?php if (!empty($error)) {?>

    <p><?php echo $error; ?></p>

<?php }?>

<form method="post">
    <div>
       <label for="username">Username</label>
       <input name="username" id="username">
    </div>

    <div>
       <label for="password">Password</label>
       <input name="password" id="password">
    </div>
    <button>Log In</button>
</form>

<?php require 'includes/footer.php'?>