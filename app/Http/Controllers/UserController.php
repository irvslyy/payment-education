<?php

namespace App\Http\Controllers;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Role::create(['name' => 'siswa']);
        // Permission::create(['name' => 'Entri transaksi']);
        // auth()->user()->givePermissionTo('Data petugas');
        // auth()->user()->assignRole('siswa');

        // $permission = Permission::find(4);
        // $role = Role::findById(3);
        // $role->givePermissionTo($permission);
        
        return view('user.user');
    }
    public function store(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->nik_nisn = $request->nik_nisn;
        $users->type = $request->type;
        $users->password = bcrypt($request->password);
        $users->save();

        tostr('users create success!');
        return back();
    }
}
