<html lang="en">
<head>
    <title>INAOE</title>
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
    background: #000;
  
}
.background{
    background: url(https://lh3.googleusercontent.com/d/1BXw294FBHxm6heNffGEcrxV9ayqij8Zy) no-repeat;
    background-position: center;
    background-size:cover;
    height: 100vh;
    width: 100%;
}

.header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 25px -3%;
    background: transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    /* Estilos de la barra de menú */
    background-color: rgba(0 0 0 / 63%); /* Color azul con transparencia */
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
    width: 250px;
    height: 45px;
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
.container{
    position: absolute;
    left: 50%;
    top: 53%;
    transform: translate(-50%,-50%);
    width: 75%;
    height: 550px;
    margin-top: 20px;
    background: url(https://lh3.googleusercontent.com/d/1kLBByuLqK2iIKgI-EPmHjHukzjkMrHQT) no-repeat;
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
.container .login-section{
    position: absolute;
    top: 0;
    right: 0;
    width: calc(100% - 58%);
    height: 100%;
    color: #000000;
    background-color: transparent;
}

.login-section .form-box{
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    
}
.login-section .form-box.register{
    transform: translateX(430px);
    transition: transform .6s ease;
    transition-delay: 0s;
}
.login-section.active .form-box.register{
    transform: translateX(0px);
    transition-delay: .7s;
}

.login-section .form-box.login{
    transform: translateX(0px);
    transition: transform .6s ease;
    transition-delay: 0.7s;
}
.login-section.active .form-box.login{
    transform: translateX(430px);
    transition-delay: 0s;
}
.login-section .form-box h2{
    text-align: center;
    font-size: 25px;
}

.form-box .input-box{
    width: 340px;
    height: 50px;
    border-bottom: 2px solid#080808;
    margin: 30px 0;
    position: relative;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    padding-right: 28px;
            color: #000000;

}
.input-box label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    font-weight: 600px;
    pointer-events: none;
    transition: .5s ease;


}
.input-box .icon{
    position: absolute;
    top: 13px;
    right: 0;
    font-size: 19px;

}
.input-box input:focus~ label,
.input-box input:valid~ label{
    top: -5px;
}
.remember-password{
    font-size: 14px;
    font-weight: 500;
    margin: -15px 0 15px ;
    display: flex;
    justify-content: space-between;

}
.remember-password label input{
    accent-color: #000000;
    margin-right: 3px;

}
.remember-password a{
    color: #030303;
    text-decoration: none;
}
.remember-password a:hover{
    text-decoration: underline;
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
        </nav>
    </header>
    <!-- LOGIN -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><img src="https://lh3.googleusercontent.com/d/1ZF22k-WABPU-LQOK_cGsKRBAeFu4UURz" alt="#" style="width:90px;height:90px;margin-right:30px;"><i class=''></i></h2>
            <div class="text-item">
                <h2>¡Bienvenido! <br><span>
                    Estamos escantados de tenerte de nuevo.
                </span></h2>
                <p>Gracias a ti, estamos creciendo más allá de nuestras expectativas. 
                    Compartamos el éxito cada día.</p>
                <div class="social-icon">
                    <a href="#"><i class=''></i></a>
                    <a href="#"><i class=''></i></a>
                    <a href="#"><i class=''></i></a>
                    <a href="#"><i class=''></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                <form action="">
                    <h2>Iniciar Sesión</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user-account'></i></span>
                        <input type="text" required>
                        <label>Usuario</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password"  required>
                        <label>Contraseña</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Recuerda</label>
                        <a href="#">Olvidaste tu contraseña</a>
                    </div>
                    <button class="btn">Ingresar</button>
                    <div class="create-account">
                        <p>¿Aún no tienes cuenta?<a href="#" class="register-link"> 
                            Registrarse</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <form action="">

                    <h2>Ingreso</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required>
                        <label >Nombre</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user-account'></i></span>
                        <input type="text" required>
                        <label>Usuario</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Contraseña</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Estoy de acuerdo con
                             los términos y condiciones</label>
                    </div>
                    <button class="btn">Registrarse</button>
                    <div class="create-account">
                        <p>Tienes una cuenta? <a href="#" class="login-link">
                            Iniciar Sesión</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    const loginsec=document.querySelector('.login-section')
    const loginlink=document.querySelector('.login-link')
    const registerlink=document.querySelector('.register-link')
    registerlink.addEventListener('click',()=>{
        loginsec.classList.add('active')
    })
    loginlink.addEventListener('click',()=>{
        loginsec.classList.remove('active')
    })
    </script>
</body>
</html>