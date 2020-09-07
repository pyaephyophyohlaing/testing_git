@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center   justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Create form</h1>
		<div class="text-right">
              <a href="{{route('subcategories.index')}}"  class="btn btn-success">
                Go Back
              </a>
            </div>

	</div>
	    <div class="row">
			<div class="col-md-12">
				<form action="{{route('subcategories.store')}}" method="post" enctype="multipart/form-data">
  					@csrf
					<div class="form-group row{{
						$errors->has('name')?'has-error':''}}">
						<label for="Inputname" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name">
							<span class="text-danger">
								{{$errors->first('name')}}</span>
						</div>
					</div>	

					<div class="form-group row">
						<label for="Inputdescription" class="col-sm-2 col-form-label">Category</label>
						<select class="form-control fo-md" id="Inputsubcategories" name="category">
							<optgroup label="Choose Subcategory">
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}
								</option>
								@endforeach
							</optgroup>	
						</select>
					</div>
				
					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-info" >Create</button>
						</div>
					</div>
				</form>
</div>
</div>
</div>
@endsection	
