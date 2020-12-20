<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script>
    <link  rel="icon"   href="{{asset('images/favicon.jpeg')}}" type="image/jpg" />
       <!-- Styles -->
       
       <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  
    <title>Maderas Grama</title>
</head>
<body>
<nav class="navigation" style="padding:1rem">

<a href="{{route('home')}}" class="navigation__link">
    <div class="grama__logo">
        <img src="{{asset('images/3grama-blanco.jpeg')}}" alt="" class="home--logo">
        <h1 class="heading--primary--home">MaderasGrama</h1>
    </div>
</a>

       
                <input type="checkbox" id="navi-toggle" class="navigation__checkbox">
                <label for="navi-toggle" class="navigation__button">
                <i class="fas fa-bars"></i>
                </label>
                <div class="navigation__background">&nbsp;</div>

         <ul class="navigation__list">
                <li class="navigation__item"><a href="{{route('home')}}" class="navigation__link">Inicio</a></li>
                <li class="navigation__item"><a href="{{route('home')}}#productos" class="navigation__link">Productos</a></li>
                <li class="navigation__item"><a href="{{route('home')}}#nosotros" class="navigation__link">Nosotros</a></li>
                <li class="navigation__item"><a href="{{route('home')}}#servicios" class="navigation__link">Servicios</a></li>
                <li class="navigation__item"><a href="{{route('home')}}#clientes" class="navigation__link">Clientes</a></li>
                <li class="navigation__item"><a href="{{route('home')}}#contacto" class="navigation__link">Contacto</a></li>
                <li class="navigation__item  item__tienda"><a href="{{route('tienda')}}" class="navigation__link">Tienda</a></li>
         </ul>
         
         <script>
        
                        // Select DOM items
                const navLink = document.querySelectorAll('.navigation__item'); // nav item class
                const checkbox = document.querySelector('.navigation__checkbox'); //checkbox class

                // Add Event Listener to every nav link
                for (let i = 0; i < navLink.length; i++) {
                navLink[i].addEventListener('click', checkboxOff);
                }

                // Uncheck checkbox
                function checkboxOff() {
                checkbox.checked = false;
                }

                </script>
     </nav>
   
    
    <section class="section-info-main">

                @yield('header')

                <section class="section-info">
                    
                    <h2 class="heading--secondary heading--secondary--info">@yield('title')</h2>
                    
                    <div class="info">

                            @yield('content')

                                <div class="info__photo">
                                   @yield('picture')
                                </div>

                    </div>
                    
                    <div class="tipos__madera">

                     @yield('tipos')

                    </div>

                </section>

                <div class="cotizacion">
                <a href="{{route('home')}}#contacto" class="btn btn-cotizacion">PEDI TU COTIZACION</a>
                </div>
    </section>

<footer class="footer">

        <div class="footer__socials">
                <ul class="footer__socials-list">
                    <li class="footer__item"><a href="https://www.instagram.com/maderasgrama/?hl=es-la" class="footer__link"><i class="fab fa-instagram fa-2x"></i></a></li>
                    <li class="footer__item"><a href="https://www.facebook.com/maderasgramaok/" class="footer__link"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                    <li class="footer__item"><a href="" class="footer__link"><i class="fab fa-whatsapp fa-2x"></i></a></li>
            
                </ul>
            </div>
      

        <ul class="footer__list">
                <li class="footer__item"><a href="{{route('home')}}" class="footer__link">Inicio</a></li>
                <li class="footer__item"><a href="{{route('home')}}#productos" class="footer__link">Productos</a></li>
                <li class="footer__item"><a href="{{route('home')}}#servicios" class="footer__link">Servicios</a></li>
                <li class="footer__item"><a href="{{route('home')}}#clientes" class="footer__link">Clientes</a></li>
                <li class="footer__item"><a href="{{route('home')}}#contacto" class="footer__link">Contacto</a></li>
                <li class="footer__item"><a href="{{route('tienda')}}" class="footer__link">Tienda</a></li>
        </ul>
        <div class="footer__logo">
         
         <img src="{{asset('images/MADERAS_LOGO.png')}}" alt="" class="footer__logo--image">
     </div>
    

</footer>
</body>
</html>