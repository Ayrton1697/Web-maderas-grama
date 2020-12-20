@extends ('layouts.info')

@section('header')
<section class="section--header section--header--pisos-madera"></section>
@endsection

@section('title')
Pisos de madera
@endsection

@section('content')

            <div class="info__text">
                        Los pisos de madera maciza le dan a los ambientes un carácter único y natural. 
                        La vivacidad de las vetas y la personalidad inconfundible de las superficies, logran espacios cálidos y equilibrados.
                        Maderas Grama le ofrece el mejor producto y asesoramiento profesional en la elección e instalación de sus pisos.
                    
                        <h2 class="heading--secondary heading--secondary--info u-margin-bottom-3 u-margin-top-3">Colocación</h2> 
                        
                        Maderas Grama recomienda dos tipos de colocacion, la fijación del piso sobre un multilaminado fenólico que puede
                            cambiar su espesor según nuestra necesidad o la fijación del piso directamente encolado al suelo con adhesivos (bi-componentes o uretánicos). 
                        Ambos tipos de colocación ofrecen un confort máximo a la pisada.

                    <h2 class="heading--secondary heading--secondary--info u-margin-bottom-3 u-margin-top-3">La humedad: factor determinante</h2> 

                        Mantener el contenido de humedad correcto para los tipos de madera y las aplicaciones en que se 
                        use es primordial para ofrecer un producto de calidad.<br>
                        Todos nuestros productos están hechos con madera secada al horno con un contenido de humedad
                        ideal, que varia con el uso para interior y exterior y la especie de madera a utilizar.


            </div>

                            
                          
@endsection

@section('picture')


    <img src="{{asset('/images/Productos/PISOS-DE-MADERA-4.png')}}" alt="" class="composition__picture composition__picture--1">
    <img src="{{asset('/images/Productos/PISO-DE-MADERA-3.jpg')}}" alt="" class="composition__picture composition__picture--2">
    <img src="{{asset('/images/Productos/PISOS-DE-MADERA-5.png')}}" alt="" class="composition__picture composition__picture--3">
    <img src="{{asset('/images/Productos/PISOS-DE-MADERA-6.png')}}" alt="" class="composition__picture composition__picture--4">


@endsection

@section('tipos')

<ul class="info__list">

                <li class="info__item">
                    <img src="{{asset('/images/Maderas/roble-americano.jpg')}}" alt="" class="info__item--picture">
                    ROBLE AMERICANO
                </li>

                <!-- <li class="info__item">
                <img src="{{asset('/images/Maderas/lapacho.jpg')}}" alt="" class="info__item--picture">    
                LAPACHO
                </li> -->

                <li class="info__item">
                <img src="{{asset('/images/Maderas/incienso.jpg')}}" alt="" class="info__item--picture">    
                INCIENSO
                </li>

                <li class="info__item">
                <img src="{{asset('/images/Maderas/viraro.jpg')}}" alt="" class="info__item--picture">    
                VIRARO
                </li>

                <li class="info__item">
                     <img src="{{asset('/images/Maderas/guayubira.png')}}" alt="" class="info__item--picture">
                     GUAYUBIRA
                </li>

                
                <li class="info__item">
                <img src="{{asset('/images/Maderas/viraro.jpg')}}" alt="" class="info__item--picture">    
                VIRARO NACIONAL
                </li>

                <li class="info__item">
                <img src="{{asset('/images/Maderas/guatambu.jpg')}}" alt="" class="info__item--picture">    
                GUATAMBU
                </li>

                <!-- <li class="info__item">
                <img src="{{asset('/images/Maderas/eucalipto.jpg')}}" alt="" class="info__item--picture">
                EUCALIPTO
                </li> -->

                <li class="info__item"> 
                    <img src="{{asset('/images/Maderas/cedro.jpg')}}" alt="" class="info__item--picture">
                CEDRO
                 </li>

                <li class="info__item">
                <img src="{{asset('/images/Maderas/paraiso.jpg')}}" alt="" class="info__item--picture">    
                PARAISO
                </li>

</ul>
@endsection