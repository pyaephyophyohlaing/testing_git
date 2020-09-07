@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center   justify-content-between mb-4">
		<div class="row">
			<div class="col-md-12">
				<h1 class="h3 mb-0 text-gray-800">Brand Lists</h1> 
				<a href="{{route('brands.create')}}"  class="btn btn-success">Add New</a>
			</div>
		</div>
	</div>
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead class="thead-dark">
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@php  $i=1;
						@endphp
						@foreach($brands as $brand)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$brand->name}}</td>
							<td>
								<img src="{{asset($brand->photo)}}" class="img-fluid w-25">
							</td>

							<td>
							 <a href="{{route('brands.show',$brand->id)}}" class="btn btn-primary">Detail</a>

                             <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-info">Edit</a>
                             
                            <form action="{{route('brands.destroy',$brand->id)}}" method="post" onsubmit="return confirm('Are you Sure want to Delete!')" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-success">Delete</button>
                                          </form>
                            </td>

						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>

@endsection	
		