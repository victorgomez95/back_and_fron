@extends ('index')
@section ('contenido')

<div class="divnav">
    <ul class="header_principalOptions">
        <li class="divnav-item"> <a href="{{url('/')}}"> <strong style="color:black">ALL</strong> </a>  </li>
        <li class="divnav-item"> <a href="{{url('/apparel')}}">APPAREL</a> </li>
        <li class="divnav-item"> <a href="{{url('/eyewear')}}">EYEWEAR</a> </li>
        <li class="divnav-item"> <a href="{{url('/leather')}}">LEATHER</a> </li>
    </ul>
</div>

<div class="gallery ">
    <img class="gallery_img1 fade-in one"   src="http://media.misako.com/media/catalog/product/cache/1/small_image/600x/9df78eab33525d08d6e5fb8d27136e95/2/7/2700068-misako-nati-bolso.jpg"   alt="" height="" width="">
    <img class="gallery_img2 fade-in one"   src="http://cdn1.coppel.com/images/catalog/pm/9023143-1.jpg"   alt="" height="" width="">
    <img class="gallery_img3 fade-in two"   src="http://www.amedisk.com/images/Chaqueta%20Black%20Rock%20Hooded%20Leather%20Black%20BU3119-02A.jpg" alt="" height="" width="">
    <img class="gallery_img4 fade-in two"   src="https://media.gucci.com/style/DarkGray_South_0_160_316x316/1463730311/443436_DRW1T_6433_001_100_0000_Light-Cartera-Continental-GG-Marmont.jpg" alt="" height="" width="">
    <img class="gallery_img5 fade-in three" src="https://http2.mlstatic.com/lentes-hipster-D_NQ_NP_448611-MLM20611474130_032016-F.jpg" alt="" height="" width="">
    <img class="gallery_img6 fade-in three" src="https://cdn.shopify.com/s/files/1/0815/9347/products/60103554-musgo_large.jpg?v=1487014917" alt="" height="" width="">
    <img class="gallery_img7 fade-in four"  src="http://4.bp.blogspot.com/-M6-sIWHm5GM/VkHYHWkCaHI/AAAAAAAAbew/8kyzEWeE6uI/s1600/diy%2Btutoriales%2Bpatrones%2Bfalda%2Bmidi%2Bvalentino%2Bcomo%2Bhacer%2B03.JPG" alt="" height="" width="">
    <img class="gallery_img8 fade-in four"  src="http://cdn1.coppel.com/images/catalog/pr/1321442-1.jpg" alt="" height="" width="">
</div>

@endsection