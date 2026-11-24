<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class M_KyoSC extends Model
{
    public function tampil($tabel)
    {
        return \DB::table($tabel)
                    ->get();
    }
    
}
