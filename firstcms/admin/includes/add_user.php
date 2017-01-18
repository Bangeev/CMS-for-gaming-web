<?php
if(isset($_POST['create_user'])){
   $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_role = $_POST['user_role'];
//    $post_image = $_FILES['image']['name'];
//    $post_image_temp = $_FILES['image']['tmp_name'];
    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
//    $post_date = date('d-m-y');



//    move_uploaded_file($post_image_temp, "../images/$post_image");
//
//
    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";
    $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}') ";
    $create_user_query = mysqli_query($connection, $query);

    comfirmQuery($create_user_query);

    echo "User Created:" . " " . "<a href='users.php'>View Users</a> ";


}

?>





<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
        <label for="post_status">Lastname</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>

    <div class="form-group">
        <select name="user_role" id="">

            <option value="subscriber">Select Options</option>
            <option value="admin">ADMIN</option>
            <option value="subscriber">Subscriber</option>



        </select>
    </div>





<!--    <div class="form-group">-->
<!--        <label for="post_image">Post Image</label>-->
<!--        <input type="file" name="image">-->
<!--    </div>-->

    <div class="form-group">
        <label for="post_tags">Username</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="form-group">
        <label for="post_content">Email</label>
        <input class="form-control" name="user_email" id="" cols="30" rows="10">

    </div>

    <div class="form-group">
        <label for="post_content">Password</label>
        <input type="password" class="form-control" name="user_password" id="" cols="30" rows="10">

    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
    </div>

</form>