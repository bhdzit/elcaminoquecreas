@extends('layout.main')
@section('content')

<!--====== NAVBAR TWO PART ENDS ======-->

<!--====== SLIDER PART START ======-->

<style>
    .hoja {
        background: white;
        padding: 20px;
    }
</style>

<div id="preloader2" class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <h1 id="preloader2Msj" style="margin-top: 150px;">Cargando Informe ...</h1>
    </div>

</div>
<section id="home" class="slider_area" style=" background-image: url('../assets/images/bg15.png');">

    <div id="content" class="container  mw-100  pt-200">

    </div>

</section>
@stop

@section('script')
<script src="../js/editTextcontent.js"></script>
<script>
      const svg1 = Promise.all([
        fetch('../assets/svg/hoja.svg'),
        fetch('http://198.251.75.37:3700/'),
        fetch('http://198.251.75.37:3800/'),
        fetch('../assets/svg/portada.svg')
    ]).then(function(responses) {
        return Promise.all(responses.map(function(response) {
            promesas++;

            if (promesas == 1 || promesas == 2) {

                return response.json();
            }
            return response.text();
        }));
    }).then(function(data) {
        //introduccion = data[0];

        let contenedor = document.getElementById("content");
        let fechas = fechasDeRevolucion("{{$informe->in_date}}", "{{$informe->in_nombre}}");
        console.log(fechas,"{{$informe->in_date}}",);
        data[3] = data[3].replace("_nombre", "{{$informe->pa_nombre}}");
        data[3] = data[3].replace("_nacimiento", "{{$informe->pa_lugar_nacimiento}}");
        data[3] = data[3].replace("_lugar", "{{$informe->in_lugar}}");
        data[3] = data[3].replace("_fecha_inicio", fechas.fecha_de_inicio);
        data[3] = data[3].replace("_fecha_fin",fechas.fecha_de_fin)
        data[3] = data[3].replace("_nombreDeInforme","{{$informe->in_nombre}}".split(" ")[0]);
        data[3] = data[3].replace("_tipoDeinforme","{{$informe->in_nombre}}".split(" ")[1]);


        contenedor.innerHTML += ' <div class="row justify-content-center">' +
            '<div class="col-12 col-md-5 hoja">' + data[3] + '</div></div>';
        hoja = data[0];
        leerTextoporfila(text, hoja, -55.8, 14, "Introduccion", true);
        leerTextoporfila(text1, hoja, -55.8, 14, "Tabla de Importancias", true);
        tablaDeimportancias(data[1], hoja, -55.8, "Tabla de Importancias",{{$tipoDeInforme}});
        descripciones(data[2], hoja, "Descripcion",{{$tipoDeInforme}});



        $('#preloader2').delay(500).fadeOut(500);
    }).catch(function(error) {
        console.log(error);
    });
</script>
@stop