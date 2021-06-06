@extends('layout.main')
@section('content')
<script src="https://js.stripe.com/v3/"></script>
<!--====== NAVBAR TWO PART ENDS ======-->

<!--====== SLIDER PART START ======-->
<style>
    button {
        background: white;
        color: mediumpurple;
        width: 100%;
        border: 2px solid mediumpurple;
        border-radius: 50px;
        font-size: x-large;
        font-weight: bold;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-bottom: 50px;
    }
</style>

<section id="home" class="slider_area" style=" background-image: url('./assets/images/bg15.png');">
    <form action=@if($request->version=='completa') "./checkout"  @else "./generarinforme" @endif   method="POST">
        {{ csrf_field() }}
        <div class="container  mw-100  pt-200">
            <div class="row justify-content-center ml-50 mr-50 mb-50">
                <h2 class="title text-white text-center text-uppercase">{{$informe}}</h2>
                <p class=" mt-5 text-white text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
            </div>

            <div class="row justify-content-center mt-5 mr-5 ml-5 mb-5 pb-5">




                <p class="text-center text-white p-0 mb-4"><strong>FECHA DE REVOLUCIÓN PRESENTADA</strong></p>
                <h3 id="fecha" class="text-center text-white p-0 mb-4 fw-normal"></h3>

                <p class="text-center text-white p-0 mb-4"><strong>PARA : </strong></p>
                <h3 class="text-center text-white p-0 mb-4 fw-normal text-uppercase">{{$persona->pa_nombre}}</h3>

                <p class="text-center text-white p-0 mb-4"><strong>SELECIONE PAIS Y REGION DONDE VA A PASAR LA
                        REVOLUCIÓN</strong></p>
                <div class="row justify-content-center mt-4 p-0">
                    <div class="col-12 col-md-4 mb-4">
                        <input name="pais" type="text" class="btn-MediumPurple text-center" autocomplete="off" placeholder="Escribe el pais">

                    </div>

                    <div class="col-12 col-md-4 mb-4">
                        <input name="ciudad" type="text" class="btn-MediumPurple text-center" autocomplete="off" placeholder="Escribe la ciudad">
                    </div>
                </div>


                @isset($checkout)
                @else
                <div class="row justify-content-center mt-4 p-0">
                    <div class="col-12 col-md-3">
                        <input class="btn-white-MediumPurple text-center" value="CONTINUAR" type="submit">
                    </div>
                </div>
                @endisset
                <div class="row justify-content-center mt-4 p-0">
                    <div class="col-12 col-md-3">
                        <input class="btn-MediumPurple" value="CAMBIAR DATOS" onclick="window.location='./informesolarciudad'" type="button">
                    </div>
                </div>

            </div>
        </div>

        <input name="persona" type="hidden" value="{{$persona->pa_id}}">
        <input name="version" type="hidden" value="{{$request->version}}">
        <input name="date" type="hidden" value="{{$request->date}}">
        <input name="informe" type="hidden" value="{{$informe}}">
    </form>
    @isset($checkout)
    <div class="row justify-content-center mt-4 p-0">
        <div class="col-12 col-md-3">
            {{ $checkout->button('Comprar') }}
        </div>
    </div>
    @endisset


</section>
@endsection
@section('script')
<script>
    let fechas = fechasDeRevolucion("{{$request -> date}}", "{{$informe}}");
    document.getElementById("fecha").innerText = "DESDE: " + fechas.fecha_de_inicio + " | HASTA:" + fechas.fecha_de_fin;
</script>
@endsection