@extends('layouts.app')
<style type="text/css">
	table, th, td {
  		padding: 7px;
	}
	th {
		border-bottom: 1px solid gray;
		background-color: #3C9F40;
  		color: white;
	}
	tr:nth-child(even) {background-color: #eeeeee;}
	tr:hover {background-color: #bbbbbb;}
</style>
@section('content')
	<title>Your Users</title>

	<h1 style="text-align: center;">Users</h1>

	<hr>

	<table style="width:100%">
		<tr>
			<th>Name</th>
			<th>Car Color</th>
			<th>Car Accent Color</th>
			<th>Car Seat Color</th>
			<th>Trim</th>
		</tr>

	@foreach ($users as $user)
	<a href=>
		<tr class='clickableRow' data-href="/users/{{$user->id}}">
	        <td>{{$user->name}}</td>
			<td>{{$user->carColor}}</td>
			<td>{{$user->carAccentColor}}</td>
			<td>{{$user->carSeatColor}}</td>
			<td>{{$user->trim}}</td>
	    </tr>
	</a>
	@endforeach
	</table>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function() {
			$(".clickableRow").click(function(){
				window.location = $(this).data("href");
			})
		});
	</script>
@endsection
