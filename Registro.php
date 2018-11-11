@extends('master')
@section('content')

    <form method="post" action={{route('usuario.store')}} enctype ="multipart/form-data" class="px-4 py-3">
    @csrf
    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<img src="" alt="Logo VKWeb">
              <h5 class="panel-title" align="center"> Registro </h5>
			 			</div>
          </br>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Nombre">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Apellido Paterno">
			    					</div>
			    				</div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="second_last_name" id="second_last_name" class="form-control input-sm" placeholder="Apellido Materno">
			    					</div>
			    				</div>
			    			</div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Selecciona tu rol:</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Alumno</option>
                    <option>Maestro</option>
                  </select>
                </div>
            </div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Correo Electrónico">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirmar">
			    					</div>
			    				</div>

                    <div class="input-group mb-3" class="form-group">
                      <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>

			    			</div>

			    			<input type="submit" value="Registrar" class="btn btn-info btn-block">

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

</form>

@endsection
