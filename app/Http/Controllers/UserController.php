<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Departamento;
use App\Models\Municipio;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class UserController extends Controller
{
    public function home(){
        return view('users.home');
    }

    public function index(){
        $users = User::orderBy('id', 'asc')->simplepaginate(5);
        return view('users.index', compact('users'));
    }

    public function create(){
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        return view('users.create', compact('departamentos', 'municipios'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'cedula' => 'required',
            'departamento_id' => 'required',
            'municipio_id' => 'required',
            'celular' => 'required',
            'email' => 'required |email| unique:users,email',
            'autorizar' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('index')->with('Usuario registrado exitosamente.');
    }

    public function show(User $user){
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        return view('users.show', compact('user', 'departamentos', 'municipios'));
    }

    public function win(){
        if(){
            $users = User::inRandomOrder()->limit(1)->get();
            return view('users.win',compact('users'));
        }
        
    }

    public function downloadexcel(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function getmunicipio(Request $request, $id){
        
    }
}
