<?php
    include('includes/db.php');

    if(!empty($_POST['usuario']) && !(empty($_POST['contraseña']))){

        $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuario;

    $consulta="SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña'";
    $resultado=mysqli_query($connection,$consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        while ($row = mysqli_fetch_assoc($resultado)){
            $id_user = $row['id_usuario'];
            $usu = $row['usuario'];
            $contra = $row['contraseña'];
            $carg = $row['cargo'];
        }

        if($carg == "Administrador"){
            header("location:includes/admin/admin.php");
        }else if($carg == "Docente"){
            header("location:includes/docente/docente.php");
        }else{
            include("index.html");
            ?>
            <h1 class="bad">USUARIO NO ACEPTADO</h1>
            <?php
        }
    }else{
?>
        <?php
            include("index.html")
        ?>
        <h1 class="bad">ERROR EN LA AUTENTICACION</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($connection);
}else{
    include("index.html")
    ?>
    <h1 class="bad">hay espacion bacios</h1>
    <?php
}

        ?>

    

    