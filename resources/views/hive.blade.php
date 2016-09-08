@extends('layouts.master')

@section('title', 'Hive')

@section('content')
    <div class="col-md-11">
        <div class="well well-lg">
            <div class="row">
                <div class="col-md-6">
                    <h4>Colmena Hexagonal Modelo Vincent</h4>

                    <p>
                        La colmena consiste en un poste central que aglutina las cajas que están dispuestas
                        verticalmente y apoyadas sobre una base. La entrada de la colmena está dispuesta en la parte
                        superior de la torre de cajas y el panal de miel crece hacia abajo mediante el uso de
                        reglas/barras superiores con ranuras en el centro, las cuales se rellenar con cera; para sugerir
                        la orientación de crecimiento de los panales de miel. Las cajas calzan unas con otras y la torre
                        de estas se apoya en la base en la parte inferior y una tapa en la parte superior. La cubierta
                        tiene un espacio de aire horizontal con dos pistas de aterrizaje conectados al poste para guiar
                        la orientación de vuelo.
                    </p>

                    <p>
                        Las cajas son de forma hexagonal. Se demostró que las esquinas agudas (ángulos rectos de
                        90° en particular) de las cajas rectangulares del tipo Langstroth facilitan la proliferación de
                        ácaros de la Varroa y son difíciles de proteger mientras los ángulos abiertos de 120° de las
                        cajas hexagonales les permite a las abejas eliminar a los ácaros de Varroa muy fácilmente. También fue demostrado que la forma hexagonal ayuda a la extracción de panales más
                        rectos con el uso de reglas/barras superiores pero se recomienda más investigación para
                        determinar las configuraciones óptimas.
                    </p>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('images/beehive/a1.png') }}" class="img-responsive" alt="beehive">
                    <img src="{{ asset('images/beehive/a2.png') }}" class="img-responsive" alt="beehive">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <p>
                        El poste central está cortado y unido con bisagras en la base y tiene un soporte de pivote
                        plegable de modo que las cajas de la colmena se pueden rotar durante la cosecha y proceso
                        de selección de la nueva reina. El énfasis principal de la investigación es determinar la salud y
                        la fuerza de las generaciones sucesivas de las colonias que se propagan de la misma colmena.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/beehive/a3.png') }}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-1">
        @include('shared.share_buttons')
    </div>
@endsection
