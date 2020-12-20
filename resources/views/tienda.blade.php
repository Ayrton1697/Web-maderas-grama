<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon"   href="images/favicon.jpeg" type="image/jpg" />
          <!-- Styles -->
          <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Maderas Grama: Tienda</title>
</head>
<body>

<section class="tienda">


        <nav class="navigation">

            <a href="{{route('home')}}" class="navigation__link">
            <div class="grama__logo">
                    <img src="images/3grama-blanco.jpeg" alt="" class="home--logo">
                    <h1 class="heading--primary--home">MaderasGrama</h1>
            </div>
            </a>

            <input type="checkbox" id="navi-toggle" class="navigation__checkbox">
            <label for="navi-toggle" class="navigation__button">
            <i class="fas fa-bars"></i>
            </label>
            <div class="navigation__background">&nbsp;</div>

                <ul class="navigation__list">
                    <li class="navigation__item"><a href="{{route('home')}}#main" class="navigation__link">Inicio</a></li>
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

    <div class="tienda__container">

        <div class="product">
            <div class="product__img">


            </div>
            <div class="product__title">  Silla de madera</div>
            <div class="product__info">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Dolores, architecto. Impedit sint illum neque molestiae assumenda
            </div>
            <div class="product__cta">
            <button class="product__add btn btn-tienda">Agregar</button>
            <span class="product__price">$1500</span>
            </div>
         
        </div>

        <div class="product">
            <div class="product__img"></div>
            <div class="product__title">Mesa de roble americano</div>
            <div class="product__info">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Dolores, architecto. Impedit sint illum neque molestiae assumenda
            </div>
            <div class="product__cta">
            <button class="product__add btn btn-tienda">Agregar</button>
            <span class="product__price">$1500</span>
            </div>
        </div>

        
        <div class="product">
            <div class="product__img"></div>
            <div class="product__title">  Escritorio</div>
            <div class="product__info">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Dolores, architecto. Impedit sint illum neque molestiae assumenda
                 
            </div>
            <div class="product__cta">
            <button class="product__add btn btn-tienda">Agregar</button>
            <span class="product__price">$1500</span>
            </div>
        </div>

              
        <div class="product">
            <div class="product__img"></div>
            <div class="product__title">  Escritorio</div>
            <div class="product__info">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Dolores, architecto. Impedit sint illum neque molestiae assumenda
                 
            </div>
            <div class="product__cta">
            <button class="product__add btn btn-tienda">Agregar</button>
            <span class="product__price">$1500</span>
            </div>
        </div>

              
        <div class="product">
            <div class="product__img"></div>
            <div class="product__title">  Escritorio</div>
            <div class="product__info">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Dolores, architecto. Impedit sint illum neque molestiae assumenda
                 
            </div>
            <div class="product__cta">
            <button class="product__add btn btn-tienda">Agregar</button>
            <span class="product__price">$1500</span>
            </div>
        </div>

        <div class="product">
            <div class="product__img"></div>
            <div class="product__title">  Escritorio</div>
            <div class="product__info">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Dolores, architecto. Impedit sint illum neque molestiae assumenda
                 
            </div>
            <div class="product__cta">
            <button class="product__add btn btn-tienda">Agregar</button>
            <span class="product__price">$1500</span>
            </div>
        </div>


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