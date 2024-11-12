<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Calendar Health</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logoR.webp" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<header>
    <div class="inicio">
      <button>
        <a href="home.php"><img src="logoR.webp" alt="logo">Medical Calendar Health</a>
      </button>
    </div>
    <div class="final">
      <button><a href="#">Login</a></button>
      <button><a href="register.php">Register</a></button>
    </div>
</header>
<body>
    <div class="sidebar">
        <ul>
            <button><li><i><a href="servicios.html"><i class="fi fi-rr-book-alt"></i> Servicios</a></i></li></button>
            <button><li><i><a href="medicos.html"><i class="fi fi-rr-users-alt"></i> Medicos</a></i></li></button>
            <button><li><i><a href="cirugias.html"><i class="fi fi-rr-hand-holding-heart"></i> Cirugías</a></i></li></button>
            <button><li><i><a href="citas.html"><i class="fi fi-rr-calendar-lines"></i> Citas</a></i></li></button>
        </ul>
    </div>

    <div class="content">
        

        <div class="main-image">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
              
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="estetoscopio.webp" alt="Los Angeles" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="estetoscopio.webp" alt="Chicago" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="estetoscopio.webp" alt="New York" class="d-block w-100">
                  </div>
                </div>
              
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                  <i class="fi fi-rr-angle-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                  <i class="fi fi-rr-angle-right"></i>
                </button>
              </div>
        
        <div class="welcome-text">
            <h2>Bienvenido</h2>
            <p>Organiza y gestiona tus citas médicas de manera eficiente y sin complicaciones. Nuestra plataforma está diseñada para facilitar la coordinación entre pacientes, médicos y personal de apoyo, brindando una solución integral para la administración de citas y el seguimiento de la información de cada paciente.</p>
        </div>
    </div>

</body>
</html>