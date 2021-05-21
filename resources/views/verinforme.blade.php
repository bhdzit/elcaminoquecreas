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
        <div class="row justify-content-center mb-5 ">
            <img class="col-12 col-md-5 mb-5 hoja" src="../assets/svg/portada.svg">
        </div>
    </div>

</section>
@stop

@section('script')
<script src="../js/editTextcontent.js"></script>
<script>
    let bool = true;
    setInterval(function() {
        if (bool) {
            $('#preloader2Msj').text("Por favor espere...");
            bool = false;
        } else {
            $('#preloader2Msj').text("Cargando Informe ...");
            bool = true;
        }
    }, 3000);


    let hoja = "";
    let introduccion = "";
    let promesas = -1;
    const svg1 = Promise.all([
        fetch('../assets/svg/hoja.svg'),
        fetch('http://127.0.0.1:3700/'),
        fetch('http://127.0.0.1:3800/')
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
        hoja = data[0];
        leerTextoporfila(text, hoja, -55.8, 14, "Introduccion", true);
        leerTextoporfila(text1, hoja, -55.8, 14, "Tabla de Importancias", true);
        tablaDeimportancias(data[1], hoja, -55.8, "Tabla de Importancias");
    descripciones(data[2], hoja, "Descripcion");
        $('#preloader2').delay(500).fadeOut(500);
    }).catch(function(error) {
        console.log(error);
    });

    function leerTextoporfila(parafoDeTexto, svg, svgXposicion, svgYposicion, titulo, bool) {
        parafosDeTexto = parafoDeTexto.split("\n");
        //        let svgXposicion = 0;
        //        let svgYposicion = 14;
        let textoDeHoja = "";
        for (parafo in parafosDeTexto) {
            let palabras = parafosDeTexto[parafo].split(" ");
            let longitudDeCadena = 0;
            let cadena = "<tspan x=\"" + svgXposicion + "\" y=\"" + svgYposicion + "\">";


            for (palabra in palabras) {
                if (longitudDeCadena <= 69) {
                    longitudDeCadena += palabras[palabra].length;
                    cadena += (" " + palabras[palabra]);
                    if (palabra == palabras.length - 1) {
                        textoDeHoja += (cadena += "</tspan>");
                        svgYposicion += 14;
                    }
                } else {
                    svgYposicion += 14;
                    textoDeHoja += (cadena + "</tspan>");
                    cadena = "<tspan x=\"" + svgXposicion + "\" y=\"" + svgYposicion + "\">" + palabras[palabra];
                    longitudDeCadena = 0;

                }
            }
            svgYposicion += 14;
        }
        if (bool) {


            svg = svg.replace("titulo", titulo);
            svg = svg.replace("TextoAremplazar", textoDeHoja);
            let contenedor = document.getElementById("content");
            contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
                '<div class="col-12 col-md-5 mb-5 hoja">' + svg + '"</div></div>';
        }
        return {
            "text": textoDeHoja,
            "y": svgYposicion
        };
    }


    function tablaDeimportancias(tabla, svg, svgXposicion, titulo) {
        let svgYposicion = 14;
        let platilla = svg;
        let contenedor = document.getElementById("content");

        let textoDeHoja = "<tspan class=\"cls-bold \"  x=\"-55.8\">Astro</tspan><tspan class=\"cls-bold \" x=\"60.8\">|PE | PI | CE | CI | AE | AI | B | X | EE | EI | RetNat |</tspan>";
        for (row in tabla) {

            if (jsonFilasDeTablaImportancias[row] != undefined) {


                textoDeHoja += "<tspan x=\"" + svgXposicion + "\" y=\"" + svgYposicion + "\">" + jsonFilasDeTablaImportancias[row] + "</tspan>";
                textoDeHoja += "<tspan x=\"" + (svgXposicion + 120) + "\" y=\"" + svgYposicion + "\">" + tabla[row] + "</tspan>";
                svgYposicion += 14;

                if (svgYposicion == 462) {
                    platilla = platilla.replace("titulo", titulo);
                    platilla = platilla.replace("TextoAremplazar", textoDeHoja);
                    contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
                        '<div class="col-12 col-md-5 mb-5 hoja">' + platilla + '"</div></div>';
                    svgYposicion = 14;
                    textoDeHoja = "<tspan class=\"cls-bold \"  x=\"-55.8\">Astro</tspan><tspan class=\"cls-bold \" x=\"60.8\">|PE | PI | CE | CI | AE | AI | B | X | EE | EI | RetNat |</tspan>";
                    platilla = svg;

                }
            }
        }
        svg = svg.replace("titulo", titulo);
        svg = svg.replace("TextoAremplazar", textoDeHoja);
        contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
            '<div class="col-12 col-md-5 mb-5 hoja">' + svg + '"</div></div>';

        //  contenedor.innerHTML = filasDeTablaDeImportancia;
    }

   async function descripciones(descripciones, svg, titulo) {

        let svgYposicion = -14;
        let plantilla = svg;
        let contenedor = document.getElementById("content");
        let textoDeHoja = "";
        for (descripcion in jsonDescripcion) {
            textoDeHoja += "<tspan class=\"cls-bold cls-txt20\" x=\"-50\" y=\"" + svgYposicion + "\">" + descripcion + "</tspan>";
            svgYposicion += 20;
            textoDeHoja += "<tspan class=\"cls-bold \" x=\"-50\" y=\"" + svgYposicion + "\">Evento del Tipo 1</tspan>";
            let eventoTipoUno = (jsonDescripcion[descripcion]["Evento del Tipo 1"]);
            if (eventoTipoUno != undefined) {
                eventoTipoUno = eventoTipoUno.replace(" ", "");
                if (descripciones[eventoTipoUno] != undefined) {
                    let contenidoDeTexto = leerTextoporfila(descripciones[eventoTipoUno], svg, -55.8, svgYposicion + 14, "Eventos", false);
                    svgYposicion = contenidoDeTexto["y"];
                    if (svgYposicion <= 434) {
                        textoDeHoja += contenidoDeTexto["text"];
                    } else {
                        if (contenidoDeTexto["text"] == undefined) contenidoDeTexto["text"] = "";
                        plantilla = plantilla.replace("titulo", titulo);
                        plantilla = plantilla.replace("TextoAremplazar", textoDeHoja);
                        contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
                            '<div class="col-12 col-md-5 mb-5 hoja">' + plantilla + '"</div></div>';
                        svgYposicion = 14;
                        contenidoDeTexto = leerTextoporfila(descripciones[eventoTipo], svg, -55.8, svgYposicion, "Eventos", false);
                        textoDeHoja = contenidoDeTexto["text"];
                        svgYposicion=contenidoDeTexto["y"];
                        plantilla = svg;
                    }
                }


            }
            svgYposicion += 20;





            textoDeHoja += "<tspan class=\"cls-bold \" x=\"-50\" y=\"" + svgYposicion + "\">Evento del Tipo 2</tspan>";
            eventoTipo = (jsonDescripcion[descripcion]["Evento del Tipo 2"]);
            
            if (eventoTipo != undefined) {
                eventoTipo = eventoTipo.replace(" ", "");
                //console.log(descripciones[eventoTipo]);
                if (descripciones[eventoTipo] != undefined) {
                    let contenidoDeTexto = leerTextoporfila(descripciones[eventoTipo], svg, -55.8, svgYposicion + 14, "Eventos", false);
                    // textoDeHoja += (contenidoDeTexto["text"]);
                    svgYposicion = contenidoDeTexto["y"];
                    if (svgYposicion <= 434) {
                        textoDeHoja += contenidoDeTexto["text"];
                    } else {

                        if (contenidoDeTexto["text"] == undefined) contenidoDeTexto["text"] = "";
                        plantilla = plantilla.replace("titulo", titulo);
                        plantilla = plantilla.replace("TextoAremplazar", textoDeHoja);
                        contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
                            '<div class="col-12 col-md-5 mb-5 hoja">' + plantilla + '"</div></div>';
                        svgYposicion = 14;
                        contenidoDeTexto = leerTextoporfila(descripciones[eventoTipo], svg, -55.8, svgYposicion, "Eventos", false);
                        textoDeHoja =contenidoDeTexto["text"];
                        svgYposicion=contenidoDeTexto["y"];
                        //console.log(contenidoDeTexto["texto"]);
                        plantilla = svg;
                    }
                }
            }

            svgYposicion += 20;
            textoDeHoja += "<tspan class=\"cls-bold \" x=\"-50\" y=\"" + svgYposicion + "\">Evento del Tipo 3</tspan>";
            eventoTipo = (jsonDescripcion[descripcion]["Evento del Tipo 3"]);
            
            if (eventoTipo != undefined) {
                eventoTipo = eventoTipo.replace(" ", "");
                //console.log(descripciones[eventoTipo]);
                if (descripciones[eventoTipo] != undefined) {
                    let contenidoDeTexto = leerTextoporfila(descripciones[eventoTipo], svg, -55.8, svgYposicion + 14, "Eventos", false);
                    // textoDeHoja += (contenidoDeTexto["text"]);
                    svgYposicion = contenidoDeTexto["y"];
                    if (svgYposicion <= 434) {
                        textoDeHoja += contenidoDeTexto["text"];
                    } else {

                        if (contenidoDeTexto["text"] == undefined) contenidoDeTexto["text"] = "";
                        plantilla = plantilla.replace("titulo", titulo);
                        plantilla = plantilla.replace("TextoAremplazar", textoDeHoja);
                        contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
                            '<div class="col-12 col-md-5 mb-5 hoja">' + plantilla + '"</div></div>';
                        svgYposicion = 14;
                        contenidoDeTexto = leerTextoporfila(descripciones[eventoTipo], svg, -55.8, svgYposicion, "Eventos", false);
                        textoDeHoja =contenidoDeTexto["text"];
                        svgYposicion=contenidoDeTexto["y"];
                        //console.log(contenidoDeTexto["texto"]);
                        plantilla = svg;
                    }
                }
            }

            svgYposicion += 20;



        }
        svg = svg.replace("titulo", titulo);
        svg = svg.replace("TextoAremplazar", textoDeHoja);
        contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
            '<div class="col-12 col-md-5 mb-5 hoja">' + svg + '"</div></div>';


    }

</script>
@stop