<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataController;
use App\Models\Iot;
use App\Models\Device;
use DB;

class DataController extends Controller
{
    public function tampildata()
    {
        return view('pasien.tampildata');
    }
    
    public function tampilmonitor()
    {
        return view('monitoring');
    }

    public function tampilsuhu()
    {
        $data = Iot::orderBy('id','desc')->limit(1)->get();
        return view('pasien.tampilsuhu', compact('data'));
    }
    public function tampilstatus()
    {
        $data = Iot::orderBy('id','desc')->limit(1)->get();
        return view('pasien.tampilstatus', compact('data'));
    }
    public function tampilangin()
    {
        $data = Iot::orderBy('id','desc')->limit(1)->get();
        return view('pasien.tampilangin', compact('data'));
    }

    public function tampilkelembaban()
    {
        $data = Iot::orderBy('id','desc')->limit(1)->get();
        return view('pasien.tampilkelembaban', compact('data'));
    }

    public function inputdata(Request $request)
    {
        $data = array();
        $data['suhu'] = $request->suhu;
        $data['kelembaban'] = $request->kelembaban;
        $data['kecepatan_angin'] = $request->kecepatan_angin;
        $data = DB::table('iots')->insert($data);

        return response('', 200);
    }

    public function inputstatus(Request $request)
    {
        $data = array();
        $data['device_id'] = $request->device_id;
        DB::table('devices')->updateOrInsert(['device_id' => $data['device_id']], $data);

        return response('', 200);
    }

    public function tampilgrafik()
    {
        $datasuhu = Iot::orderBy('id','desc')->limit(10)->get();

        return view('pasien.tampilgrafik', compact('datasuhu'));
    }

    public function cobagrafik()
    {
        $datasuhu = Iot::orderBy('id','desc')->limit(10)->get();

        return view('pasien.cobagrafik', compact('datasuhu'));
    }
    public function test()
    {
        return view('test');
    }

    public function showchart()
    {
        $datasuhu = Iot::orderBy('id', 'asc')->limit(10)->get();

        return view('elem.chart', compact('chart'));
    }

}
