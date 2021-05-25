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
    let numeroDeHoja = 1;
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
        fetch('http://127.0.0.1:3800/'),
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
 
        data[3]=data[3].replace("_nombre","{{$informe->pa_nombre}}");
        data[3]=data[3].replace("_nacimiento","{{$informe->pa_lugar_nacimiento}}");
        data[3]=data[3].replace("_lugar","{{$informe->in_lugar}}");
        data[3]=data[3].replace("_fecha_inicio","{{$informe->in_date}}");

        contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
            '<div class="col-12 col-md-5 mb-5 hoja">' + data[3] + '</div></div>';
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
        let plantilla = svg;
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

            svg = svg.replace("_pajina", numeroDeHoja++);
            svg = svg.replace("titulo", titulo);
            svg = svg.replace("TextoAremplazar", textoDeHoja);
            let contenedor = document.getElementById("content");
            contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
                '<div class="col-12 col-md-5 mb-5 hoja">' + svg + '</div></div>';
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
                    platilla = platilla.replace("_pajina", numeroDeHoja++);
                    platilla = platilla.replace("titulo", titulo);
                    platilla = platilla.replace("TextoAremplazar", textoDeHoja);
                    contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
                        '<div class="col-12 col-md-5 mb-5 hoja">' + platilla + '</div></div>';
                    svgYposicion = 14;
                    textoDeHoja = "<tspan class=\"cls-bold \"  x=\"-55.8\">Astro</tspan><tspan class=\"cls-bold \" x=\"60.8\">|PE | PI | CE | CI | AE | AI | B | X | EE | EI | RetNat |</tspan>";
                    platilla = svg;

                }
            }
        }
        svg = svg.replace("_pajina", numeroDeHoja++);
        svg = svg.replace("titulo", titulo);
        svg = svg.replace("TextoAremplazar", textoDeHoja);
        contenedor.innerHTML += ' <div class="row justify-content-center mb-5 ">' +
            '<div class="col-12 col-md-5 mb-5 hoja">' + svg + '</div></div>';

        //  contenedor.innerHTML = filasDeTablaDeImportancia;
    }

    function descripciones(descripciones, svg, titulo) {

        let svgYposicion = 14;
        let plantilla = svg;
        let contenedor = document.getElementById("content");
        let textoDeHoja = "";

        for (descripcion in jsonDescripcion) {
            textoDeHoja += (descripcion + "\n");
            for (let i = 1; i < 8; i++) {
                let eventoTipoUno = (jsonDescripcion[descripcion]["Evento del Tipo " + i]);

                if (eventoTipoUno != undefined) {
                    eventoTipoUno = eventoTipoUno.replace(" ", "");
                    textoDeHoja += ("Evento Tipo " + i + "\n");
                    textoDeHoja += (descripciones[eventoTipoUno] + "\n");
                }
            }
        }

        let parafosDeTexto = textoDeHoja.split("\n");
        textoDeHoja = "";
        cadenalength = 0;
        let cadenadetexto = "";
        let contenedorHtml = "";
        for (let i = 0; i < parafosDeTexto.length; i++) {
            let palabras = parafosDeTexto[i].split(" ");
            for (j in palabras) {
                cadenadetexto += palabras[j] + " ";
                cadenalength += palabras[j].length + 1;
                if (cadenalength >= 70) {
                    cadenalength = 0;
                    textoDeHoja += "<tspan x=\"-55\" y=\"" + svgYposicion + "\">" + cadenadetexto + "</span>\n";
                    svgYposicion += 14;
                    cadenadetexto = "";

                    if (svgYposicion == 462) {
                        plantilla = plantilla.replace("_pajina", numeroDeHoja++);
                        plantilla = plantilla.replace("titulo", titulo);
                        plantilla = plantilla.replace("TextoAremplazar", textoDeHoja);
                        contenedorHtml += ' <div class="row justify-content-center mb-5 ">' + '<div class="col-12 col-md-5 mb-5 hoja">' + plantilla + '</div></div>';
                        plantilla = svg;
                        textoDeHoja = "";
                        svgYposicion = 14;
                    }
                }


            }

            cadenalength = 0;
            textoDeHoja += "<tspan x=\"-55\" y=\"" + svgYposicion + "\">" + cadenadetexto + "</tspan>\n";
            svgYposicion += 14;
            cadenadetexto = "";
            if (svgYposicion == 462) {
                console.log("se agrego hoja");
                plantilla = plantilla.replace("_pajina", numeroDeHoja++);
                plantilla = plantilla.replace("titulo", titulo);
                plantilla = plantilla.replace("TextoAremplazar", textoDeHoja);
                contenedorHtml += ' <div class="row justify-content-center mb-5 ">' + '<div class="col-12 col-md-5 mb-5 hoja">' + plantilla + '</div></div>';
                plantilla = svg;
                textoDeHoja = "";
                svgYposicion = 14;
            }
        }

        svg = svg.replace("_pajina", numeroDeHoja++);
        svg = svg.replace("titulo", titulo);
        svg = svg.replace("TextoAremplazar", textoDeHoja);

        contenedorHtml += ' <div class="row justify-content-center mb-5 ">' +
            '<div class="col-12 col-md-5 mb-5 hoja">' + svg + '</div></div>';
        contenedor.innerHTML += contenedorHtml;
    }
</script>
@stop