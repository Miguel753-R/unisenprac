<?php

include("includes/db.php");

    if(isset($_POST['save'])){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $cargo = $_POST['cargo'];
 
        $query = "INSERT INTO usuarios(usuario, contraseña, cargo) VALUES ('$usuario','$contraseña', '$cargo')";
        $result = mysqli_query($connection, $query);
        if(!$result){
                die("Query failed");
        }

        $_SESSION['message'] = 'Task Saved succesfully';
        $_SESSION['message_type'] = 'success';


        header("Location: admin.php");
    }

?>