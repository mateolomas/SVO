<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/styles_votarya.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b41f4b4ea.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script rel="script" src="../scripts/jquery-3.6.0.min.js"></script>
    <script rel="script" src="../scripts/script.js"></script>
    <script>
        function ShowAlert(){
            swal("Procediendo a votar", "Tu voto es secreto y confidencial, no des tus contraseñas a nadie, ni reveles tu voto. Porfavor, verifica tus datos en el siguiente menu, si hay algo incorrecto no dudes en contactar lo mas rapido posible a Registros Academicos");
        }
    </script>
</head>
<body id="main" onload="ShowAlert()">
    <header>
        <div id="whiteheader">
            <div><input id="search" value="Necesitas ayuda?" style="font-weight: lighter; color: rgba(128, 128, 128, 0.712); width: 30%; border: none; border-radius: 15px; padding: 8px; background-color: rgba(128, 128, 128, 0.194)"></div>

        </div>
        
    </header>
    
        <div id="sidebar">
            <ul>
              <li><div><img id="sidebar-header" src="../media/yachay_verde.png"></div></li>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="candidatos.html">Candidatos</a></li>
              <li><a href="votarya.php">Votar Ya</a></li>
              <li><a href="estadisticas.html">Estadisticas</a></li>
              <li><a href="certificado.html">Certificado de Votacion</a></li>
              <li><div id="user">
                <span>Mateo Lomas</span>
                <span>Estudiante Regular</span>
                <img id="imguser" src="../media/userdefault.png">
            </div></li> 
            </ul>
        
            <div id="sidebar-btn" onclick='toggleNav()'>
              <span></span>
              <span></span>
              <span></span>
            </div>

            
        
          </div>
          
        <div id="iconsidebar">
            <ul>
                
                <li><span></span></li>
                <li><span></span></li>
                
                
                <br>
                
                <li><a href=""><i class="fas fa-home"></i></a></li>
                
                <li><a href=""><i class="fas fa-user-friends"></i></a></li>
                <li><a href=""><i class="fas fa-vote-yea"></i></a></li>
                <li><a href=""><i class="fas fa-poll"></i></a></li>
                <li><a href=""><i class="far fa-id-card"></i></a></li>
                 
              </ul>

        </div>
       
            
        
    

    <div id="containerVoto">
        <div id="verificacion" >
            <!--Luego se cambia con los datos de la database-->
    <?php 
    include 'conexion_a_bd.php';
    $ans = $conn->query("SELECT * from infoestud inner join nacimiento_direccion where id_est_ced='1004295729'");
    $info = $ans->fetch_array();

    echo "<h1>Informacion del Estudiante</h1>
            <label>Cedula</label>
            <span>".$info["id_est_ced"]."</span>
            <label>Nombres</label>
            <span>".$info["nombres"]."</span>
            <span>Apellidos</span>
            <span>".$info["apellidos"]."</span>
            <span>Nacionalidad</span>
            <span>".$info["nacionalidad"]."</span>
            <span>Etnia</span>
            <span>".$info["etnia"]."</span>
            <span>Estado Civil</span>
            <span>".$info["estado_civil"]."</span>
            <span>Sexo</span>
            <span>".$info["sexo"]."</span>
            <span>Genero</span>
            <span>".$info["genero"]."</span>
            <h2>Lugar de Nacimiento</h2>

         
            <span>Pais de Nacimiento</span>
            <span>".$info["pais"]."</span>
            
            <span>Provincia</span>
            <span>".$info["provincia"]."</span>

            <span>Canton</span>
            <span>".$info["canton"]."</span>
            

            <span>Fecha de Nacimiento</span>
            <span>".$info["fnac"]."</span>

            <h2>Direccion Domiciliar</h2>

            <span>Calle1</span>
            <span>".$info["calle1"]."</span>
            <span>Calle2</span>
            <span>".$info["calle2"]."</span>
            
            <span>Referencia</span>
            <span>".$info["referencia"]."</span>"

        
            ?>

                 
            <button id="buttonVoto">Proceder con el Voto</button>    

        </div>
        

    </div>
    
</body>
</html>