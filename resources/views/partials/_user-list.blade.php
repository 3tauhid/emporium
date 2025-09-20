@foreach ($users as $user)
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b110'>
		<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
			<div>
				<a href="{{ route('users.show', $user->id) }}"><p>{{ $user->name }}</p></a>
			</div>
		</div>
		<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
			<a href="{{ route('users.show', $user->id) }}"><p>{{ $user->email }}</p></a>
		</div>
		<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
			@if ($user->is_active)
				<button type='button' class='btn btn-danger' onclick="deactivateUser({{ $user->id }}, '{{ route('deactivate_user') }}')">Deactivate</button>
			@else
				<button type='button' class='btn btn-info' onclick="activateUser({{ $user->id }}, '{{ route('activate_user') }}')">Activate</button>
			@endif
		</div>
		<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
			<button type='button' class='btn btn-danger' onclick="destroyUser('{{ route('users.destroy', $user->id) }}')">Delete</button>
		</div>
	</div>
@endforeach