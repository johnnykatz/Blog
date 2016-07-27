<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoriesRequest;
use Laracasts\Flash\Flash;
use App\Category;
class CategoriesController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoriesRequest $request)
    {
        $category= new Category($request->all());

        $category->save();
        Flash::success("La categoria " . $category->name . " ha sido registrada con exito");
        return redirect()->route('admin.categories.index');
    }

    public function index(Request $request)
    {
        $categories = Category::orderBy('id', 'ASC')->paginate(5);
        return view('admin.categories.index')->with('categories', $categories);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        Flash::error('La Categoria ' . $category->name . " ha sido borrada de forma exitosa");
        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);

    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->type = $request->type;
        $category->fill($request->all());
        $category->save();
        Flash::success('La categoria ' . $category->name . " ah sido editada con exito");
        return redirect()->route('admin.categories.index');

    }
}
