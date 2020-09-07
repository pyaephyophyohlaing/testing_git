@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center   justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category Edit form</h1>
		<div class="text-right">
                <a href="{{route('categories.index')}}"  class="btn btn-success">
                   Go Back
                </a>
            </div>
	</div>
	
	<div class="row">
			<div class="col-md-12">
				<form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
  					@csrf
  					@method('PUT')
					

					<div class="form-group row">
						<label for="Inputname" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" 
							value="{{$category->name}}">
						</div>
					</div>

					<div class="form-group row">
						<label for="Inputphoto" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-5">
							<input type="file" class="form-control" name="photo">

							<img src="{{asset($category->photo)}}"  class="img-fluid w-25">

							<input type="hidden" name="oldphoto" value="{{$category->photo}}">
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary" >Update</button>
						</div>
					</div>
				</form>	
			</div>
	</div>
</div>

@endsection	
