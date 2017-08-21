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
			<div class="title m-b-md">
				Galapagos
			</div>
		</div>

		<br><br>

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h3>Editar Usuario  </h3>
				
				@if (count($errors)>0)
					<div class="alert alert-danger">
						<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
						</ul>
					</div>
					
				@endif
			</div>
		</div>
{!!Form::open(array( 'url'=>['product',$Product->id],'method'=>'PATCH','autocomplete'=>'off','files'=>'true'))!!}
{{Form::token()}}

	<div class="row">

		<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Información General</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
					<label for="nombre">Name <font style="color:red">*</font></label>
					<input type="text" name="name" class="form-control" value="{{$Product->name}}" placeholder="Nombre..." required>
                </div>
                <div class="form-group">
                  	<label for="nombre">price <font style="color:red">*</font></label>
					<input type="number" name="price" class="form-control" value="{{$Product->price}}" placeholder="Apellidos" required>
                </div>


				<div class="form-group">
					<label for="imagen">Picture</label>
					<input type="file" name="picture" class="form-control">
				</div>

				@if($Product->picture!='N/A' && $Product->picture!='')
				<div class="col-md-6">
					<div align="center"  class="col-lg-12 ">
						<img id="myImg" class="img-rounded img-responsive" alt="" src="{{asset('products_images/'.$Product->picture)}}" width="150px" height="150px">
					</div>
				</div>
				@endif
				<div class="col-md-6">
					<div align="center" class="box-footer">
						<button class="btn btn-primary" type="submit">Guardar</button>
						<button class="btn btn-danger" type="reset">Cancelar</button>
					</div>
				</div>

              </div>
          </div>
        </div>

		
		
	</div>


    </body>
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    {!!Html::script('js/popup.js')!!}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</html>

