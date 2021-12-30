<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Models\Personal;
use App\Models\Position;
use App\Models\Type;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\SimpleType\JcTable;
use Illuminate\Support\Facades\DB;
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals = Personal::orderBy('created_at','desc')->paginate(10);
        return view('admin.personal.index',[
            'personals' => $personals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institutions = Institution::orderBy('created_at', 'desc')->get();
        $positions = Position::orderBy('created_at', 'desc')->get();
        return view('admin.personal.create',[
            'institutions' =>$institutions,
            'positions' => $positions
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
        $new_personal = new Personal();
        $new_personal->surname = $request->surname;
        $new_personal->name = $request->name;
        $new_personal->lastname = $request->lastname;
        $new_personal->pos_id = $request->pos_id;
        $new_personal->inst_id = $request->inst_id;
        $new_personal->mobile_phone = $request->mobile_phone;
        $new_personal->work_phone = $request->work_phone;

        $new_personal->save();

        return redirect()->back()->withSuccess('Запись успешно  добавлена');
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
    public function edit(Personal $personal)
    {
        $institutions = Institution::orderBy('created_at', 'desc')->get();
        $positions = Position::orderBy('created_at', 'desc')->get();
        return view('admin.personal.edit',[
            'personal' => $personal,
            'institutions' =>$institutions,
            'positions' => $positions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        $personal->surname = $request->surname;
        $personal->name = $request->name;
        $personal->lastname = $request->lastname;
        $personal->pos_id = $request->pos_id;
        $personal->inst_id = $request->inst_id;
        $personal->mobile_phone = $request->mobile_phone;
        $personal->work_phone = $request->work_phone;

        $personal->save();
        return redirect()->back()->withSuccess('Запись  успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        $personal->delete();

        return redirect()->back()->withSuccess('Запись  успешно удалена');
    }


    public function autocompleteSearch(Request $request)
    {
        $query = $request->search;

        if($query == null){
            $personals = Personal::orderBy('created_at', 'desc')->paginate(10);

        }else {
            $personals = Personal::where('surname', 'LIKE', '%'.$query.'%')->orwhere('name', 'LIKE', '%'.$query.'%')->paginate(10);

       }
if (count($personals) == 0){
//    $id_institutions = Institution::with('type')->where('title','LIKE', '%'.$query.'%' )->pluck('id');
//       $count =Institution::where('title','LIKE', '%'.$query.'%' )->count();
//    for ($i=0; $i<$count; $i++){
//       $personals = Personal::where('inst_id',  $id_institutions[$i])->paginate(20);
//
//    }
  //  $personals = Institution::with('personal','institution')->where('title','LIKE', '%'.$query.'%' )->paginate(10);
    $personals = Personal::with('institution', 'position')->whereIn('inst_id', Institution::where('title','LIKE', '%'.$query.'%' )->pluck('id'))->paginate(10);


}
        return view('admin.personal.index',[
            'personals' => $personals
        ]);
    }



}
