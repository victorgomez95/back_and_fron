@extends ('index')
@section ('contenido')

<div class="divnav">
    <ul class="header_principalOptions">
        <li class="divnav-item"> <a href="{{url('/')}}"> ALL            </a> </li>
        <li class="divnav-item"> <a href="{{url('/apparel')}}"><strong style="color:black">APPAREL</strong> </a> </li>
        <li class="divnav-item"> <a href="{{url('/eyewear')}}">EYEWEAR  </a> </li>
        <li class="divnav-item"> <a href="{{url('/leather')}}">LEATHER  </a> </li>
    </ul>
</div>

<div class="gallery ">
    <img class="gallery_img1 fade-in one"   src="https://www.forbes.com.mx/2015/10/11062021_899218330151203_5524637154558932563_n.jpg"   alt="" height="" width="">
    <img class="gallery_img6 fade-in two"   src="https://1.bp.blogspot.com/-JEj6IqoQ3zQ/V2PyOcNniXI/AAAAAAAAeCM/dMYJ_sOix0IRCHwYVb0JgRIeQRPHYXe7gCLcB/s1600/diy%2Btutorial%2Bpatrones%2Bgratis%2Bblusa%2Bmujer%2B03.JPG" alt="" height="" width="">
    <img class="gallery_img1 fade-in three" src="http://media.misako.com/media/catalog/product/cache/1/small_image/600x/9df78eab33525d08d6e5fb8d27136e95/2/7/2700068-misako-nati-bolso.jpg"   alt="" height="" width="">
    <img class="gallery_img6 fade-in four"  src="http://es.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-neverfull-gm-lona-monogram-bolsos--M41180_PM2_Front%20view.jpg" alt="" height="" width="">
</div>

@endsection