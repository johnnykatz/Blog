<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\TagRequest;
use App\Tag;
use Laracasts\Flash\Flash;
use Laracasts\Flash\FlashServiceProvider;

class TagsController extends Controller
{

    public function create()
    {
        return view('admin.tags.create');
    }

    public function index(Request $request)
    {
        $tags = Tag::search($request->name)->orderBy('id', 'ASC')->paginate(5);
        return view('admin.tags.index')->with('tags', $tags);
    }

    public function edit($id)
    {
        $tag = Tag::fincd($id);
        return view('admin.tags.edit')->with('tag', $tag);
    }


    public function store(TagRequest $request)
    {
        $tag = new Tag($request->all());
        $tag->save();
        Flash::success('El tag ' . $tag->name . " fue creado con exito");
        return redirect()->route('admin.tags.index');
    }

    public function update(TagRequest $request, $id)
    {
        $tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();
        Flash::success('El tag ' . $tag->name . " fue creado con exito");
        return redirect()->route('admin.tags.index');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        Flash::success('El tag ' . $tag->name . " fue elimando con exito");
        return redirect()->route('admin.tags.index');

    }

}
