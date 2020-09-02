@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
         
          	<div class="col">
            <h1 class="h3 mb-0 text-gray-800">Orders List</h1>
            
    </div>
</div>
<div class="container-row">
	<div class="row">
		<div class="col-md-12">
	<table class="table table-bordered">
		<thead class="thead-dark">
			
			<tr>
				
				<th>Voucher No</th>
				<th>User_id</th>
				<th>Total</th>
				<th>Action</th>				
			</tr>
			
		</thead>
		<tbody>
			@foreach($orders as $order)
			<tr>

			<td>{{$order->voucherno}}</td>
			<td>{{$order->user_id}}</td>
			<td>{{$order->total}} </td>
			<td>
			
				<a href="{{route('orderdetail',$order->id)}}" class="btn btn-success">Detail</a>
				

				
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
</div>
</div>
@endsection