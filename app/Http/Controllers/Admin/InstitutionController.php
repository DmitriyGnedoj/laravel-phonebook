<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Models\Personal;
use App\Models\Type;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $institutions = Institution::orderBy('created_at', 'desc')->paginate(10);
       return view ('admin.institution.index', [
           'institutions' =>$institutions,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::orderBy('created_at', 'desc')->get();
    return view('admin.institution.create',[
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
    {
        $new_institution = new Institution();
        $new_institution->title = $request->title;
        $new_institution->type_id = $request->type_id;
        $new_institution->edrpou=$request->edrpou;
        $new_institution->email = $request->email;
        $new_institution->adress = $request->adress;
        $new_institution->save();

        return redirect()->back()->withSuccess('Заведение успешно добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = Personal::with('position','institution')->where('inst_id', $id)->get();

        return view('more.index',[
            'results' => $results
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Institution $institution)
    {

        $types = Type::orderBy('created_at', 'desc')->get();
    return view('admin.institution.edit',[
        'institution' => $institution,
        'types' => $types
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institution $institution)
    {
        $institution->title = $request->title;
        $institution->type_id = $request->type_id;
        $institution->edrpou=$request->edrpou;
        $institution->email = $request->email;
        $institution->adress = $request->adress;
        $institution->save();

        return  redirect()->back()->withSuccess('Название успешно обновлено' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        $institution->delete();
       return redirect()->back()->withSuccess('Название удалено' );
    }

    public function searchInstitution(Request $request){
        $query = $request->search;
        if($query == null){
            $institutions = Institution::orderBy('created_at', 'DESC')->paginate(10);
        }else{
            $institutions = Institution::where('title', 'LIKE', '%'.$query.'%')->paginate(10);
        }

        return view ('admin.institution.index', [
            'institutions' =>$institutions,
        ]);
    }



}
