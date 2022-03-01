<?php

namespace App\Http\Controllers\Manage;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{


    public function index()
    {
        $users = User::latest()->paginate(6);
        return view('manage.user.index',
        compact('users'));
    }
    public function create()
    {
        $role = Role::pluck('name', 'id');
        return view('manage.user.create', compact('role'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'bail|required|min:2',
            'email'         => 'required',
            'gender'        => 'required',
            'address'       => 'required',
            'phone'         => 'required',
            'religion'      => 'required',
            'password'      => 'required|min:6',
            'roles'         => 'required|min:1',
        ]);

        $request->merge(
            ['password' => bcrypt(
                $request->get('password'))
            ]);

        if ($user = User::create(
                $request->except('roles'))) {
            $user->syncRoles($request
            ->get('roles')
        );

            flash()
            ->success('Pengguna berhasil ditambahkan');
        } else {
            flash()
            ->error('Tidak dapat menambahkan pengguna');
        }

        return redirect()->back();
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id');

        return view('manage.user.edit',
        compact('user','roles'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->except('roles'));

        $user->save();
        $user->syncRoles($request->get('roles'));
        return redirect()->back();
    }
    public function destroy(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $user->delete($request->all());
        return redirect()->back();
    }
}
