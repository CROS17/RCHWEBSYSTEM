{{-- @extends('layouts.app') --}}
@extends('adminlte::page')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Editar Usuario
					</div>
						<div class="panel-body">
							{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

							@include('admin.users.partials.from')
							{!! Form::close() !!}
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection