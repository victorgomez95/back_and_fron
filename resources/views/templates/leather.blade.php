@extends ('index')
@section ('contenido')

<div class="divnav">
    <ul class="header_principalOptions">
        <li class="divnav-item"> <a href="{{url('/')}}"> ALL           </a> </li>
        <li class="divnav-item"> <a href="{{url('/apparel')}}">APPAREL </a> </li>
        <li class="divnav-item"> <a href="{{url('/eyewear')}}">EYEWEAR </a> </li>
        <li class="divnav-item"> <a href="{{url('/leather')}}"><strong style="color:black">LEATHER</strong></a></a> </li>
    </ul>
</div>

<div class="gallery ">
    <img class="gallery_img1 fade-in one"   src="https://www.forbes.com.mx/2015/10/11062021_899218330151203_5524637154558932563_n.jpg"   alt="" height="" width="">
    <img class="gallery_img6 fade-in one"   src="http://cdn1.coppel.com/images/catalog/pm/9023143-1.jpg"   alt="" height="" width="">
    <img class="gallery_img2 fade-in two"   src="https://media.gucci.com/style/DarkGray_South_0_160_316x316/1463730311/443436_DRW1T_6433_001_100_0000_Light-Cartera-Continental-GG-Marmont.jpg" alt="" height="" width="">
    <img class="gallery_img3 fade-in three" src="http://cdn1.coppel.com/images/catalog/pr/1321442-1.jpg" alt="" height="" width="">
    <img class="gallery_img4 fade-in two"   src="http://www.amedisk.com/images/Chaqueta%20Black%20Rock%20Hooded%20Leather%20Black%20BU3119-02A.jpg" alt="" height="" width="">
</div>

@endsection