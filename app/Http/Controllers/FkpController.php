<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fkp;
use Illuminate\Support\Facades\Input;
//use DB;

class FkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$nama_deps = DB::connection('secondary')->select('select `nama_dep` from `departemen`');*/
        return view('fkp');/*, ['nama_dep' => $nama_deps]);*/
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
        Fkp::create($request->except('_token'));
        /*//$user = new Fkp;
            if(Input::hasFile('foto_kon')){
            $file=Input::Fkp('foto_kon');
            $file->move(public_path().'/', $file->getClientOriginalName());
            //$user->foto_kon=$file->getClientOriginalName();
            $file->save();
            }*/
        return redirect()->route('fp');
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
}
