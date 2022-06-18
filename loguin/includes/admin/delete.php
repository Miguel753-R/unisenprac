<?php 
    include("includes/db.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM usuarios WHERE id = '$id'";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Task Removed Seccessfully';
        $_SESSION['message_type'] = 'danger';
        header("Location: admin.php");
    }
?>