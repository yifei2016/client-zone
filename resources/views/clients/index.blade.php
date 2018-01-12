@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
	@endif
	<div class="panel panel-default">
		<div class="panel-heading">
			Client List
			<a href="{{ route('clients.create') }}" class="btn btn-success btn-xs">Add Client</a>
		</div>
		<div class="panel-body">
			@if ($clients) > 0)
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
                <th>Created at</th>
                <th>Updated at</th>
							</tr>
						</thead>
						<tbody>
							@foreach($clients as $client)
							<tr>
								<td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
								<td>{{ $client->created_at->format('YYYY-mm-dd') }}</td>
								<td>{{ $client->updated_at->format('YYYY-mm-dd') }}</td>
								<td>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="text-center">
				
				</div>
			@else
				<p class="alert alert-info">
					No Listing Found
				</p>
			@endif
		</div>
	</div>
</div>
@endsection