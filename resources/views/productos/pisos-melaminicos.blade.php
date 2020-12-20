@extends ('layouts.info')

@section('header')
<section class="section--header section--header--pisos-melaminicos"></section>
@endsection

@section('title')
Pisos melaminicos
@endsection

@section('content')

            <div class="info__text">

            Los pisos flotantes melamínicos, con más de 30 años en el mercado, son una
            elección indiscutida a la hora de pensar en pisos. La calidez de sus diseños de madera, el amplio
            abanico de tonalidades y su amistad con el medioambiente lo convierten en una alternativa
            siempre vigente.


            </div>

                            
                          
@endsection

@section('picture')


    <img src="{{asset('/images/Productos/PISO-MELAMINICO-2.jpg')}}" alt="" class="composition__picture composition__picture--2">
    <img src="{{asset('/images/Productos/PISO-MELAMINICO-3.jpg')}}" alt="" class="composition__picture composition__picture--1">
  


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