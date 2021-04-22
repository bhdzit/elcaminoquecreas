@extends('layout.main')
@section('content')


<section id="services" class="features-area about-area" style="background: url('assets/images/bg9.png');">

    <!-- Validation Errors -->
   
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container p-5">
            <div class="row mt-5 justify-content-center">

                <div class="col-12 col-md-5   text-center bg-white m-0 p-5 justify-content-center">
                    <h4 class="mb-3  font-weight-bold">Ingresar</h4>
                    <p class="mb-3 text-black-50">Ingresa con tus redes sociales</p>
                    <button class="btn btn-facebook-login mb-2 p-2"><i class="fab fa-facebook-f mr-2"></i> INGRESAR CON
                        FACEBOOK</button>
                    <button class="btn btn-gmail-login p-2"><i class="fab fa-google-plus-g  mr-2"></i> INGRESAR CON
                        GOOGLE</button>
                    <p class="mb-3 text-black-50">o</p>

                    <input type="email" class="form-control mb-4" placeholder="Correo electrónico" name="email" value="{{old('email')}}">
                    <input type="password" class="form-control mb-2" placeholder="Contraseña" type="password" name="password" required autocomplete="current-password">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <div class="row mt-3 mb-4">
                        <div class="col-12 col-md-5">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            <label>Recordarme</label>
                        </div>
                        <div class="col-12 col-md-5">
                            <p><a href="./forgot-password" class="login-link">¿Olvidaste contraseña?</a></p>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-gmail-login p-2 mb-3" value="INGRESAR">

                  
                    <p>¿No tienes Cuenta? <a href="register" class="login-link">Registrate</a></p>
                </div>
            </div>
        </div> <!-- container -->
    </form>
</section>
@stop