<?php

namespace App\Http\Controllers;
use App\Models\M_KyoSC;

use Illuminate\Http\Request;

class CSZ extends Controller
{
    public function index($value='')
    {

    $data = ['page' => "dashboard"];
        return view("template", $data);
    }

public function barang()
{
    $model = new M_KyoSC();

    $data['callysta'] = $model->tampil('barang');
    $data['page'] = 'barang';

    return view('template', $data);
}

public function tambah()
{
    $data['page'] = 'tambah';

    return view('template', $data);
}

public function aksitambah(Request $request)
{ 
    echo $request->input('nama_barang');
}
}