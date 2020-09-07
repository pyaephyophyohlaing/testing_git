@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center   justify-content-between mb-4">
		<div class="row">
			<div class="col-md-12">
				<h1 class="h3 mb-0 text-gray-800">Category Lists</h1>
				<a href="{{route('categories.create')}}"  class="btn btn-success">Add New</a>
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
						@foreach($categories as $category)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$category->name}}</td>
							<td>
								<img src="{{asset($category->photo)}}" class="img-fluid w-25"></td>
								<td>
									<a href="{{route('categories.show',$category->id)}}" class="btn btn-primary">Detail</a><br><br>
									
									<a href="{{route('categories.edit',$category->id)}}" class="btn btn-success">Edit</a><br><br>

									<form action="{{route('categories.destroy',$category->id)}}" method="post" onsubmit="return confirm('Are you Sure Want to Delete!')">

										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger">Delete</button>
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
	