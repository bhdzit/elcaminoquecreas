@extends('layout.main')
@section('content')


<!--====== NAVBAR TWO PART ENDS ======-->

<!--====== SLIDER PART START ======-->

<section id="home" class="slider_area" style=" background-image: url('./assets/images/bg15.png');">
    <form method="POST" action="informeciudad">
        {{ csrf_field() }}
        <div class="container  mw-100  pt-200">
            <div class="row justify-content-center ml-50 mr-50 mb-50">
                <h2 class="title text-white text-center text-uppercase"> {{$informe}}</h2>
                <p class=" mt-5 text-white text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
            </div>

            <div class="row justify-content-center mt-5 mr-5 ml-5 mb-5 pb-5">




                <p class="text-center text-white p-0 mb-4"><strong> SELECIONAR VERSION</strong></p>
                <div class="col-12 col-md-2 mb-4">
                    <input type="radio" class="btn-check" name="version" id="success-outlined" value="gratis" autocomplete="off" checked>
                    <label class=" check-logo" for="success-outlined">GRATUITA</label>
                </div>

                <div class="col-12 col-md-2 mb-4">
                    <input type="radio" class="btn-check" name="version" value="completa" id="danger-outlined" autocomplete="off">
                    <label class="check-logo" for="danger-outlined">COMPLETA</label>
                </div>
                <p class="text-center text-white p-0  mb-4"><strong> LA PERSONA A QUIÉN VA DIRIGIDO</strong>
                </p>
                <div class="col-12 col-md-6 mb-4">
                    <input id="persona" onchange="idDePersonaSelecionada(this)" name="persona" class="select-camino" list="personas" placeholder="A QUIEN VA DIRIGIDO" value="{{old('persona')}}">
                    <datalist id="personas">
                        @forelse($personas as $persona)
                        <option id="{{$persona->pa_id}}" value="{{$persona->pa_nombre}}">
                            @empty
                        <option value="No hay personas agregadas">
                            @endforelse

                    </datalist>
                </div>

                <p class="text-center text-white p-0  mb-4"><strong>SELECIONE FECHA PARA REVOLUCIÓN</strong></p>
                <div class="col-12 col-md-3">
                    <input name="date" type="date" class="select-camino" value="{{old('date')}}" required>

                </div>
                <div class="row justify-content-center mt-4 p-0">
                    <div class="col-12 col-md-3">
                        <x-auth-validation-errors class="mb-4 text-center" :errors="$errors" />
                    </div>
                </div>

                <div class="row justify-content-center mt-4 p-0">
                    <div class="col-12 col-md-3">
                        <button type="submit" class="btn-white-MediumPurple text-center" value="CONTINUAR" href="primordialciudad"> CONTINUAR</button>
                    </div>
                </div>


            </div>
        </div>

        <input name="personaId" type="hidden"  id="personaId">
        <input name="informe" type="hidden"  id="informe" value=" {{$informe}}">
        
    </form>
</section>
@endsection
@section('script')
<script>
    function idDePersonaSelecionada(persona) {
        let lista = document.getElementById("personas");
        for (let i = 0; i < lista.children.length; i++) {
           if(lista.children[i].value==persona.value){
            document.getElementById("personaId").value=lista.children[i].id;
            console.log(lista.children[i].value,document.getElementById("personaId").value);
           } 
        }   
    }
</script>
@endsection