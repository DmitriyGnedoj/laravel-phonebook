<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Position::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.position.index',[
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.position.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $position = new Position();
        $position->title = $request->title;
        $position->save();

        return redirect()->back()->withSuccess('Должность  успешно  добавлена');
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
    public function edit(Position $position)
    {
        return view('admin.position.edit',[
            'position' => $position,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Position $position)
    {
        $position->title = $request->title;
        $position->save();

        return redirect()->back()->withSuccess('Должность успешно  обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->back()->withSuccess('Должность удалена');
    }


    public function searchPosition(Request $request){
        $query = $request->search;
        if($query == null){
            $positions = Position::orderBy('created_at', 'DESC')->paginate(10);
        }else{
            $positions = Position::where('title', 'LIKE','%'.$query.'%')->paginate(10);
        }

        return view('admin.position.index',[
            'categories' => $positions
        ]);
    }
}
