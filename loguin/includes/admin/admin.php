<?php
    ob_start();
    session_start();
    if (!isset($_SESSION['usuario'])){
      header('Location: ../../index.html');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href = "https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"  rel = "stylesheet" >
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
      include("includes/db.php");
      include("includes/nav.php");
    ?>
    <?php include("includes/header.php") ?>
<div class="container p-4">
  <div class="row">
            <div class="col-md-4">

                <?php if(isset($_SESSION['message'])){ ?>
                    <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>
                
                <div class="card card-body">
                    <form action="save.php" method="POST">

                        <div class="form-group">
                            <input type="text" name="usuario" class="form-control" 
                            placeholder="Usuario" autofocus>
                        </div>

                        <div class="form-group">
                            <input type="password" name="contraseña" class="form-control" 
                            placeholder="Contraseña" autofocus>
                        </div>

                        <div class="form-group">
                            <input type="text" name="cargo" class="form-control" 
                            placeholder="Cargo" autofocus>
                        </div>

                        <input type="submit" class="btn btn-success btn-block" 
                        name="save" value="GUARDAR">
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <table style="color:white; background-color:navy" class="table table-bordered">
                    <thead style="background-color: black">
                        <th>USUARIO</th>
                        <th>CONTRASEÑA</th>
                        <th>CARGO</th>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM usuarios";
                            $result_tasks = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_array($result_tasks)){ ?>
                                <tr>
                                    <td> <?php echo $row['usuario'] ?> </td>
                                    <td> <?php echo $row['contraseña'] ?> </td>
                                    <td> <?php echo $row['cargo'] ?> </td>

                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>

                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>