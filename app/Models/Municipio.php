<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    public function departamento(){
        return $this->hasOne(Departamento::class);
    }

    public static function municipio($id){
        return Municipio::where('departamento_id', '=' , '$id' ) ->get();
    }
}
