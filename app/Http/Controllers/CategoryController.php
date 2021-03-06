<?php

namespace App\Http\Controllers;
/* Mandamos a llamar el modelo category */
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryController extends Controller
{
    use SoftDeletes;
    //
    /* vamos a obtener todas las categorua de nuestra base de datos ELOQUEN ORM
        Select * from categories  */
    public function index(){

        $categories = Category::latest()->paginate(10);
        return view('categories.index',[
        'categories'=> $categories
        ]);


    }
    /* insertar datos en la tabla category con el metodo create dentro de un array  */
    public function store(Request $request){
        $request= Category::create([

            'name'=>$request->  name
        ]);
        return redirect('/category')->with('mesage', 'la categoria se ha agregado exitosamente!');

    }

    /* Update Category */
        public function edit($id){
            $category = Category::findOrFaild($id);

            return view('/category');

        }
    /* eliminacion de */
    public function delete(Category $category){

        $category->delete();
        return redirect('/category')->with('mesageDelete', 'la categoria se ha eliminado exitosamente!');


    }
}
