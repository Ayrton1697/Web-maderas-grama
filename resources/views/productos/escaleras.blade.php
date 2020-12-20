@extends ('layouts.info')

@section('header')
<section class="section--header section--header--escaleras"></section>
@endsection

@section('title')
Escaleras
@endsection

@section('content')

            <div class="info__text">

            Las escaleras de madera le otorgan al ambiente importancia y estilo,
            conjugando los lineamientos del diseño de su casa con la nobleza y naturalidad
            propia de la madera.<br>
            Maderas Grama le ofrece el mejor producto y asesoramiento profesional en el diseño y la 
            construcción de la escalera de su ambiente.


            </div>

                            
                          
@endsection

@section('picture')


    <img src="{{asset('/images/Productos/ESCALERA-DE-MADERA-4.jpg')}}" alt="" class="composition__picture composition__picture--1">
    <img src="{{asset('/images/Productos/ESCALERA-DE-MADERA-5.jpg')}}" alt="" class="composition__picture composition__picture--2">
 


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