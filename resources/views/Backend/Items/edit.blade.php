@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center   justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Edit form</h1>

	</div>
	<div class="row">
			<div class="col-md-12">
				<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
  					@csrf
  					@method('PUT')
					<div class="form-group row">
						<label for="InputCodeno" 
						class="col-sm-2 col-form-label">Code NO</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="codeno" value="{{$item->codeno}}"  readonly="readonly">
							{{-- <span class="text-danger">{{$error->first('codeno')}} --}}
							</span>
						</div>
					</div>

					<div class="form-group row">
						<label for="Inputname" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" 
							value="{{$item->name}}">
						</div>
					</div>

					<div class="form-group row">
						<label for="Inputphoto" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" name="photo">

							<img src="{{asset($item->photo)}}"  class="img-fluid w-25">

							<input type="hidden" name="oldphoto" value="{{$item->photo}}">
						</div>
					</div>

					<div class="form-group row">
						<label for="Inputprice" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="price" value="{{$item->price}}">
						</div>
					</div>

					<div class="form-group row">
						<label for="Inputdiscount" class="col-sm-2 col-form-label">Discount</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="discount" 
							value="{{$item->discount}}">
						</div>
					</div>


					<div class="form-group row">
						<label for="Inputdescription" class="col-sm-2 col-form-label">Description</label>
						<textarea class=" form-control col-sm-10" name="description" id="Inputdescription">{{$item->description}}</textarea>	
					</div>

					<div class="form-group row">
						<label for="Inputdescription" class="col-sm-2 col-form-label">Brand</label>
						<select class="form-control fo-md" id="InputBrand" name="brand">
							<optgroup label="Choose Brand">
								@foreach($brands as $brand)
								<option value="{{$brand->id}}">{{$brand->name}}
								</option>
								@endforeach
							</optgroup>	
						</select>
					</div>

					<div class="form-group row">
						<label for="Inputdescription" class="col-sm-2 col-form-label">Subcategory</label>
						<select class="form-control fo-md" id="Inputsubcategories" name="subcategory">
							<optgroup label="Choose Subcategory">
								@foreach($subcategories as $subcategory)
								<option value="{{$subcategory->id}}">{{$subcategory->name}}
								</option>
								@endforeach
							</optgroup>	
						</select>
					</div>

					{{-- <span class="text-danger">{{$error->first('brand')}}</span> --}}
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
