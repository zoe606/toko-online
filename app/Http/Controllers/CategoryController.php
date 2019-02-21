<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category as Model;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Model::all();
    }

    public function serach(Request $request)
    {
        $keyword = $request->get('name');

        return Model::where('name', 'LIKE', '%$keyword%')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $category = Model::findOrFail($id);

        if(!$category->trashed()){
            $category->delete();
            return 'Kategori $category->name berhasil dihapus';
        }
    }

    public function restore($id)
    {
        $category = Model::withTrashed()->findOrFail($id);

        if(!$category->trashed()){
            return 'Kategori tidak perlu direstore';
        }

        return 'Kategori $category->name berhasil di restore';
    }

    public function permanentDelete($id)
    {
        $category = Model::withTrashed()->findOrFail($id);
        $category->forceDelete();

        return 'Kategori $category->name berhasil dihapus permanent. tidak bsia di restore!';
    }
}
