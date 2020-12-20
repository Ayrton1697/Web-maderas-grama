@extends('layouts.info')

@section('header')
<section class="section--header section--header--revestimientos"></section>
@endsection

@section('title')
Revestimientos
@endsection

@section('content')

            <div class="info__text">
                                       
            Nuestros revestimientos en madera para pared son la combinación ideal de
            diseño y elegancia para dar forma y estilo a diferentes espacios de interiores. Desde ambientes y
            espacios de viviendas particulares hasta grandes obras comerciales donde la madera es
            protagonista. <br>
            La madera es un material muy sensible a los cambios de temperatura y humedad, por eso
            trabajamos con los tipos de madera maciza más apta para este tipo de desarrollos

            </div>

                            
                          
@endsection

@section('picture')


    <img src="{{asset('/images/Productos/REVESTIMIENTO-2.jpg')}}" alt="" class="composition__picture composition__picture--1">
    <img src="{{asset('/images/revestimiento.jpg')}}" alt="" class="composition__picture composition__picture--2">
 


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