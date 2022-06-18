<?php 
    include("includes/db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT* FROM usuarios WHERE id = '$id'";
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $usuario = $row['usuario'];
            $contraseña = $row['contraseña'];
            $cargo = $row['cargo'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $cargo = $_POST['cargo'];

        $query = "UPDATE usuarios SET usuario = '$usuario', contraseña = '$contraseña', cargo = '$cargo' WHERE id = '$id'";
        mysqli_query($connection, $query);

        $_SESSION['message'] = 'Task Update Successfully';
        $_SESSION['message_type'] = 'warning';

        header("Location: admin.php");
    }

?>

<link rel="stylesheet" href="../../../css/style.css">

<body style="background-color:black">
    

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-goup">
                        <input type="text" name="usuario" value="<?php echo $usuario; ?>" class="form-control" placeholder="Cambiar usuario">
                    </div>
                    <div class="form-goup">
                        <input type="password" name="contraseña" value="<?php echo $contraseña; ?>" class="form-control" placeholder="Cambiar contraseña">
                    </div>
                    <div class="form-goup">
                        <input type="text" name="cargo" value="<?php echo $cargo; ?>" class="form-control" placeholder="Cambiar cargo">
                    </div>
                    <button class="btn btn-success" name="update">
                        CONFIRMAR
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>
</body>