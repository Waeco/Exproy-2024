@extends('layouts.plantilla')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @section('titulo', 'Inicio de sesion')
    <link rel="stylesheet" href="..\resources\css\styleinicio.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container" id="container">
        <div class="form-container register-container">
            <!----->
            <form action="{{ url('inicio_sesion.sesion') }}" method="POST">
                @csrf
                <h1>Regístrate</h1>
                <div class="form-control">
                    <input type="text" id="username" name="username" placeholder="Nombre" />
                    <small id="username-error"></small>
                    <span></span>
                </div>
                <div class="form-control">
                    <input type="email" id="email" name="email" placeholder="Correo electrónico" />
                    <small id="email-error"></small>
                    <span></span>
                </div>
                <div class="form-control">
                    <input type="password" id="password" name="password" placeholder="Contraseña" />
                    <small id="password-error"></small>
                    <span></span>
                </div>
                <button type="submit" value="submit">Registrar</button>
            </form>

        </div>

        <div class="form-container login-container">
            <form class="form-lg" method="get">
                <h1>Inicia sesión</h1>
                <div class="form-control2">
                    <input type="email" class="email-2" placeholder="Correo electrónico" />
                    <small class="email-error-2"></small>
                    <span></span>
                </div>
                <div class="form-control2">
                    <input type="password" class="password-2" placeholder="Contraseña" />
                    <small class="password-error-2"></small>
                    <span></span>
                </div>

                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox" />
                        <label for="">Recuérdame</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">¿Olvidaste la contraseña?</a>
                    </div>
                </div>
                <button type="submit" value="submit">Iniciar sesión</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">
                        Hola <br />
                        amigo
                    </h1>
                    <p>Si ya tienes una cuenta, inicia sesión aquí</p>
                    <button class="ghost" id="login">
                        Iniciar sesión

                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1 class="title">
                        Comienza tus <br />
                        compras
                    </h1>
                    <p>
                        Si aún no tienes una cuenta, únete a nosotros y comienza tus compras
                    </p>
                    <button class="ghost" id="register">
                        Registrarse
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="..\resources\js\main.js"></script>

</html>