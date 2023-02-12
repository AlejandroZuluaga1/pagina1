<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/heart-pulse-fill.svg">
    <link rel="stylesheet" href="styles.css">
    <script defer src="js/app.js"></script>
    
    <title>Medico-Online</title>
</head>
<body>

    <header class="header">

            <div class="icon">
                <img src="img/icon.png" alt="icon" width="50px" height="50px">
            </div>

            <button class="button">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
            </button>

            <nav class="navbar">
                <ul class="ul">
                    <li class="li">
                        <a href="#main" class="a">Inicio</a></li>
                    <li class="li">
                        <a href="#section1" class="a">Nosotros</a></li>
                    <li class="li">
                        <a href="#section2" class="a">Medicos</a></li>
                    <li class="li">
                        <a href="#section3" class="a">Contacto</a></li>
                    <li class="li"><a href="CerrarSesion.php" class="a">Cerrar sesion</a></li>    
                        
                </ul>
            </nav>

    </header>

    <main id="main">

        <section id="section1">

            <div class="container">
                <div class="chica"></div>
                <div class="text">
                    <h1>Medico online</h1>
                    <h2><span class="color-text">Nesesitas un medico? </span></h2>
                    <p>Agenda hoy mismo una consulta médica general. En Consultorio y online ¡Pide tu cita ahora!</p>
                </div>
            </div>

        </section>

        <section id="section2">

            <div class="text">
                <h2> <span class="color-text">Doctores</span></h2>
            </div>

            <div class="container">
                <div class="cards">

                    <div class="valor">
                        <p>Valor de la consulta : $50.000</p>
                    </div>

                     <div class="doctor1"></div>

                     <div class="datos">
                        <p>Control Hipertensión Arterial</p>
                        <p>Atención Integral en Salud</p>
                     </div>                

                     <div class="horarios">
                        <a href="">7:00</a>
                        <a href="">7:30</a>
                        <a href="">8:00</a>
                     </div>
                </div>

                <div class="cards">

                    <div class="valor">
                        <p>Valor de la consulta : $45.000</p>
                    </div>

                    <div class="doctor2"></div>

                    <div class="datos">
                        <p>Diabetes</p>
                        <p>Covid 19</p>
                    </div>

                    <div class="horarios">
                        <a href="">16:20</a>
                        <a href="">17:00</a>
                        <a href="">17:30</a>
                    </div>
                </div>

                <div class="cards">

                    <div class="valor">
                        <p>Valor de la consulta : $60.000</p>
                    </div>

                    <div class="doctor3"></div>

                    <div class="datos">
                        <p>Friebre</p>
                        <p>Resfriado</p>
                    </div>

                    <div class="horarios">
                        <a href="">9:30</a>
                        <a href="">10:00</a>
                        <a href="">10:30</a>
                    </div>
                </div>
            </div>

        </section>

        <section id="section3">

            <div class="container">

                <form action="" method="POST" class="formulario">
                    <h2 class="titulo">Contacto</h2>

                    <div class="padre">

                        <div class="nombre_completo">
                            <label placeholder="Nombre completo" for="nombre_completo" >Nombre completo</label>
                            <input type="text" name="nombre_completo">

                        </div>
        
                        <div>
                            <label for="usuario">Correo</label>
                            <input type="email" name="usuario">
                        </div>

                        <div>
                            <label for="clave">Mensaje</label>
                            <input type="text" name="clave" style="height: 50px;">
                        </div>

                        <div class="cuenta">
                            <input class="button" type="submit" value="--Enviar--" name="registro">
                            
                        </div>

                    </div>

                </form>

            </div>  

        </section>

    </main>

    <footer class="footer">

    </footer>
</body>
</html>