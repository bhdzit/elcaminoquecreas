@extends('layout.main')
@section('content')
<section id="services" class="features-area about-area" style="background: url('assets/images/bg9.png');">
     <!-- Validation Errors -->
  
    <form method="POST" action="{{ route('register') }}">
        @csrf
    
        <div class="container p-5">
            <div class="row mt-5 justify-content-center">

                <div class="col-12 col-md-5   text-center bg-white m-0 p-5 justify-content-center">
                    <h4 class="mb-3  font-weight-bold">Registro</h4>
                    <p class="mb-3 text-black-50">registro con tus redes sociales</p>
                    <button class="btn btn-facebook-login mb-2 p-2"><i class="fab fa-facebook-f mr-2"></i> INGRESAR CON
                        FACEBOOK</button>
                    <button class="btn btn-gmail-login p-2"><i class="fab fa-google-plus-g  mr-2"></i> INGRESAR CON
                        GOOGLE</button>
                    <p class="mb-3 text-black-50">o</p>

                    <input type="text" class="form-control mb-4" placeholder="Nombre Completo" name="name" value="{{old('name')}}" >
                    <input type="email" class="form-control mb-4" placeholder="Correo electrónico" type="email" name="email" value="{{old('email')}}" required>
                    <input  class="form-control mb-4" placeholder="Contraseña" type="password" name="password">
                    <input class="form-control mb-4" placeholder="Repetir Contraseña" type="password" name="password_confirmation" required>

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <input type="submit" class="btn btn-gmail-login p-2 mb-3" value="Registro">
                    <p>¿Ya tienes cuenta? <a href="./login" class="login-link">Inicia sesión</a></p>
                </div>
            </div>
        </div> <!-- container -->
    </form>
</section>