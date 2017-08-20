function mostrar(btn){
  var route="product/showDetails/"+btn;
  $.get(route,function(res){
    $("#name").val(res.product.name);
    $("#price").val(res.product.price);
  });
}
