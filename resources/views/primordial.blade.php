
@extends('layout.main')
@section('content')


    <!--====== NAVBAR TWO PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area" style=" background-image: url('./assets/images/bg15.png');">
        <div class="container  mw-100  pt-200">
            <div class="row justify-content-center ml-50 mr-50 mb-50">
                <h2 class="title text-white text-center">PRIMORDIAL SL</h2>
                <p class=" mt-5 text-white text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
            </div>

            <div class="row justify-content-center mt-5 mr-5 ml-5 mb-5 pb-5">




                <p class="text-center text-white p-0 mb-4"><strong> SELECIONAR VERSION</strong></p>
                <div class="col-12 col-md-2 mb-4">
                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                        autocomplete="off" checked>
                    <label class=" check-logo" for="success-outlined">GRATUITA</label>
                </div>

                <div class="col-12 col-md-2 mb-4">
                    <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
                        autocomplete="off">
                    <label class="check-logo" for="danger-outlined">COMPLETA</label>
                </div>
                <p class="text-center text-white p-0  mb-4"><strong> LA PERSONA A QUIÉN VA DIRIGIDO</strong>
                </p>
                <div class="col-12 col-md-6 mb-4">
                    <input class="select-camino" list="personas" placeholder="A QUIEN VA DIRIGIDO">
                    <datalist id="personas">

                        <option>
                            Persona 1
                        </option>

                    </datalist>
                </div>

                <p class="text-center text-white p-0  mb-4"><strong>SELECIONE FECHA PARA REVOLUCIÓN</strong></p>
                <div class="col-12 col-md-3">
                    <input type="date" class="select-camino">

                </div>


                <div class="row justify-content-center mt-4 p-0">
                    <div class="col-12 col-md-3">
                        <a  class="btn-white-MediumPurple text-center" value="CONTINUAR" href="primordialciudad" > CONTINUAR</a>
                    </div>
                </div>


            </div>
        </div>

    </section>




