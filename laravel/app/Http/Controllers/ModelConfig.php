<?php namespace App\Http\Controllers;

// Nggak perlu meng-extends Base Controller
class ModelConfig
{
    function __get($param)
    {
        // Kita buat dulu Namespace Modelnya, berdasarkan data $param
        // $param disini adalah nama Model.
        // Kenapa saya pakai tanda ' untuk string bukannya " ?
        // Soalnya tanda ' eksekusinya lebih cepat ketimbang ".
        // Jika Namespace tidak sesuai, silahkan dirubah sendiri.
        // Oh iya, kita tidak bisa memakai tanda \ secara langsung,
        // jadi harus dibuat \\.
        $namespace = '\\App\Model\\' . $param;
        
        // Setelah Namespace berhasil dibuat, baru kita akan membuat Object Modelnya
        // Berdasarkan $namespace yang kita bikin.
        // Object Modelnya nanti bakal langsung diisikan kedalam variable property $this->$param
        $this->$param = new $namespace;

        // Kita return, supaya Modelnya bisa mengirim nilai.
        return $this->$param;
    }
}