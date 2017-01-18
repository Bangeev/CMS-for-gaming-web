<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>
<!-- Navigation -->
<?php

if (isset($_POST['submit'])){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($username) && !empty($email) && !empty($password)) {


    $username = mysqli_real_escape_string($connection, $username);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT randSalt FROM users";
    $select_randsalt_query = mysqli_query($connection, $query);

    if (!$select_randsalt_query) {
        die("Query Failed" . mysqli_error($connection));
    }

$row = mysqli_fetch_array($select_randsalt_query) ;

        $salt = $row['randSalt'];

        $password = crypt($password, $salt);


        $query = "INSERT INTO users (username, user_email, user_password, user_role) ";
        $query .= "VALUES('{$username}','{$email}','{$password}','subscriber' )";

        $registe_user_query = mysqli_query($connection, $query);
        if (!$registe_user_query) {
            die("QUERY FAILED" . mysqli_error($connection) . ' ' . mysqli_errno($connection));
        }
        $message = "Your Registration has been submited";




}else {
    $message = "Fields cannot be empty";
}



}else {
    $message = "";
}

















?>









<?php include "includes/navigation.php" ?>
<!-- Page Content -->


<div class="container">
    <section id="login">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                    <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <h6 class="text-center"><?php echo $message; ?></h6>
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                </div>
            </div>
        </div>
</div>
    </section>


<hr>
<?php include "includes/footer.php"?>
