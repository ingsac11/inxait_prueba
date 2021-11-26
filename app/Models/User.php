<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'lastname',
        'cedula',
        'departamento_id',
        'municipio_id',
        'celular',
        'email',
        'autorizar',
    ];



    public function departamento(){
        return $this->hasOne(Departamento::class,'id','departamento_id');
    }

    public function municipio(){
        return $this->hasOne(Municipio::class,'id','municipio_id');
    }
}
