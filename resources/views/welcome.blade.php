<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
          </div>

         <div class="content">
            <div class="title m-b-md">
                Galapagos
            </div>
            <div class="links">
              <a href="{{ route ('Merch','ALL')}}">ALL</a>
              @foreach($types as $type)
                <a href="{{ route ('Merch', $type->name )}}">{{$type->name}}</a>
              @endforeach
            </div>
            <br></br>
            <table class="table" align="center">
              <thead>
                <th>Name of new product</th>
                <th>Description</th>
                <th>Price</th>
                <th>Picture</th>
                <th colspan="2">Type</th>
              </thead>
              <tbody>
                <tr>
                  {!!Form::open(['route'=>'product.store', 'method'=>'POST','files' => true])!!}
                    <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token"></input>
                    <td><input type="text" name="name"></input></td>
                    <td><input type="text" name="description"></input></td>
                    <td><input type="number" name="price" step="0.01" min="1"></input></td>
                    <td><input type="file" name="picture"></input></td>
                    <td><select name="type_id">
                      	<?php foreach ($types as $type) { ?>
                      		<option value="<?php echo $type->id ?>"><?php echo $type->name;?></option>
                      	<?php } ?>
                       </select>
                    </td>
                    <td>{!!Form::submit('Add',['class'=>'btn btn-success'])!!}</td>
                  {!!Form::close()!!}
                </tr>
              </tbody>
            </table>
            <br></br>
            <table align="center">
              <thead>
                <th>Product</th>
                <th>Price</th>
                <th>Type</th>
                <th>Image</th>
                <th>Actions</th>
              </thead>
              @foreach($products as $product)
                <?php
                  $mysqli = new mysqli("localhost", "root", "", "test");
                  if ($mysqli->connect_errno) {
                      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                  }
                  $acentos = $mysqli->query("SET NAMES 'utf8'");
                  //Get the id of the merch
                  $type_id=$product->type_id;
                  //Getting the data about the type, most important is the name of the category
                  $query = $mysqli->query("select * from merchtypes where id='$type_id'");
                  $row = $query->fetch_assoc();
                  $type = $row['name'];
                ?>
              <tbody>
                <td>{{$product->name}}</td>
                <td>{{'$'.$product->price}}</td>
                <td><?php echo $type; ?></td>
                <?php
                  if ($product->picture == null) {
                    $pic = "fashion.jpg";
                  }
                  else {
                    $pic = $product->picture;
                  }
                 ?>
                @if ($product->id <= 15)
                  <td><img src={{$pic}} width="100" height="85"></img></td>
                @endif
                @if ($product->id > 15)
                  <td><img src="../products_images/{{$pic}}" width="100" height="85"/></td>
                @endif
                <td>
                  <button  type="button" value="<?php  echo $product->id?>"
                    Onclick="mostrar(this.value);" class="btn btn-info btn-sm" data-toggle='modal'
                    data-target='#myModal'>Edit product</button>
                </td>
                <td>
                  {!!Form::model($product,['route'=>['product.destroy',$product->id],'method'=>'DELETE'])!!}
          <button type="submit" onclick="return confirm('¿Do you really want to delete this item?')" class="btn-danger btn-sm">Delete product</button>
                </td>
              </tbody>
            @endforeach
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Datail of selected product</h4>
              </div>
              <div class="modal-body">
                @include('layouts.product')
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
    </body>
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    {!!Html::script('js/popup.js')!!}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</html>
