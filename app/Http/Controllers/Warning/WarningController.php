<?php

namespace App\Http\Controllers\Warning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Institution;
use App\Models\Warning;
use Illuminate\Http\Request;

class WarningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warnings = Warning::orderBy('created_at', 'desc')->paginate(10);

        return view ('admin.warnings.index', [
            'warnings' =>$warnings,

        ]);
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
        $new_warning = new Warning();
        $new_warning->name = $request->name;
        $new_warning->text = $request->text;
        $new_warning->save();

        $moreinstitutions = Institution::orderBy('created_at', 'desc')->paginate(10);
        return view ('welcome', [
            'moreinstitutions' =>$moreinstitutions
        ]);
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
    public function destroy( Warning $warning)
    {
        $warning->delete();
        return redirect()->back()->withSuccess('Запись удалена' );
    }
}
