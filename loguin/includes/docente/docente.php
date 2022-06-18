<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">

    <title>Hello, world!</title>
  </head>
  <body>

    <?php 
      include("includes/db.php");   
      include("includes/nav.php");
    ?>

    <link rel="stylesheet" href="includes/style.css">


    <table>
        <tr>
            <th colspan="3"><h1>GESTION DE USUARIOS</h1></th>
        </tr>
        <tr>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
            <th>CARGO</th>
        </tr>

    <?php 
        $query = "SELECT * FROM usuarios";
        $resultado = mysqli_query($connection, $query);

        while($mostrar = mysqli_fetch_array($resultado)){ ?>
            <tr>
                <td> <?php echo $mostrar['usuario'] ?> </td>
                <td> <?php echo $mostrar['contraseña'] ?> </td>
                <td> <?php echo $mostrar['cargo'] ?> </td>
            </tr>


    <?php
        } 
    ?>

    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>