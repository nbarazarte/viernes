@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      
		<div class="panel panel-primary">
			<div class="panel-heading">Reportar Mascota</div>
			<div class="panel-body">
			
				{!! Form::open(['route' => 'reportar', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false', 'onsubmit' => '']) !!} 

				  <div class="form-group">
				    <label for="mascota">Nombre de la mascota</label>
				    <input type="text" class="form-control" id="mascota" name="mascota" aria-describedby="" placeholder="Ingrese el nombre de la mascota">				  
				  </div>

				  <div class="form-group">
				    <label for="dueno">Dueño de la mascota</label>
				    <input type="text" class="form-control" id="dueno" name="dueno" aria-describedby="" placeholder="Ingrese el dueño de la mascota">				  
				  </div>

				  <button type="submit" class="btn btn-primary">Guardar</button>

				 {!! csrf_field() !!} 

                {!! Form::close() !!}

			</div>
		</div>

    </div>
  </div>
</div>

@endsection