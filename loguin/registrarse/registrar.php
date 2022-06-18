<?php

    if(!empty($_POST['usuario']) && !empty($_POST['cargo']) && !empty($_POST['contraseña']) && !empty($_POST['confcontraseña'])){
        if($_POST['cargo'] == "Docente" || $_POST['cargo'] == "Administrador"){

            if($_POST['contraseña'] == $_POST['confcontraseña']){
                
                include('includes/db.php');

                $usuario = $_POST['usuario'];
                $cargo = $_POST['cargo'];
                $contraseña = $_POST['contraseña'];
                
                $consulta = "INSERT INTO usuarios (id_usuario, usuario, contraseña, cargo) VALUES ('NULL', '$usuario', '$contraseña', '$cargo')";
                $resultado = mysqli_query($connection,$consulta);
            
                if(!$resultado){
                    die("Registro fallido");
                }
                header("Location: ../index.html");
                mysqli_free_result($resultado);
                mysqli_close($connection);
                    ?>
                    <?php

            }else{
                include("index.html");
                ?>
                <h1 class="bad">LAS CONTRASEÑAS NO COINCIDEN</h1>
                <?php
                
            }

        }else{
            include("index.html");
            ?>
            <h1 class="bad">CARGO NO ACEPTADO</h1>
            <?php
        }
        
            

    }else{
        include("index.html");
        ?>
        <h1 class="bad">DATOS ERRONES</h1>
        <?php
    }
?>
