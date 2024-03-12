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
    
    }
    .header{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 25px 3%;
        background: transparent;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
        /* Estilos de la barra de menú */
        background-color: rgba(0 0 0); /* Color azul con transparencia */
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
            font-size: 17px;
            color: #ffffff;
        }

    
    .navbar a{
        position: relative;
        font-size: 16px;
        color: #ffffff; /* Color de texto blanco */
        margin-right: 30px;
        text-decoration: none;
    }
    .navbar a::after{
        content: "";
        position: absolute;
        left: 0;
        width: 100%;
        height: 2px;
        background: #0011ff;
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

    .search-bar{
        width: 150px;
        height: 55px;
        background-color: rgba(255, 255, 255, 0.8); /* Color blanco con transparencia */
        border: 2px solid #ffffff; /* Borde blanco */
        border-radius: 6px;
        display: flex;
        align-items: center;
        padding: 0 10px; /* Ajuste del padding */
    }

    .search-bar input{
        width: 100%;
        background-color: transparent;
        border: none;
        outline: none;
        color: #040404;
        font-size: 16px;
        padding-left: 10px;
    }
    .search-bar button{
        width: 40px;
        height: 100%;
        background: transparent;
        outline: none;
        border: none;
        color: #000000;
        cursor: pointer;
    }

    .search-bar input::placeholder{
        color: #040404;
    }

    .search-bar button i{
        font-size: 22px;
    }

    .section {
        padding: 150px 0 100px; /* Ajusta el espacio superior e inferior */
        text-align: center; /* Centrar contenido */
        font-style: italic; /* Texto en cursiva */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Sombra para efecto 3D */
    }


    /**/
    .search-bar button{
        width: 40px;
        height: 100%;
        background: transparent;
        outline: none;
        border: none;
        color: #000000;
        cursor: pointer;
    }
    .search-bar input::placeholder{
        color: #040404;
    }
    .search-bar button i{
        font-size: 22px;
    }
    .container{
        position: absolute;
        left: 50%;
        top: 53%;
        transform: translate(-50%,-50%);
        width: 75%;
        height: 550px;
        margin-top: 20px;
        background: url(Fondo_amarillo.jpg) no-repeat;
        background-position: center;
        background-size:cover ;
        border-radius: 20px;
        overflow: hidden;
        
    }
    .item{
        position: absolute;
        top: 0;
        left: 0;
        width: 58%;
        height: 100%;
        color: #070707;
        background: transparent;
        padding: 80px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        


    }
    .item .logo{
        color: #050505;
        font-size: 30px;

    }
    .text-item h2{
        font-size: 40px;
        line-height: 1;
    }
    .text-item p{
        font-size: 16px;
        margin: 20px 0;
    }
    .social-icon a i{
        color: #070707;
        font-size: 24px;
        margin-left: 10px;
        cursor: pointer;
        transition: .5s ease;
    }
    .social-icon a:hover i{
        transform: scale(1.2);
    }

    .btn{
        background: #000000;
        width: 100%;
        height: 45px;
        outline: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background: #0d9ea3;
        font-size: 16px;
        color: #030303;

    }
    .create-account{
        font-size: 14.5px;
        text-align: center;
        margin: 25px;
    }
    .create-account p a{
        color: #0f0f0f;
        font-weight: 600px;
        text-decoration: none;
    }
    .create-account p a:hover{
        text-decoration: underline;
    }

    /*servicios*/

    .services-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin: 50px 0;
    }

    .service-block {
        width: 300px; /* Adjust the width as needed */
        margin: 10px;
        text-align: center;
        padding: 20px;
        background: #FFD700; /* Gold color, similar to the image */
        border-radius: 10px; /* Rounded corners */
    }

    .icon-container {
        font-size: 50px; /* Size of the icon */
        margin-bottom: 20px;
    }

    .service-block h3 {
        margin-bottom: 15px;
        color: #000; /* Black color for headings */
    }

    .service-block p {
        color: #333; /* Dark grey for text */
    }

    .icon-container .bx {
        display: inline-block;
        font-size: 50px; /* Tamaño del ícono */
        color: #000; /* Color del ícono, puedes cambiarlo si es necesario */
    }

/* Diseño de los bancos */
.card {
    position: relative;
    width: 300px;
    height: 350px;
    margin: 20px;
}

.card .face {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 10px;
    overflow: hidden;
    transition: .5s;
}

.card .front {
    transform: perspective(600px) rotateY(0deg);
    box-shadow: 0 5px 10px #000;
}

