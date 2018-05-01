{{-- @extends('layouts.app') --}}
@extends('adminlte::page')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Ver Publicación
					</div>
						<div class="panel-body">
							<p><strong>Nombre:</strong>		{{ $post->name }}</p>
							<p><strong>Slug:</strong>		{{ $post->slug }}</p>
							<p><strong>Contenido:</strong>	{{ $post->body }}</p>
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection