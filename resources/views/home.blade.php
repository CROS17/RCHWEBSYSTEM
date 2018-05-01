@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    {{-- <h1>dashcborad</h1>--}}
@stop

@section('content')
    <div class="container">	
			<div class="jumbotron">
				<h2>BIENVENIDO AL AREA ADMINISTRATIVA</h2>				
				<img src="{{ asset('vendor/adminlte/dist/img/logo.jpg') }}" class="img-rounded" alt="Cinque Terre">	
					<blockquote>
 						<p>En esta área podra realizar las publicaciones que se visualizaran en el blog,<br>
						tambien cuenta con la configuracion de usuario podra modifar su cuenta.</p>
   						<footer>God bless you</footer>
  					</blockquote>
			</div>
	</div>
@stop