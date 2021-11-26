<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function headings(): array{
        return [
            'id',
            'Nombre',
            'Apellido',
            'Cedula',
            'Departamento',
            'Ciudad',
            'Celular',
            'Email',
            'Fecha/Hora de creacion',
        ];
    }

    public function collection()
    {
         $users = User::select('Users')
         ->select('id','name', 'lastname', 'cedula', 'departamento_id', 'municipio_id', 'celular', 'email', 'created_at')
         ->get();
         return $users;
    }
}
