<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  rel="icon"   href="images/favicon.jpeg" type="image/jpg" />
        <title>Maderas Grama</title>
      
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <!--Font-->
           
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script>

    </head>
    <body>
    <section class="section-main" id="main">
    
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

            <div class="container">
                   

                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                          
                        <div class="swiper-slide swiper-slide--1">
                          <div class="swiper__text u-margin-bottom-5">
                                <h2 class="heading--swiper">Pisos de madera</h2>
                                
                          </div>
                          <a rel="stylesheet" href="{{route('pisos-madera')}}" class="btn btn-home">Ver más</a>
                        </div>

                        <div class="swiper-slide swiper-slide--2">
                        <div class="swiper__text u-margin-bottom-5">
                                <h2 class="heading--swiper">Decks</h2>
                                
                        </div>
                          <a rel="stylesheet" href="{{route('decks')}}" class="btn btn-home">Ver más</a>
                        </div>

                        <div class="swiper-slide swiper-slide--3">
                        <div class="swiper__text u-margin-bottom-5">
                                <h2 class="heading--swiper">Escaleras</h2>
                                
                        </div>
                        <a rel="stylesheet" href="{{route('escaleras')}}" class="btn btn-home">Ver más</a>
                        </div>
                    
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <!-- Swiper JS -->
                    <section class="section-about-us" id="nosotros">
                        <h2 class="heading--secondary u-margin-bottom-10">Nosotros</h2>

                        <div class="about-us">
                            <div class="about-us__text">
                                  Maderas Grama nace hace más de 20 años, desde ese entonces nos dedicamos a
                                  la comercialización y a la colocación de pisos de madera, deck, pergolas y más. 
                                  Contamos con el aprendizaje y la experiencia adquirida durante toda nuestra amplia
                                  trayectoria para brindarles a nuestros clientes la mejor experiencia, ayudándolos 
                                  a poder plasmar sus ideas.<br>

                                  Seguimos un estricto control de calidad y
                                  seguimiento durante todo el proceso de creación, fabricación, entrega e instalación.

                                  Nuestro mayor compromiso es satisfacer a nuestros
                                  clientes dándoles la atención y el servicio que requieren , así como 
                                  los productos que necesita para llevar a cabo su proyecto.<br>

                                  Seguimos en constante crecimiento para poder llegar
                                  a todas aquellas empresas/consumidores que buscan recibir un trato personal 
                                  especializado además de material que cumpla con los estándares de calidad.
                            </div>

                            <div class="about-us__picture">
                           
                              <img src="images/about-us.jpg" alt="" class="about-us__photo about-us__photo--1">
                             
                            </div>

                        </div>

                    </section>

                    <section class="section-products" id="productos">
                    
                        <h2 class="heading--secondary u-margin-bottom-10">Productos</h2>

                        <div class="products__content">
                            <div class="products__card products__card--1">
                              <div class="products__text"> Madera Maciza

                              <a rel="stylesheet" href="{{route('maderas')}}" class="btn btn-home">Ver más</a>
                              </div> 
                             
                            </div>
                            <div class="products__card products__card--2">
                              <div class="products__text"> Chapa de madera
                              <a rel="stylesheet" href="{{route('chapa-de-madera')}}" class="btn btn-home">Ver más</a>
                              </div> 
                            </div>
                            <div class="products__card products__card--3">
                              <div class="products__text">Pisos de madera maciza
                              <a rel="stylesheet" href="{{route('pisos-madera')}}" class="btn btn-home">Ver más</a>
                              </div> 
                            </div>
                            <div class="products__card products__card--4">
                             <div class="products__text">Decks
                               <a rel="stylesheet" href="{{route('decks')}}" class="btn btn-home">Ver más</a>
                             </div> 
                            </div>
                            <div class="products__card products__card--5">
                             <div class="products__text">Escaleras
                               <a rel="stylesheet" href="{{route('escaleras')}}" class="btn btn-home">Ver más</a>
                             </div> 
                            </div>
                            <div class="products__card products__card--6">
                             <div class="products__text">Pergolas
                               <a rel="stylesheet" href="{{route('pergolas')}}" class="btn btn-home">Ver más</a>
                             </div> 
                            </div>
                            <div class="products__card products__card--7">
                             <div class="products__text"> Revestimientos
                               <a rel="stylesheet" href="{{route('revestimientos')}}" class="btn btn-home">Ver más</a>
                             </div> 
                            </div>
                            <div class="products__card products__card--8">
                             <div class="products__text">Pisos Melaminicos
                               <a rel="stylesheet" href="{{route('pisos-melaminicos')}}" class="btn btn-home">Ver más</a>
                             </div> 
                            </div>
                            <div class="products__card products__card--9">
                             <div class="products__text"> Zocalos
                               <a rel="stylesheet" href="{{route('zocalos')}}" class="btn btn-home">Ver más</a>
                             </div> 
                            </div>
                        </div>
                    </section>

                  <section class="section-intersection section-intersection--1">
                  <h2 class="heading--intersection">Nuestra calidad nos diferencia</h2>

                  </section> 
                  
                  <section class="section-services" id="servicios">
                    <h2 class="heading--secondary  u-margin-bottom-10">Servicios</h2>

                    <div class="services">
                        <div class="services__card services__card--1">
                          <div class="services__name">Pulido</div>

                            <div class="services__info">
                              De acuerdo a su instalación el pulido se realiza
                               garantizando una terminación de excelencia para cada tipo de piso de madera
                            </div>
                            
                          </div>
                        <div class="services__card services__card--2">
                             <div class="services__name">Instalaciones</div>

                            <div class="services__info">
                              Tenemos a nuestra disposición personal altamente capacitado 
                              y especializado en la instalación/colocación de pisos,
                              escaleras, decks y pérgolas.
                            </div>
                        </div>

                        <div class="services__card services__card--3">
                             <div class="services__name">Reparaciones</div>

                            <div class="services__info">
                            Las reparaciones se realizan exclusivamente sobre las piezas de 
                            madera dañadas reemplazando las mismas de manera específica.
                            </div>
                        </div>
                        <div class="services__card services__card--4">
                          <div class="services__name">Terminaciones</div>

                          <div class="services__info">
                            El hidrolaqueado renueva y resalta el aspecto natural de
                             la madera uso de productos de primera linea y maquinas de ultima tecnología, libres de polvo.
                          </div>
                        </div>
                        <div class="services__card services__card--5">
                          <div class="services__name">Services</div>

                          <div class="services__info">
                            Mantenemos el color y el cuidado de la pieza como si estuviera recientemente colocada.
                          </div>
                        </div>
                    </div>



                    </section>

                    <section class="section-intersection section-intersection--2">
                     <h2 class="heading--intersection">Realizamos asesoramiento</h2>

                   </section> 

                      <section class="section-clients" id="clientes">

                        <h2 class="heading--secondary">Clientes</h2>

                        <!-- Swiper -->
                        <div class="swiper-container swiper-container--clients">
                                    <div class="swiper-wrapper">
                                      
                                    <div class="swiper-slide swiper-slide--clientes--1">
                                    
                                            <div class="swiper__clientes">
                                                   <img src="images/Logos/lacoste.png" alt="" class="clientes__image">
                                              </div>
                                              <div class="swiper__clientes">
                                                   <img src="images/Logos/levis.jpg" alt="" class="clientes__image">
                                              </div>
                                              <div class="swiper__clientes">
                                                   <img src="images/Logos/toyota.png" alt="" class="clientes__image">
                                              </div>
                                              <div class="swiper__clientes">
                                                   <img src="images/Logos/bensimon.png" alt="" class="clientes__image">
                                              </div>
                                                 
                                          
                                
                                      
                                    </div>

                                    <div class="swiper-slide swiper-slide--clientes--1">
                                         
                                            <div class="swiper__clientes">
                                                   <img src="images/Logos/galicia.png" alt="" class="clientes__image">
                                              </div>
                                              <div class="swiper__clientes">
                                                   <img src="images/Logos/sudamericana2.jpg" alt="" class="clientes__image">
                                              </div>
                                              <div class="swiper__clientes">
                                                   <img src="images/Logos/nordelta.jpg" alt="" class="clientes__image">
                                              </div>
                                              <div class="swiper__clientes">
                                                   <img src="images/Logos/sofitel.png" alt="" class="clientes__image">
                                              </div>
                                    </div>

                                    <div class="swiper-slide swiper-slide--clientes--1">
                                           
                                             <div class="swiper__clientes">
                                                   <img src="images/Logos/penguin.jpg" alt="" class="clientes__image">
                                              </div>
                                              <div class="swiper__clientes">
                                                   <img src="images/Logos/wrangler.png" alt="" class="clientes__image">
                                              </div>
                                              <div class="swiper__clientes">
                                                   <img src="images/Logos/uade.png" alt="" class="clientes__image">
                                              </div>
                                              <div class="swiper__clientes">
                                                   <img src="images/Logos/chateau.png" alt="" class="clientes__image">
                                              </div>
                                    </div>
                                
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>

                                <!-- Swiper JS -->

                    </section>

                    <section class="section-contacto" id="contacto">
                      <h2 class="heading--secondary u-margin-bottom-10">Contacto</h2>


                      <form action="" class="form">

                        <input type="email" class="form__input" placeholder="Email">
                        <input type="text" class="form__input" placeholder="Nombre">
                        <textarea type="text" class="form__textarea" placeholder="Dejanos tu mensaje"></textarea>

                    </form>

                                   <iframe src="https://www.atlistmaps.com/map/dd926e03-7cf6-4415-81ce-ee3af1eca9e3?share=true" 
                                  allow="geolocation" width="100%" height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>
                   
                   
                                  
                   
                    </section>
                                
             </div>
                
          

    </section>
      
   
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
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
