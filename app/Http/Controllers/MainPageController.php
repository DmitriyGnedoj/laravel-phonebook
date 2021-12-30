<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Models\Personal;
use App\Models\Position;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\SimpleType\JcTable;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moreinstitutions = Institution::orderBy('title')->paginate(10);
        return view ('welcome', [
            'moreinstitutions' =>$moreinstitutions
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
        $resultInstitutePersonal = Personal::findorFail($id);
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

    public function search(Request $request){
        $query = $request->search;
        if($query == null){
            $moreinstitutions = Institution::orderBy('created_at', 'desc')->paginate(10);
        }else{
            $moreinstitutions = Institution::where('title', 'LIKE', "%{$query}%")->paginate(10);
        }

        return view ('welcome', [
            'moreinstitutions' =>$moreinstitutions
        ]);
    }





}
