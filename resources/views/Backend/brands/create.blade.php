@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center   justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brand Create form</h1>
		<div class="text-right">
              <a href="{{route('brands.index')}}"  class="btn btn-success">
                Go Back
              </a>
            </div>

	</div>
	<div class="row">
			<div class="col-md-12">
				<form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
  					@csrf
					

					<div class="form-group row{{
						$errors->has('name')?'has-error':''}}">
						<label for="Inputname" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" id="Inputname">
							<span class="text-danger">
								{{$errors->first('name')}}</span>
						</div>
					</div>

					<div class="form-group row{{
						$errors->has('photo')?'has-error':''}}">
						<label for="Inputphoto" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-5">
							<input type="file" class="form-control" name="photo">
							<span class="text-danger">
								{{$errors->first('photo')}}</span>
						</div>
					</div>	
					
					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary" >Create</button>
						</div>
					</div>
				</form>	
			</div>
	</div>
</div>

@endsection	
