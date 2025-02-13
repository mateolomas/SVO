<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Votacion Estudiantil Yachay Tech - SVE </title>
    <link rel="stylesheet" type="text/css" href="docs/styles/styleprincipal.css">
    
    <script src="docs/scripts/script.js"></script>
</head>
<body>
    <header>
        <img class="logoEsc" src="docs/media/yachay_verde.png" >
        <img class="logoEsc" src="docs/media/escuela_ibio.png" >
        <img class="logoEsc" src="docs/media/escuela_ifisica.png" >
        <img class="logoEsc" src="docs/media/escuela_igeo.png" >
        <img class="logoEsc" src="docs/media/escuela_imath.png" >
        <img class="logoEsc" src="docs/media/escuela_iquim.png" >
    </header>
    
    
        <main class="contenedor__todo">

          

            <div id="welcome">    
                Bienvenido al Sistema de Votacion Estudiantil Yachay Tech 
            </div>

         
        
            <div id="procced">
                
                <div class="botones">
                <span>Selecciona para continuar...</span><br><br>
                <?php if (isset($_GET['error'])) { ?>
                    <p style="color: red; font-size: 30px; font-weight: bold"type='text' class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <button class="butonprincipal" id="loginb" onclick="login()" >Iniciar Sesion</button>
                <!--<button class="butonprincipal" id="signb" onclick="registrarse()">Actualizar Datos</button>-->
                </div>

                
            </div>
        
    
        
        
        <div id="contenedor__login__register">
            <form action="login.php" method="post">
                <div id="Formulario_login"> 
                <h2>Iniciar sesion</h2>

                
              

                <input type="text" placeholder="Correo Electronico" name="uname" id="usuario">
                <input type="password" placeholder="Contraseña" name="password" id="passwd">
                <!--<input id = "entrar" type="submit" value="Ingresar">-->
                <button id="entrar" type="submit">Entrar</button>
                <button type="button" onclick="back()">Regresar</button>
                </div>   
                    
            </form>
            
           
     

            </div>

           
        </main>

      <footer >
          <div class="footer_container">
            Contact
        <nav id="navcont">
            <ul>
                <li><a href="http://facebook.com">Facebbok</a></li>
                <li><a href="http://twiter.com">Twitter</a></li>
                <li><a href="http://instagram.com">Instagram</a></li>
                
                
            
            </ul>

        </nav>

          </div>
        
    </footer>



 
    
</body>
</html>