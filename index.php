<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "bosstrap/link.php"; ?>   
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <?php include "nav/navBosstrap.php"; ?>  

    <div class="card-group" style="background-color:black ; margin-top: 50px ; margin-left:20px ; margin-right:20px">
        <div class="card" style="background-color:black">
            <img src="carreras/css/IMG/psicologia.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="background-color:black">
                <h5 class="card-title">PSICOLOGIA</h5>
                <p class="card-text">Estudiar Derecho es estudiar una carrera universitaria que te servirá, además de para conocer el entorno jurídico empresarial, para descubrir también el funcionamiento de la sociedad actual. Una carrera gratificante que ofrece diversas salidas profesionales, que te ayudarán a integrarte en el entorno laboral haciendo lo que más te gusta.</p>
            </div>
            <div class="card-footer" style="background-color:black">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card" style="background-color:black">
            <img src="carreras/css/IMG/derecho.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="background-color:black">
                <h5 class="card-title">DERECHO</h5>
                <p class="card-text">La carrera de Psicología es una de las licenciaturas más populares en México. Actualmente, se encuentra en el octavo lugar de las carreras más demandadas en universidades públicas y cuenta con una matrícula de 201,044 estudiantes a nivel nacional.

                                    Sin embargo, antes de que decidas formar parte de esta comunidad profesional, es necesario que conozcas en qué consiste, qué universidades la imparten y cuál es el mercado laboral. Por eso, en este artículo te daremos toda la información que necesitas.</p>
            </div>
            <div class="card-footer" style="background-color:black">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card" style="background-color:black">
            <img src="carreras/css/IMG/sistema.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="background-color:black">
                <h5 class="card-title">INGENIERIA DE SISTEMA</h5>
                <p class="card-text">La Ingeniería de Sistemas es una carrera universitaria que básicamente se encarga del diseño, la programación y la implementación de distintos sistemas informáticos, así como del mantenimiento de los mismos. Esta rama de la ingeniería no se ocupa de productos tangibles que se puedan apreciar físicamente, sino que trabaja con productos lógicos-virtuales.

                                    Por ello, esta carrera hace uso de las nociones matemáticas junto a la lógica y el análisis. Con esto se logra examinar, filtrar y presentar tanto redes como datos virtuales para optimizar un trabajo ya existente.

                                    Además, la persona o empresa puede obtener un beneficio por medio de distintos métodos o canales como, por ejemplo: aumentar y potenciar el rendimiento de la compañía. También es muy útil para mantener un mejor orden dentro de la misma y permitir que todo fluya correctamente.</p>
            </div>
            <div class="card-footer" style="background-color:black">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>

    <div style="margin-left: 20px ; margin-top: 20px">
    <h1>CAMPUS</h1>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-left:20px ; margin-right:50px">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="css/IMG/1.PNG" class="d-block w-50" alt="..." width="350" height="550">
            </div>
            <div class="carousel-item">
                <img src="css/IMG/2.PNG" class="d-block w-50" alt="..." width="350" height="550">
            </div>
            <div class="carousel-item">
                <img src="css/IMG/3.PNG" class="d-block w-50" alt="..." width="350" height="550">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <?php include "bosstrap/script.php"; ?>

</body>
</html>