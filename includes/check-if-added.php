<?php 
function check_if_added_to_cart($item_id) {
    $user_id = $_SESSION['id']; //We'll get the user_id from the session
    require'common.php'; // connecting to the database

    
    $query = "SELECT * FROM users_items WHERE item_id ='$item_id' AND user_id ='$user_id' AND status='Added to cart'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    

    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}
?>