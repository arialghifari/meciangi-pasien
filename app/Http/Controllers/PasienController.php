<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    protected $fillable = [
        'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_hp', 'diagnosa', 'tanggal_masuk_rs', 'foto'
    ];

    public function index()
    {
        // get the data from table
        $pasien = DB::table('pasien')->get();

        // and send the data
        return view('pasien', ['pasien' => $pasien]);
    }

    public function tambahPasien()
    {
        return view('tambah-pasien');
    }

    // insert data
    public function store(Request $request)
    {
        // catch pasien image
        $foto_pasien = $request->file('foto_pasien');
        $nama_foto = rand() . '.' . $foto_pasien->getClientOriginalExtension();
        // mengupload image ke folder
        $foto_pasien->move(public_path("assets/pasien"), $nama_foto);

        DB::table('pasien')->insert([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'diagnosa' => $request->diagnosa,
            'tanggal_masuk_rs' => $request->tanggal_masuk_rs,
            'foto' => $nama_foto
        ]);

        return redirect('/pasien');
    }

}
