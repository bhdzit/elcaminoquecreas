
@extends('layout.main')
@section('content')



    <!--====== NAVBAR TWO PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area pb-5" style=" background-image: url('./assets/images/bg17.png');">
        <div class="container    pt-200">


            <div class="row justify-content-center mb-5 home-card">
                <div class="col-12 col-md-6">
                    <h3 class="title text-center">!BIENVENDIO DE VUELTA USUARIO 1!</h3>
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
                                <tr>
                                    <th scope="row">Diarra Effand</th>
                                    <td><button onclick="mostrarDatosDePersona()"> ver mas</button></td>
                                    <td><i class="fas fa-pencil-alt"></i>
                                        <i class="fas fa-times"></i>
                                        <i class="fas fa-info-circle"></i>
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">Diarra Effand</th>
                                    <td><button onclick="mostrarDatosDePersona()"> ver mas</button></td>
                                    <td><i class="fas fa-pencil-alt"></i>
                                        <i class="fas fa-times"></i>
                                        <i class="fas fa-info-circle"></i>
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">Diarra Effand</th>
                                    <td><button onclick="mostrarDatosDePersona()"> ver mas</button></td>
                                    <td><i class="fas fa-pencil-alt"></i>
                                        <i class="fas fa-times"></i>
                                        <i class="fas fa-info-circle"></i>
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">Diarra Effand</th>
                                    <td><button onclick="mostrarDatosDePersona()"> ver mas</button></td>
                                    <td><i class="fas fa-pencil-alt"></i>
                                        <i class="fas fa-times"></i>
                                        <i class="fas fa-info-circle"></i>
                                    </td>

                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="row justify-content-center">
                        <button class="pull-right col-12 col-md-7 btn-white-purple mt-4" onclick="agregarPersona()"> <i
                                class="fas fa-plus-circle"></i>AÑADIR PERSONA NUEVA</button>
                    </div>
                </div>
                <div class="col-12 col-md-6 m-0">

                    <div class="row justify-content-center">
                        <button class="col-12 col-md-7 btn-white  mb-3">Crear nuevo informe</button>
                        <button class="col-12 col-md-7  btn-blue mb-3">Modificar datos de pago</button>
                        <button class="col-12 col-md-7 btn-white-purple">Modificar datos personales</button>
                    </div>
                    <p class="text-center mt-5 mb-4"><strong>ÚLTIMOS INFORMES REALIZADOS</strong></p>
                    <div class=" row bg-white p-4 rounded-5 mb-4 ml-100">
                        <div class="col-3">
                            <img src="assets/images/bg14.png">
                        </div>
                        <div class="col-9">
                            <p class="text-secondary mb-3">Revolucion Lunar - PRIMORDIAL </p>
                            <p class="text-secondary mb-3">MARIA CLARA </p>
                            <p class="text-secondary ">Tipo : <label class="text-success">Completo</label></p>
                        </div>
                    </div>

                    <div class=" row bg-white p-4 rounded-5 ml-100">
                        <div class="col-3">
                            <img src="assets/images/bg14.png">
                        </div>
                        <div class="col-9">
                            <p class="text-secondary mb-3">Revolucion Lunar - PRIMORDIAL </p>
                            <p class="text-secondary mb-3">MARIA CLARA </p>
                            <p class="text-secondary ">Tipo : <label class="text-danger">Parcial</label></p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>





    
    