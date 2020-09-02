@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center   justify-content-between mb-4">
		<div class="row">
			<div class="col-md-12">
				<h1 class="h3 mb-0 text-gray-800">Item Lists</h1>
				<a href="{{route('items.create')}}"  class="btn btn-success">Add New</a>
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
							<th>CodeNO</th>
							<th>Name</th>
							<th>Photo</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@php  $i=1;
						@endphp
						@foreach($items as $item)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$item->codeno}}</td>
							<td>{{$item->name}}</td>
							<td>
								<img src="{{asset($item->photo)}}" class="img-fluid w-25"></td>

							<td>{{$item->price}}MMk</td>
							<td>
								<a href="" class="btn btn-primary">Detail</a><br>
								<a href="{{route('items.edit',$item->id)}}" class="btn btn-info">Edit</a><br>
								<a href="" class="btn btn-danger" 
								>Delete</a>
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
		