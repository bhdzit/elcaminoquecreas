@extends('layout.main')
@section('content')

<section id="home" class="slider_area pb-5" style=" background-image: url('./assets/images/bg17.png');">
    <div class="container    pt-200">


        <div class="row justify-content-center mb-5 home-card">
            <div class="col-12 col-md-6">
                <h3 class="title text-center text-uppercase">!BIENVENDIO DE VUELTA {{auth()->user()->name}}!</h3>
                <p class=" mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At
                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                </p>
                <p class="text-center mt-5 mb-5"><strong> PERSONAS ASOCIADAS</strong></p>
                <div class="card-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Nombre de la persona
                                </th>
                                <th>
                                    Datos
                                </th>
                                <th>
                                    Accíon
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($personas as $persona)
                            <tr>
                                <th scope="row">{{$persona->pa_nombre}}</th>
                                <td><button onclick="mostrarDatosDePersona({{$persona}})"> ver mas</button></td>
                                <td><i onclick="editclick({{$persona}})" class="fas fa-pencil-alt"></i>
                                    <form action="{{ url('inicio/'.$persona->pa_id) }}" method="POST" class="d-inline">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit"><i class="fas fa-times"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">
                                    <p>No hay personas</p>
                                </td>
                            </tr>
                            @endforelse


                        </tbody>

                    </table>
                </div>
                <div class="row justify-content-center">
                    <button id="addPersona" class="pull-right col-12 col-md-7 btn-white-purple mt-4"> <i class="fas fa-plus-circle"></i>AÑADIR PERSONA</button>
                </div>
            </div>
            <div class="col-12 col-md-6 m-0">

                <div class="row justify-content-center">
                    <button class="col-12 col-md-7 btn-white  mb-3">Crear nuevo informe</button>
                    <button class="col-12 col-md-7 btn-white-purple">Modificar datos personales</button>
                </div>
                <p class="text-center mt-5 mb-4"><strong>ÚLTIMOS INFORMES REALIZADOS</strong></p>
                <div class="informes-container scrollbar scrollbar-night-fade">
                    @forelse($informes as $informe)

                    <a href="./verinforme/{{$informe->in_id}}" target="_blank"><div class="cursor-pointer row bg-white p-4 rounded-5 mb-4 ml-100">
                        <div class="col-3">
                            <img src="assets/images/bg14.png">
                        </div>
                        <div class="col-9">
                            <p class="text-secondary mb-3 text-uppercase">{{$informe->in_nombre}}</p>
                            <p class="text-secondary mb-3">{{$informe->pa_nombre}} </p>
                            <p class="text-secondary ">Tipo :@if($informe->in_tipo==1)<label class="text-success">Completo</label>@else<label class="text-success">Gratis</label> @endif</p>
                        </div>
                    </div>
                    @empty
                    <p class="text-center">No hay infromes recientes</p>
                    </a>
                    @endforelse
                </div>
            </div>


        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    document.getElementById("addPersona").addEventListener("click", function() {
        let token = '{{ csrf_field() }}';
        let ruta = "{{route('inicio.store')}}";
        agregarPersona(token, ruta);
    });

    function editclick(data) {
        let token = '{{ csrf_field() }}';
        let ruta = "{{url('inicio/')}}";
        ruta += "/" + data.pa_id;
        editarPersona(token, ruta, data);
    }
</script>
@endsection