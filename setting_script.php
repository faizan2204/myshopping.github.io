<?php
	require './includes/common.php';
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }
    $old_pass = $_POST['old_password'];
    $old_pass = mysqli_real_escape_string($conn, $old_pass);
    $old_pass = MD5($old_pass);
    
    $new_pass = $_POST['new_password'];
    $new_pass = mysqli_real_escape_string($conn, $new_pass);
    $new_pass = MD5($new_pass);
    
    $rep_pass = $_POST['retype_new_password'];
    $rep_pass = mysqli_real_escape_string($conn, $rep_pass);
    $rep_pass = MD5($rep_pass);
    
    $query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
    $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    
    $orig_pass = $row['password'];
    
    //check old password and password taken from db
    if ($new_pass != $rep_pass) {
        header('location: settings.php?error=The two passwords don\'t match.');
    } else {
        if ($old_pass == $orig_pass) {
            $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
            mysqli_query($conn, $query) or die($mysqli_error($conn));
            header('location: settings.php?error=Password Updated Successfully');
        } else
            header('location: settings.php?error=Wrong Old Password.');
    }
?>    