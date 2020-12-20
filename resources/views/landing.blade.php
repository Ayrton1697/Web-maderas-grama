<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maderas Grama</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <link  rel="icon"   href="{{asset('images/favicon.jpeg')}}" type="image/jpg" />
        <!--Font-->
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">    

    </head>
    <body>

        <section class="landing-main">

            <div class="main main-maderas">
                <img src="images/MADERAS_LOGO.png" class="logo logo-maderas" alt="">
                <span class="main-mensaje">Enterate de toda la información de nuestra empresa.</span>
                <a href="{{route('home')}}" class="btn btn-maderas">Ver más</a>
            </div>
            <div class="main main-muebles" id="main-muebles">
            <img src="images/MUEBLES_VERDE.png" class="logo logo-muebles" alt="">
            <span class="main-mensaje main-mensaje-muebles">Conocé todos nuestros productos.</span>
            <a href="{{route('tienda')}}" class="btn btn-muebles">Ver más</a>
            </div>

<!-- 
            <script>
            var photo= document.getElementById('main-muebles'); 
            window.onmousemove = function(e){
                var x = e.clientX;
                photo.style.left = x+'px';
             
            }   
       </script> -->
        </section>
 
   

    </body>
</html>