.card .front img {
    position: relative;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card .front h3 {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 45px;
    line-height: 45px;
    color: #fff;
    background: rgba(0,0,0,.4);
    text-align: center;
}

.card .back {
    transform: perspective(600px) rotateY(180deg);
    background: rgb(3, 35, 54);
    padding: 15px;
    color: #f3f3f3;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
    box-shadow: 0 5px 10px #000;
}

.card .back .link {
    border-top: solid 1px #f3f3f3;
    height: 50px;
    line-height: 50px;
}

.card .back .link a {
    color: #f3f3f3;
}

.card .back h3 {
    font-size: 25px;
    margin-top: 20px;
    letter-spacing: 2px;
}

.card:hover .front {
    transform: perspective(600px) rotateY(180deg);
}

.card:hover .back {
    transform: perspective(600px) rotateY(360deg);
}

/* Quien son ellos */
.timeline {
    position: relative;
    width: 80%;
    margin: 50px auto;
  }
  .timeline::after {
    content: '';
    position: absolute;
    width: 2px;
    background-color: #333;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -1px;
  }
  .block {
    padding: 20px 50px; /* Increase padding to give space for the circle */
    position: relative;
    background-color: inherit;
    width: calc(50% - 50px); /* Adjust width to account for padding */
    box-sizing: border-box;
    perspective: 1000px; /* Set perspective for children 3D effects */
  }
  .block .content {
    background: #fff;
    padding: 50px;
    border-radius: 5px;
    border: 1px solid #ddd;
    position: relative;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
    transform: translateZ(0); /* Prepare for 3D transition */
  }
  .block:hover .content {
    transform: translateZ(20px); /* Lift the block up to create a 3D effect on hover */
    box-shadow: 0 20px 30px rgba(0,0,0,0.2);
  }

  .circle {
    position: absolute;
    width: 150px; /* Increase the circle size */
    height: 150px; /* Increase the circle size */
    background-color: #fff;
    border: 3px solid #333;
    border-radius: 50%;
    top: 15px;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden; /* Ensure the image doesn't exceed the circle bounds */
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    transform: perspective(200px) rotateY(0deg); /* Starting position for 3D effect */
    transition: transform 0.5s ease-in-out;
    animation: pulse 2s infinite;
  }
  .circle:hover {
    transform: perspective(200px) rotateY(180deg); /* 3D flip effect on hover */
  }
  .circle img {
    width: 70%;
    height: auto;
  }
  .left {
    left: 0;
    padding-right: 0px; /* Increase right padding for left side blocks */
  }
  .right {
    left: 50%;
    padding-left: 70px; /* Increase left padding for right side blocks */
  }
  .left .circle {
    right: -129px; /* Adjust to center the circle on the timeline */
  }
  .right .circle {
    left: -78px; /* Adjust to center the circle on the timeline */
  }
  .block h2 {
    margin-top: 0;
    color: #333;
  }
  @media screen and (max-width: 600px) {
    .block {
      width: 100%;
      padding-left: 70px;
      padding-right: 70px;
    }
    .left .circle, .right .circle {
      left: 50%;
      margin-left: -25px; /* Adjust for half the new width */
    }
  }
  /* Animation for the shadow to create a "pulsing" effect */
  @keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(0,0,0,0.2); }
    70% { box-shadow: 0 0 30px 0 rgba(0,0,0,0.5); }
    100% { box-shadow: 0 0 0 0 rgba(0,0,0,0.2); }
  }


