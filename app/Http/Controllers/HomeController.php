<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* mandamos a llamar a nuestro modelos */
use App\User;
use App\Category;
use App\Images;
use App\Articles;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /* obtenemos nuestros usuarios con el metodo count */
        $users = User::count();
        $categoryes = Category::count();
        $images = Images::count();
        $articles = Articles::count();

        return view('index', [
            'users' => $users,
            'categoryes' => $categoryes,
            'images' => $images,
            'articles' => $articles

        ]);
    }

    /* obtener cuanto usuarios hay dentro de base de datos */


}
