<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fp;
use Datetime;
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
        $cek_jadwal = Fp::get()->count();
        $jadwal_temp = new DateTime(date('Y-m-d H:i:s',strtotime('now')));

        if($cek_jadwal != 0 ){
            $last_jadwal = new DateTime(Fp::orderby('tanggal','desc')->first()->tanggal);
            if(date_diff($last_jadwal,$jadwal_temp)->days < 0 ){
                $jadwal_temp = $last_jadwal;
            }
            elseif(Fp::where('tanggal', $last_jadwal)->count() < 5){
                Fp::create(array_merge($data->all(), ['tanggal' => $last_jadwal]));
                $jadwal_temp = $last_jadwal;
                return view("jadwal")->with(compact('jadwal_temp'));
            }else{  
                $jadwal_temp = $this->jadwal_selanjutnya($last_jadwal);
            }
        }else{
            $last_jadwal = $jadwal_temp;
            $jadwal_temp = $this->jadwal_selanjutnya($last_jadwal);
        }
        Fp::create(array_merge($data->all(), ['tanggal' => $jadwal_temp]));
        return view("jadwal")->with(compact('jadwal_temp'));
    }

    public function jadwal_selanjutnya($last_jadwal){ //katakanlah $last_jadwal hari kamis (tanggal 25)
        $tanggal['0'] = strtotime('next monday',strtotime($last_jadwal->format('Y-m-d H:i:s')));           //nyari hari senin terdekat     24
        $tanggal['1'] = strtotime('next wednesday',strtotime($last_jadwal->format('Y-m-d H:i:s')));        //nyari hari rabu terdekat      26
        $tanggal['2'] = strtotime('next friday',strtotime($last_jadwal->format('Y-m-d H:i:s')));           //nyari hari jumat terdekat     21
        
        usort($tanggal, function($a, $b) { // buat nyari hari yang paling dekat dari 3 hari diatas
            $dateTimestamp1 = $a;                                        // kita sorting ascending tanggalnya biar mulai dari yang terkecil
            $dateTimestamp2 = $b;                                        // urutan array dari $tanggal jadi kayak gini (bawah)
            return $dateTimestamp1 < $dateTimestamp2 ? -1: 1;                       // 21, 24, 26
        });

        return (new DateTime(date('Y-m-d H:i:s',$tanggal[0])));                            // karena yang ke 0 pasti paling dekat, kita return tangal[0]
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
