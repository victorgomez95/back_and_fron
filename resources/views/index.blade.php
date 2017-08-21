<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="{{asset('js/animations.js')}}"></script>

    </head>
    <body>
        <div class="header">
        </div>
        <div class="subheader">
            <div id="subheader-sroll"> 
                <nav>
                    <a href="" class="nav-link"> OUR HISTORY </a>
                    <a href="" class="nav-link"> LOOK BOOK   </a>
                    <a href="" class="nav-link"> BLOG        </a>
                    <a href="" class="nav-link"> CONTACT     </a>
                    <a href="" class="nav-link"> READ ME     </a>
                </nav>
            </div>
            <div class="buttom_admin">
                <a href="{{url('/producto')}}" class="action-button shadow animacion azul">ADMIN</a>
            </div>
        </div>

        <div class="mainTitle">
            <em><h2 align="center">Galapagos</h2></em>
        </div>

        

        <div class="principalGalery">
            @yield('contenido')
            
        </div>

        <div class="spacer"> </div>


        <footer >
            <div class="marcaFooter">
                <h3><strong>Powered by Squarespace</strong></h3>
                <ul class="footer_principalOptions">
                    <li class="divnav-item-footer"> <a href="">Shipping & Returns  </a> </li>
                    <li class="divnav-item-footer"> <a href="">Terms & Privacy     </a> </li>
                    <li class="divnav-item-footer"> <a href="">FAQ                 </a> </li>
                </ul>
            </div>
        </footer>

    </body>
</html>
