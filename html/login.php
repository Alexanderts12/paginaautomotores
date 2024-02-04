<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
  <a href="index.php" class="navbar-brand" style="font-size: 25px; font-weight: bold;">
  <img src="../assets/img/logo.jpg" alt= "Logo" style="height:28px;"> Automotores
    <span class="text-primary">Reina de Agua Santa</span>
  </a>
</div>

    </nav>
  </header>

  <main>
  <div>
    <form action="database.php"method="POST">
    <div class="d-flex justify-content-center align-items-center vh-100" style="background-color: #B0E0E6;">
      
        <div
          class="bg-white p-5 rounded-5 text-secondary shadow"
          style="width: 25rem"
        >
          <div class="d-flex justify-content-center">
            <img
              src="../assets/img/login/acceso.png"
              alt="login-icon"
              style="height: 7rem"
            />
          </div>
        
          <div class="text-center fs-1 fw-bold">Bienvenido ¿Comó estas?</div>
          <div class="input-group mt-4">
          
    
            <input
              class="form-control bg-light"
              type="text" name="Usuario"
              placeholder="Usuario"
            />
          </div>
          <div class="input-group mt-1">
           
    
    
            <input
              class="form-control bg-light"
              type="password" name="Contraseña"
              placeholder="contraseña"
            />
          </div>
         
        
          <div class="btn text-white w-100 mt-4 fw-semibold shadow-sm">
            <button>  Iniciar Sesion</button>
          </div>

         
        </form>
      </div>
  </main>

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 py-2">
          <p id="copypaste"> 2024 <a href="">Alex</a>.</p>
        </div>
       
      </div>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->
</body>
</html>
