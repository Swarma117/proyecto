<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INAOE_Menu</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="https://lh3.googleusercontent.com/d/1ZF22k-WABPU-LQOK_cGsKRBAeFu4UURz">
    <style>  
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI';
        }
        body{
            height: 100vh;
            width: 100%;
            background: #ffffff;
            overflow-x: hidden; /* Evita la barra de desplazamiento horizontal */
        }
        .header{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 3%;
            background: transparent;
            display: flex;
            justify-content: space-between; /* Espacio entre elementos */
            align-items: center;
            z-index: 100;
            /* Estilos de la barra de menú */
            background-color: rgba(0, 0, 0, 0.97); /* Color azul con transparencia */
            box-shadow: 0 2px 4px rgba(0 0 0 / 72%); /* Sombra suave */
            border-radius: 10px; /* Bordes redondeados */
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 50px; /* Tamaño del logo */
            margin-right: 10px;
        }
        .logo h1 {
            font-size: 20px;
            color: #ffffff;
        }
        .navbar {
            display: flex;
            justify-content: space-around; /* Espacio uniformemente distribuido */
            align-items: center;
            width: 50%; /* Ajusta el ancho del menú según sea necesario */
        }
        .navbar a{
            position: relative;
            font-size: 16px;
            color: #ffffff; /* Color de texto blanco */
            text-decoration: none;
        }
        .navbar a::after{
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 2px;
            background: #021bfa;
            bottom: -5px;
            border-radius: 5px;
            transform: translateY(10px);
            opacity: 0;
            transition: .5s ease;
        }
        .navbar a:hover:after{
            transform: translateY(0);
            opacity: 1;
        }
        .section {
            padding: 100px 0;
            text-align: center; /* Centrar contenido */
            font-style: italic; /* Texto en cursiva */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Sombra para efecto 3D */
            display: none; /* Oculta las secciones por defecto */
        }
        .chat-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007afc;
            color: rgb(255, 255, 255);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        /* Dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
            padding: 10px;
        }
        .dropdown-content a {
            color: black;
            padding: 8px 12px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: #ddd;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>
<body>
    <!-- HEADER -->
   <header class="header">
    <div class="logo">
        <img src="https://lh3.googleusercontent.com/d/1ZF22k-WABPU-LQOK_cGsKRBAeFu4UURz" alt="Logo"> <!-- Reemplaza URL_DEL_LOGO con la URL de tu logo -->
        <h1>Laboratorio de Iluminación y Eficiencia Energética</h1>
    </div>
    <nav class="navbar">
        <a href="#" onclick="showSection('cotizar')"><i class='bx bx-cart'></i> Cotizar servicios</a>
        <a href="#" onclick="showSection('solicitudes')"><i class='bx bx-list-check'></i> Solicitudes</a>
       <!-- <a href="#" onclick="showSection('historial')"><i class='bx bx-history'></i> Historial</a> -->
        <!-- <a href="#" onclick="showSection('facturas')"><i class='bx bx-receipt'></i> Facturas</a> -->
        <!-- Dropdown -->
        <div class="dropdown">
            <a href="#"><i class='bx bx-user'></i> Usuario <i class="bx bx-chevron-down"></i></a>
            <div class="dropdown-content">
                <a href="#"><i class='bx bx-user'></i> Nombre de usuario</a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=lie@inaoep.mx&su=Queja"><i class='bx bx-chat'></i> Quejas</a>
                <a href="#"><i class='bx bx-log-out'></i> Cerrar sesión</a>
            </div>
        </div>
    </nav>
   </header>

   <!-- Secciones de información -->
   <section id="cotizar" class="section">
       <h2>Cotizar servicios</h2>
       <!-- Contenido para cotizar servicios -->
   </section>
   <section id="solicitudes" class="section">
       <h2>Solicitudes</h2>
       <!-- Contenido para solicitudes -->
   </section>
   <!-- <section id="historial" class="section"> 
       <h2>Historial</h2> -->
       <!-- Contenido para historial -->
  <!-- </section> -->
   <!-- <section id="facturas" class="section"> 
       <h2>Facturas</h2> -->
       <!-- Contenido para facturas -->
   <!-- </section> -->

   <!-- Agrega más secciones según sea necesario -->

   <!-- Chat de quejas flotante -->
   <div class="chat-icon" onclick="openMailTo()">
       <i class='bx bx-chat'></i>
   </div>

   <script>
       function openMailTo() {
           window.location.href = "https://mail.google.com/mail/?view=cm&fs=1&to=lie@inaoep.mx&su=Queja";
       }
       function showSection(sectionId) {
           // Oculta todas las secciones
           var sections = document.querySelectorAll('.section');
           sections.forEach(function(section) {
               section.style.display = 'none';
           });
           // Muestra la sección seleccionada
           var selectedSection = document.getElementById(sectionId);
           selectedSection.style.display = 'block';
       }
   </script>
</body>
</html>
