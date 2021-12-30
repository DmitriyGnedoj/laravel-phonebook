<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\resource;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::orderBy('created_at','desc')->paginate(10);

        return view('admin.institution.type.index',[
            'types' => $types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::orderBy('created_at','desc')->paginate(10);

        return view('admin.institution.type.create',[
            'types' => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $type = new Type();
        $type->title = $request->title;
        $type->save();

        return redirect()->back()->withSuccess('Запись  успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return view('admin.institution.type.edit',[
            'type'=>  $type
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $type->title = $request->title;
        $type->save();
        return redirect()->back()->withSuccess('Успешно обновлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->back()->withSuccess('Запись успешно удалена' );
    }
}
