{{-- @extends('layouts.app') --}}
@extends('adminlte::page')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Crear Categoria
					</div>
						<div class="panel-body">
							{!! Form::open(['route' => 'categories.store']) !!}

							@include('admin.categories.partials.from')
							{!! Form::close() !!}
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection