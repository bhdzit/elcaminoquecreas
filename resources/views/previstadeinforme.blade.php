
@extends('layout.main')
@section('content')

    <!--====== NAVBAR TWO PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area" style=" background-image: url('../assets/images/bg15.png');">
        <div class="container  mw-100  pt-200">
            <div class="row justify-content-center ml-50 mr-50 mb-50">
                <h2 class="title text-white text-center text-uppercase">{{$informe->in_nombre}}</h2>

            </div>

            <div class="row justify-content-center ">

                <p class="text-center text-white p-0 mb-4"><strong>¡Informe generado con éxito!</strong></p>
                <img class="col-12 col-md-3" src="../assets/images/bg14.png">

                <div class="row justify-content-center mt-4 p-0 mb-4">
                    <div class="col-12 col-md-3">
                        <input class="btn-white-MediumPurple text-center" value="VER INFORME"
                            onclick="window.location='../verinforme/'+{{$informe->in_id}}" type="button">
                    </div>
                </div>



            </div>
        </div>

    </section>
@section('script')
<script >

fetch('http://127.0.0.1:3700/')
  .then(response => response.json())
  .then(data => console.log(data));

</script>
@endsection





   