/* Contactos */
  #contact {
        perspective: 1000px;
        perspective-origin: 50% 100px;
    }

    .contact-info {
        background: #FFD700;
        border-radius: 5px;
        padding: 20px;
        display: inline-block;
        margin: 10px;
        transform: rotateX(10deg);
        box-shadow: 0 5px 15px rgba(0,0,0,0.5);
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .contact-info:hover {
        transform: rotateX(0deg);
        box-shadow: 0 15px 30px rgba(0,0,0,0.5);
    }

    a {
        color: #55acee;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #2ecc71;
    }

    .social-media a {
        display: inline-block;
        margin: 0 10px;
        background: #555;
        padding: 10px;
        border-radius: 50%;
        transition: transform 0.3s ease;
    }

    .social-media a:hover {
        transform: scale(1.1);
    }

    .map iframe {
        border: 5px solid white;
        transition: border-color 0.3s ease;
    }

    .map iframe:hover {
        border-color: #2ecc71;
    }
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
        <!-- Tu menú actual -->
        <a href="#servicios"><i class='bx bx-list-ul'></i> Servicios</a>
        <a href="#bancos-ensayo"><i class='bx bx-building-house'></i> Bancos de ensayo</a>
        <a href="#nosotros"><i class='bx bx-info-square'></i> Nosotros</a>
        <a href="#beneficios"><i class='bx bx-gift'></i> Beneficios</a>
        <a href="#contacto"><i class='bx bx-envelope'></i> Contáctanos</a>
        <a href="#inicio-sesion"><i class='bx bx-log-in'></i> Iniciar sesión</a>
    </nav>
    <form action="" class="search-bar">
       <input type="text"  placeholder="Buscar...">
       <button><i class='bx bx-search'></i></button>
    </form>
</header>

   <!-- Secciones de información -->
   <section id="servicios" class="section">
       <h2>Servicios</h2>
    <div class="services-container">
        <div class="service-block">
            <div class="icon-container">
                <i class='bx bx-cog' ></i> <!-- Este ícono representa los engranajes -->
            </div>
            <h3>ENSAYOS DE INTEGRIDAD</h3>
            <p>Ciclo de choque térmico (Entre -10 y 50°C), Ciclos de conmutación (cada 30 seg.) y Sobretensiones transitorias e impulso por rayo (Ring Wave y CWG 1.2/50, 8/20).</p>
        </div>
        <!-- Repeat the structure for each service, changing the icon and text accordingly -->
        <div class="service-block">
            <div class="icon-container">
                <i class='bx bx-bulb' ></i>
            </div>
            <h3>MEDICIONES</h3>
            <p>Medición de variables espectrofotométricas, eléctricas y de la distribución de intensidades luminosas (Flujo Luminoso, TCC, IRC, Potencia Eléctrica, Factor de Potencia, Distorsión Armónica y Curvas de Distribución Luminosa).</p>
        </div>
        <div class="service-block">
            <div class="icon-container">
                <i class='bx bx-group' ></i>
            </div>
            <h3>CAPACITACIÓN</h3>
            <p>Diseño y Evaluación de sistemas de iluminación en interiores y exteriores.</p>
        </div>
        <!-- ... other service blocks -->
        <div class="service-block">
            <div class="icon-container">
                <i class='bx bx-file' ></i>
            </div>
            <h3>CONSULTORÍA</h3>
            <p>Proyectos de eficiencia energética. Proyectos de evaluación y diseño de sistemas de iluminación en interiores y exteriores. Determinación de características técnicas de productos: lámparas y luminarias.</p>
        </div>

        <div class="service-block">
            <div class="icon-container">
                <i class='bx bx-dollar-circle' ></i>
            </div>
            <h3>COTIZACIÓN</h3>
            <p>Para cotización en cualquiera de nuestros servicios CONTÁCTANOS.</p>
        </div>
    </div>
  </section>
 

   <section id="bancos-ensayo" class="section">
    <div class="services-container">
        <h2>Bancos de ensayo</h2>
        <div class="card">
            <div class="face front">
                <img src="https://lh3.googleusercontent.com/d/1qc58GlnqT75cD_ATPACCLgz_b1Xe5B9V" alt="">
                <h3>CHOQUE TÉRMICO</h3>
            </div>
            <div class="face back">
                <h3>CHOQUE TÉRMICO</h3>
                <p>Es un equipo para ensayos de envejecimiento acelerado, consta de dos cámaras térmicas entre las cuales se desplaza automáticamente una canastilla que transporta objetos bajo prueba para someterlas a choque térmico de entre -10 °C y 50 °C. Permite configurar diferentes ciclos y tiempos de exposición.</p>
                <div class="link">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="https://lh3.googleusercontent.com/d/1RupXRq7SzxKr3joUIEaEO5jclD6UcISU" alt="">
                <h3>CONMUTACIÓN</h3>
            </div>
            <div class="face back">
                <h3>CONMUTACIÓN</h3>
                <p>Sistema electrónico automatizado con control por computadora que tiene por objetivo ejecutar ensayos de envejecimiento acelerado a lámparas y luminarios, a través de ciclos automatizados de encendido y apagado, monitoreando su corriente de carga para verificar su condición de funcionamiento.

                </p>
                <div class="link">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="https://lh3.googleusercontent.com/d/1e-SLOJx8aoBRDlWglO8DNc6_znOnTv0V" alt="">
                <h3>SOBRETENSIONES TRANSITORIAS</h3>
            </div>
            <div class="face back">
                <h3>SOBRETENSIONES TRANSITORIAS</h3>
                <p>Banco de pruebas que permite aplicar a lámparas, componentes eléctricos y electrónicos sobretensiones transitorias amortiguadas de 0.5µs a una frecuencia de 100kHz y sobretensiones de impulso por rayo de hasta 6kV a 3kA con onda combinada de 1.2/50 µs, lo anterior evalúa su confiabilidad ante fallos en la red eléctrica.</p>
                <div class="link">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="https://lh3.googleusercontent.com/d/1TjDTIeA6hM73IjD6NmNGnyF1zbiMLcMk" alt="">
                <h3>ESFERA INTEGRADORA</h3>
            </div>
            <div class="face back">
                <h3>ESFERA INTEGRADORA</h3>
                <p>Esfera hueca de alta reflexión de 3m de diámetro que permite medir la potencia luminosa de una fuente de luz artificial así como otras características radiométricas y de eficiencia energética, tales como TCC, IRC, eficacia, FP y distorsión armónica.</p>
                <div class="link">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="https://lh3.googleusercontent.com/d/1A7zsPjD3WgxOfrGZ5fs0tR90IAD2b_Gd" alt="">
                <h3>FOTOGONIOMETRO</h3>
            </div>
            <div class="face back">
                <h3>FOTOGONIOMETRO</h3>
                <p>Fotómetro de celda móvil automatizado cuya función es determinar el comportamiento espacial de intensidades luminosas de una fuente de luz artificial. Está constituido por un brazo móvil de 6m con doble sensor de iluminancia y un soporte móvil para especímenes.</p>
                <div class="link">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>
        
        
    </div>
   </section>

   <section id="nosotros" class="section">
       <h2>Nosotros</h2>
       <div class="timeline">
        <div class="block left">
          <div class="circle">
            <img src="https://lh3.googleusercontent.com/d/1ZF22k-WABPU-LQOK_cGsKRBAeFu4UURz" alt="INAOE">
          </div>
          <div class="content">
            <h2>INSTITUTO NACIONAL DE ASTROFÍSICA, ÓPTICA Y ELECTRÓNICA (INAOE)</h2>
            <p>Somos un Centro Público de Investigación del Consejo Nacional de Ciencia y Tecnología (CONACYT), enfocado a la solución de problemas científicos y tecnológicos del país a través de la investigación básica y aplicada así como el desarrollo tecnológico y la innovación.</p>
          </div>
        </div>
      
        <div class="block right">
          <div class="circle">
            <img src="path_to_image2.jpg" alt="Misión">
          </div>
          <div class="content">
            <h2>MISIÓN</h2>
            <p>Contribuir como centro público de investigación a la generación, avance y difusión del conocimiento para el desarrollo del país y de la humanidad, por medio de la identificación y solución de problemas científicos y tecnológicos y de la formación de especialistas en las áreas de Astrofísica, Óptica, Electrónica, Ciencias Computacionales y áreas afines.</p>
          </div>
        </div>
      
        <div class="block left">
          <div class="circle">
            <img src="path_to_image3.jpg" alt="Visión">
          </div>
          <div class="content">
            <h2>VISIÓN</h2>
            <p>El INAOE será un centro público de investigación con un alto liderazgo a nivel internacional en el ámbito de la investigación científica, el desarrollo tecnológico y la formación de recursos humanos dentro de las áreas de Astrofísica, Óptica, Electrónica, Ciencias Computacionales y áreas afines, comprometido con el desarrollo nacional a través de la promoción de valores sociales de solidaridad, creatividad y alta competitividad.</p>
          </div>
        </div>
      
        <div class="block right">
          <div class="circle">
            <img src="path_to_image2.jpg" alt="Misión">
          </div>
          <div class="content">
            <h2>LIEE</h2>
            <p>El laboratorio surge como resultado de un proyecto de Bono de Transferencia Tecnológica del Fondo Sectorial de Innovación (FINNOVA), el cual tuvo como objetivo integrar 5 bancos de ensayos para ejecutar métodos de prueba en conformidad con las normas NOM-030-ENER y NOM-031-ENER, relativas a la descripción de magnitudes mínimas aceptables para fuentes de luz integradas por LEDs para aplicaciones en interiores y exteriores.</p>
          </div>
        </div>
      
        <div class="block left">
          <div class="circle">
            <img src="path_to_image3.jpg" alt="Visión">
          </div>
          <div class="content">
            <h2>propósitoV2</h2>
            <p>El Laboratorio de Iluminación y Eficiencia Energética del INAOE tiene el propósito de fomentar en la sociedad la cultura de la iluminación, en términos de eficiencia, calidad y suficiencia.</p>
          </div>
        </div>
      
        <div class="block right">
          <div class="circle">
            <img src="path_to_image2.jpg" alt="Misión">
          </div>
          <div class="content">
            <h2>MISIÓNv2</h2>
            <p>Proveer a diseñadores de sistemas de iluminación, a fabricantes y comercializadores de fuentes de luz artificial, servicios de ingeniería especializada en materia de ensayos espectrofotométricos, eficiencia energética y envejecimiento acelerado, así como consultoría y capacitación, en conformidad con estándares nacionales e internacionales.</p>
          </div>
        </div>
      
        <div class="block left">
          <div class="circle">
            <img src="path_to_image3.jpg" alt="Visión">
          </div>
          <div class="content">
            <h2>VISIÓNv2</h2>
            <p>El laboratorio de Iluminación y eficiencia energética se consolidará como un laboratorio de ensayos líder en el mercado mexicano. Generaremos utilidades de manera sustentable, logrando satisfacer y retener al cliente ofreciendo un servicio excelente por medio de procesos confiables y transparentes, enfocados a una calidad excelente.</p>
          </div>
        </div>
      
        <div class="block right">
          <div class="circle">
            <img src="path_to_image2.jpg" alt="Misión">
          </div>
          <div class="content">
            <h2>POLITICA_CALIDAD</h2>
            <p>El Laboratorio de Iluminación y Eficiencia Energética se compromete a proporcionar servicios de ensayos de medición y de integridad de componentes a fuentes de luz artificial conforme a las normas ISO/IEC 17025 y NMX-EC-17025-IMNC vigentes, brindar métodos de ensayos precisos y confiables realizados por especialistas en la materia, procurando la mejora continua en el marco de la gestión de la calidad y de los riesgos en todas las actividades del laboratorio, así como garantizar el aseguramiento de la emisión de resultados confiables, con el objetivo de satisfacer los requisitos de nuestros clientes.</p>
          </div>
        </div>
      
        <!-- Continue with more blocks as needed -->
      </div>
      
   </section>

   <section id="beneficios" class="section">
    <h2>Beneficios</h2>
    <p>Al elegir nuestros servicios, obtendrás beneficios tangibles como mejoras en la eficiencia, reducción de costos y aumento de la competitividad en el mercado.</p>
   </section>

   <section id="contacto" class="section">
    <div id="contact">
        <h1>CONTÁCTANOS</h1>
        <div class="contact-info">
            <p><strong>Correo:</strong> <a href="mailto:le@inaoep.mx">le@inaoep.mx</a></p>
            <p><strong>Teléfono:</strong> <a href="tel:+52222663100">+52 (222) 2663100 ext. 7709 / 7721</a></p>
            <p><strong>Dirección:</strong> Instituto Nacional de Astrofísica, Óptica y Electrónica. Parque Tecnológico. Laboratorio de Iluminación y Eficiencia Energética. Av. Reforma Nte. 1038, San Diego, Sta. María Tonantzintla, 72820 San Andrés Cholula, Pue.</p>
        </div>
        
        <div class="map">
            <iframe src="https://maps.google.com/maps?q=Parque%20tecnológico%20INAOE&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
   </section>

   <!-- Agrega más secciones según sea necesario -->

   <script>
    // JavaScript para desplazarse a la sección correspondiente al hacer clic en el enlace del menú
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll(".navbar a");

        links.forEach(function(link) {
            link.addEventListener("click", function(event) {
                event.preventDefault();
                const targetId = this.getAttribute("href");
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            });
        });

        const searchBar = document.querySelector(".search-bar");
        const searchInput = document.querySelector(".search-bar input");

        searchBar.addEventListener("submit", function(event) {
            event.preventDefault();
            const searchTerm = searchInput.value.toLowerCase();
            const sections = document.querySelectorAll("section");

            let found = false; // Variable para indicar si se encontró el término

            sections.forEach(function(section) {
                const sectionText = section.textContent.toLowerCase();
                if (sectionText.includes(searchTerm)) {
                    section.style.display = "block";
                    if (!found) {
                        // Si se encuentra el término, desplazar la página a esa sección
                        section.scrollIntoView({
                            behavior: "smooth",
                            block: "start"
                        });
                        found = true; // Marcar que se encontró el término
                    }
                } else {
                    section.style.display = "none";
                }
            });
        });
    });
   </script>
</body>
</html>
