@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
	@endif
	<div class="panel panel-default">
		<div class="panel-heading d-flex justify-content-between" >
			<div><strong>Projects</strong></div>
			<a href="{{ route('projects.create') }}" class="btn btn-success btn-xs">Add Projekt</a>
		</div>
		<div class="panel-body">
			@if (count($projects))
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>name</th>
								<th>Type</th>
								<th>link</th>
								<th>Client</th>
                <th>Project</th>
                <th>Status</th>
                <th>Created_at</th>
								<th>Updated_at</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($projects as $project)
							<tr>
								<td>{{ $project->name }}</td>
                <td>{{ $project->type }}</td>
                <td>{{ $project->link }}</td>
                <td>{{ $project->client->name }}</td>
                <td>{{ $project->project }}</td>
                <td>{{ $project->status }}</td>
								<td>{{ $project->created_at }}</td>
								<td>{{ $project->updated_at }}</td>
								<td>
									<a href="{{ route('projects.edit', $project->id) }}" class="btn btn-success btn-xs">Edit</a>
									<form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-danger btn-xs">
											<span>DELETE</span>
										</button>
									</form>
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