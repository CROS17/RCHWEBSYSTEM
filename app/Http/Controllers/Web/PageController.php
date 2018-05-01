<?php

namespace App\Http\Controllers\Web;


use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use App\Client;
use App\Tipoclient;
use App\Tipodoc;
use App\Tipoevent;
use App\Contrato;
use Illuminate\Http\Request;
/**
* 
*/
class PageController extends Controller
{
	
	public function blog()
	{
		$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
		return view('web.posts', compact('posts'));
	
	}

	public function user(){

		$users = User::orderBy('id', 'DESC')->paginate(3);
		return view('web.users', compact('users'));
	}

	public function category($slug){

		//Aca es que tenemos que obtener primero las categorias y luego conseguir los post que tiene relacion con la categoria

		$category = Category::where('slug', $slug)->pluck('id')->first(); //obtiene el registro pero solo id
		$posts = Post::where('category_id', $category)->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

		return view('web.posts', compact('posts'));

	}

	public function tag($slug){

	//condicion de que afecte a las etiquetas, listar  todos los post que tengas que ver con la etiqueta 
	$posts = Post::whereHas('tags', function($query) use($slug){
			$query->where('slug', $slug);
		})  
		->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

		return view('web.posts', compact('posts'));

	}

	public function post($slug){

		$post = Post::where('slug', $slug)->first();

		return view('web.post', compact('post'));
	}

	public function tipoclient($descripcion){

	//condicion de que afecte a las tipoclients, listar  todos los clientes que tengas que ver con la tipoclients 
		$tipoclient = Tipoclient::where('descripcion', $descripcion)->pluck('id')->first(); //obtiene el registro pero solo id
		$clients = Client::where('tipoclients_id', $tipoclient)->orderBy('id', 'DESC')->paginate(3);

		return view('web.clients', compact('clients'));


	}

	public function tipodoc($documento){

	//condicion de que afecte a las tipoclients, listar  todos los clientes que tengas que ver con la tipoclients 
	$tipodoc = Tipodoc::where('documento', $documento)->pluck('id')->first(); //obtiene el registro pero solo id
		$clients = Client::where('tipodocs_id', $tipodoc)->orderBy('id', 'DESC')->paginate(3);

		return view('web.clients', compact('clients'));

	}

	public function client($name){

		$clients = Client::where('name', $name)->first();

		return view('web.clients', compact('clients'));
	}
	
	public function tipoevent($evento){

	//condicion de que afecte a las tipoclients, listar  todos los clientes que tengas que ver con la tipoclients 
	$tipoevent = Tipoevent::where('evento', $evento)->pluck('id')->first(); //obtiene el registro pero solo id
		$contratos = Contrato::where('tipoevents_id', $tipoevent)->orderBy('id', 'DESC')->paginate(3);

		return view('web.clients', compact('clients'));

	}

	public function contrato($clients_id){

		$contratos = Contrato::where('clients_id', $clients_id)->first();

		return view('web.contratos', compact('contratos'));
	}
}