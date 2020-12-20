@extends('layouts.info')

@section('header')
<section class="section--header section--header--pergolas"></section>
@endsection

@section('title')
Pergolas
@endsection

@section('content')

            <div class="info__text">
                 Las Pérgolas deben construirse con maderas duras, que son las apropiadas, para
                permitirles soportar una vida prolongada a la intemperie.<br>
                Las pérgolas de madera se utilizan en espacios exteriores, para dar un marco de calidez y
                sensación de confortabilidad a un sector determinado.<br>
                Se pueden hallar una infinidad de diseños, con distintos tipos de madera. A partir de esta
                posibilidad, se proyectan para filtrar la luz, sin generar un espacio totalmente cerrado y atenuando
                tanto el frío como el calor. Esto permite que tanto las corrientes de aire como el sol pasen en la
                medida deseada, generando espacios semi-cubiertos muy agradables.
            </div>

                            
                          
@endsection

@section('picture')
<img src="{{asset('/images/Productos/PERGOLA-1.jpg')}}" alt="" class="composition__picture composition__picture--1">
<img src="{{asset('/images/Productos/PERGOLA-2.jpg')}}" alt="" class="composition__picture composition__picture--2">
<img src="{{asset('/images/Productos/PERGOLA-3.jpg')}}" alt="" class="composition__picture composition__picture--3">

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