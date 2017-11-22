<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $table = 'dokter';
    public $timestamps = false;

    public static function genKode(){
        $sel = dokter::max('kode');
        $result = implode("",['DK0',substr($sel,2,3)+1]);
        return $result;
    }
}
