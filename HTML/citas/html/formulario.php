<?php
session_start();
if (isset($_GET['nombre_institucion'])) {
    $_SESSION['institucion'] = $_GET['nombre_institucion'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="/citas/css/formulario.css">
    <style>
        .responsive {
            min-width: 20%;
            max-width: 100%;
            height: auto;
        }
        @media (max-width: 35.99375em) {.mantine-visible-from-xs {display: none !important;}}
        @media (min-width: 36em) {.mantine-hidden-from-xs {display: none !important;}}
        @media (max-width: 47.99375em) {.mantine-visible-from-sm {display: none !important;}}
        @media (min-width: 48em) {.mantine-hidden-from-sm {display: none !important;}}
        @media (max-width: 61.99375em) {.mantine-visible-from-md {display: none !important;}}
        @media (min-width: 62em) {.mantine-hidden-from-md {display: none !important;}}
        @media (max-width: 74.99375em) {.mantine-visible-from-lg {display: none !important;}}
        @media (min-width: 75em) {.mantine-hidden-from-lg {display: none !important;}}
        @media (max-width: 87.99375em) {.mantine-visible-from-xl {display: none !important;}}
        @media (min-width: 88em) {.mantine-hidden-from-xl {display: none !important;}}
    </style>
</head>
<body class="responsive">
    <header>
        <div class="cabezero">
            <img src="../img/do.webp" alt="Bandera de República Dominicana">
            <p>Esta es una página web oficial del Gobierno de la República Dominicana.
                <a href="#">Así es como puedes saberlo.</a>
            </p>
        </div>
        <section id="Busqueda">
            <img src="../img/logo-nuevo.webp" alt="Logo Gobierno">
            <div class="barrita">
                <input type="text" placeholder="¿Qué quieres buscar?">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </div>
            </div>
            <div class="cuadro">
                <svg id="cuadricula" width="120" height="120" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0" y="0" width="30" height="30" fill="#003366"/>
                    <rect x="45" y="0" width="30" height="30" fill="#003366"/>
                    <rect x="90" y="0" width="30" height="30" fill="#003366"/>
                    <rect x="0" y="45" width="30" height="30" fill="#003366"/>
                    <rect x="45" y="45" width="30" height="30" fill="#003366"/>
                    <rect x="90" y="45" width="30" height="30" fill="#003366"/>
                    <rect x="0" y="90" width="30" height="30" fill="#003366"/>
                    <rect x="45" y="90" width="30" height="30" fill="#003366"/>
                    <rect x="90" y="90" width="30" height="30" fill="#003366"/>
                </svg>
            </div>
        </section>
        <nav>
            <a href="../html/inicio.html">Inicio</a>
            <a href="https://ogtic.gob.do/categoria/servicios">Sobre nosotros</a>
            <select name="servicio" id="servicio" onchange="redirigir()">
                <option value="../html/inicio.html">Servicio</option>
                <option value="../html/formulario.html">Agenda</option>
            </select>
            <script src="../js/nav.js"></script>
            <a href="https://ogtic.gob.do/firma-digital">Firma digital</a>
            <a href="https://ogtic.gob.do/centro-de-contacto-gubernamental">Atención ciudadana</a>
            <a href="https://ogtic.gob.do/categoria/normativas">Normativas</a>
            <a href="https://ogtic.gob.do/data-center">Centro de datos</a>
            <a href="https://ogtic.gob.do/transparencia/inicio">Transparencia</a>
            <a href="https://ogtic.gob.do/categoria/noticias">Sala de prensa</a>
            <a href="https://ogtic.gob.do/buzon-de-sugerencias-2">Buzón Sugerencias</a>
            <a href="https://ogtic.gob.do/contacto">Contacto</a>
        </nav>
    </header>
    <main>
        <div class="background-container">
            <div class="overlay"></div>
        </div>
        <section id="registro" class="form-container">
            <div class="h1">
                <h1>Formulario</h1>
            </div>
            <div class="registro">
                <form method="post" action="../php/guardar_datos_institucion.php">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellidos:</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" id="correo" name="correo" placeholder="Correo" required>
                    </div>
                    <div class="form-group">
                        <label for="asunto">Asunto:</label>
                        <select id="asunto" name="asunto" required>
                            <option value="">Selecciona un servicio</option>
                            <option value="Dirección General de Pasaportes">Dirección General de Pasaportes</option>
                            <option value="Gabinete de Política Social">Gabinete de Política Social</option>
                            <option value="Junta Central Electoral">Junta Central Electoral</option>
                            <option value="Dirección General de Migración">Dirección General de Migración</option>
                            <option value="Instituto Nacional de Tránsito y Transporte Terrestre (INTRANT)">Instituto Nacional de Tránsito y Transporte Terrestre (INTRANT)</option>
                            <option value="Tesorería de la Seguridad Social (TSS)">Tesorería de la Seguridad Social (TSS)</option>
                            <option value="Seguro Nacional de Salud (SeNaSa)">Seguro Nacional de Salud (SeNaSa)</option>
                            <option value="Instituto Nacional de Protección de los Derechos del Consumidor (Pro Consumidor)">Instituto Nacional de Protección de los Derechos del Consumidor (Pro Consumidor)</option>
                            <option value="Ministerio de Trabajo">Ministerio de Trabajo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cédula:</label>
                        <input type="text" id="cedula" name="cedula" placeholder="Cédula" required>
                    </div>
                    <div class="form-group">
                        <label for="dia">Día:</label>
                        <select name="dia" id="dia" required>
                            <option value="">Selecciona un día</option>
                            <option value="lunes">Lunes</option>
                            <option value="martes">Martes</option>
                            <option value="miercoles">Miércoles</option>
                            <option value="jueves">Jueves</option>
                            <option value="viernes">Viernes</option>
                            <option value="sabado">Sábado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="hora">Hora:</label>
                        <select name="hora" id="hora" required>
                            <option value="">Selecciona la hora</option>
                            <option value="8am">8:00a.m.</option>
                            <option value="9am">9:00a.m.</option>
                            <option value="10am">10:00a.m.</option>
                            <option value="11am">11:00a.m.</option>
                            <option value="12pm">12:00p.m.</option>
                            <option value="1pm">1:00p.m.</option>
                            <option value="2pm">2:00p.m.</option>
                            <option value="3pm">3:00p.m.</option>
                            <option value="4pm">4:00p.m.</option>
                            <option value="5pm">5:00p.m.</option>
                            <option value="6pm">6:00p.m.</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lugar">Lugar:</label>
                        <select name="lugar" id="lugar" required>
                            <option value="Punto GOB Megacentro">Punto GOB Megacentro</option>
                            <option value="Punto GOB Sambil">Punto GOB Sambil</option>
                            <option value="Punto GOB Santo Domingo Este">Punto GOB Santo Domingo Este</option>
                            <option value="Punto GOB Santo Domingo Oeste">Punto GOB Santo Domingo Oeste</option>
                            <option value="Punto GOB Santiago">Punto GOB Santiago</option>
                            <option value="Punto GOB Santo Domingo Norte">Punto GOB Santo Domingo Norte</option>
                            <option value="Punto GOB San Cristóbal">Punto GOB San Cristóbal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn_publicar">Registrarse</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer-container">
        <div class="footer-top">
            <div class="footer-info">
                <div>
                    <h4>¡CONÓCENOS!</h4>
                    <p>Oficina Gubernamental de Tecnologías de la Información y Comunicaciones (OGTIC) y el Gabinete de Innovación</p>
                    <h4>BÚSCANOS</h4>
                    <p>Av. Rómulo Betancourt #311, Edificio Corporativo Vista 311, Santo Domingo, R.D.</p>
                </div>
                <div class="info">
                    <h4>CONTÁCTANOS</h4>
                    <p>Tel: (809)-286-1009 <br> Fax: (809)-732-5465 <br> info@ogtic.gob.do</p>
                    <div>
                        <h4>INFÓRMATE</h4>
                        <p><a href="#">Términos de Uso</a></p>
                        <p><a href="#">Políticas de Privacidad</a></p>
                        <p><a href="#">Preguntas Frecuentes</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="footer-bottom">
                <p>© 2025 Todos los Derechos Reservados. Desarrollado por <span class="ogtic"></span></p>
                <div class="social-icons">
                    <span>SÍGUENOS</span>
                    <ul class="wrapper">
                        <li class="icon facebook">
                            <span class="tooltip">Facebook</span>
                            <svg viewBox="0 0 320 512" height="1.2em" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                            </svg>
                        </li>
                        <li class="icon twitter">
                            <span class="tooltip">Twitter</span>
                            <svg height="1.8em" fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" class="twitter">
                                <path d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path>
                            </svg>
                        </li>
                        <li class="icon instagram">
                            <span class="tooltip">Instagram</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145