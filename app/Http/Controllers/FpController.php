<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fp;
/*use App\Fkp;
use DB;*/

class FpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$datas = Fkp::find($id);
        return view('fp')->with('datas', $datas);*/
        return view('fp');
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
    public function store(Request $data)
    {
        $last_jadwal = Fp::orderby('tanggal','desc')->first();
        
        $jadwal_test['tanggal'] = date('Y-m-d H:i:s',strtotime('now'));

        if($last_jadwal == null ){
            $last_jadwal['tanggal'] = $jadwal_test;
        }
        elseif(date_diff($last_jadwal['tanggal'],$jadwal_test) < 0 ){
            $last_jadwal['tanggal'] = $jadwal_test;
        }
        elseif(Fp::where('tanggal', $last_jadwal['tanggal'])->count() < 50){
            Fp::create(array_merge($data->all(), ['tanggal' => $last_jadwal['tanggal']]));
            return view("jadwal")->with($last_jadwal);
        }else{  
            $jadwal_test = jadwal_selanjutnya($last_jadwal['tanggal']);
        }
        $jadwal = new Fp($data->all());
        $jadwal->tanggal = $last_jadwal;
        $jadwal->save();
        Fp::create(array_merge($data->all(), ['tanggal' => $last_jadwal['tanggal']]));
        return view("jadwal")->with($last_jadwal);
    }
    public function jadwal_selanjutnya($last_jadwal){ //katakanlah $last_jadwal hari kamis (tanggal 25)
    $tanggal['0'] = strtotime('next monday',strtotime($last_jadwal));           //nyari hari senin terdekat     24
    $tanggal['1'] = strtotime('next wednesday',strtotime($last_jadwal));        //nyari hari rabu terdekat      26
    $tanggal['2'] = strtotime('next friday',strtotime($last_jadwal));           //nyari hari jumat terdekat     21
    
    usort($tanggal, function($a, $b) { // buat nyari hari yang paling dekat dari 3 hari diatas
        $dateTimestamp1 = strtotime($a);                                        // kita sorting ascending tanggalnya biar mulai dari yang terkecil
        $dateTimestamp2 = strtotime($b);                                        // urutan array dari $tanggal jadi kayak gini (bawah)
        return $dateTimestamp1 < $dateTimestamp2 ? -1: 1;                       // 21, 24, 26
    });

    return($tanggal[0]);                            // karena yang ke 0 pasti paling dekat, kita return tangal[0]
    
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
