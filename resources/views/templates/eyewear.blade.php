@extends ('index')
@section ('contenido')

<div class="divnav">
    <ul class="header_principalOptions">
        <li class="divnav-item"> <a href="{{url('/')}}"> ALL            </a> </li>
        <li class="divnav-item"> <a href="{{url('/apparel')}}">APPAREL  </a> </li>
        <li class="divnav-item"> <a href="{{url('/eyewear')}}"><strong style="color:black">EYEWEAR</strong></a> </li>
        <li class="divnav-item"> <a href="{{url('/leather')}}">LEATHER  </a> </li>
    </ul>
</div>

<div class="gallery ">
    <img class="gallery_img1 fade-in one" src="http://cdn1.coppel.com/images/catalog/pm/9023143-1.jpg"   alt="" height="" width="">
    <img class="gallery_img2 fade-in two" src="https://http2.mlstatic.com/lentes-hipster-D_NQ_NP_448611-MLM20611474130_032016-F.jpg" alt="" height="" width="">
    <img class="gallery_img3 fade-in two" src="http://3.bp.blogspot.com/-mhle7bq5t3I/Tp2Wg99cL7I/AAAAAAAAAcU/Us7OwXXsv_8/s1600/anteojos.jpg" alt="" height="" width="">
</div>

@endsection