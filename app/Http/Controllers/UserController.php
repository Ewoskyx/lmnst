<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Http\Requests\UsersUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index () {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    
    public function create()
    {
        return view('users.create');
    }

    public function store(UsersRequest $request)
    {
        $request->validated();
        $user = new User([
           'name' =>  $request->get('name'),
           'email' => $request->get('email'),
           'password' => Hash::make($request->get('password')),
           'is_admin' => $request->has('is_admin') ? true : false,
        ]);
        $user->save();
        return redirect('users')->with('success', 'Kullanıcı kayıt edildi!');
    }

    public function edit ($id) {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]); 
    }

    public function update(UsersUpdateRequest $request, $id)
    {
        $request->validated();
        $user = User::find($id);
        $user->name =  $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->is_admin = $request->has('is_admin') ? true : false;
        $user->save();
        return redirect('users')->with('success', 'Kullanıcı bilgileri güncellendi !'); 
    }
 
    public function destroy($id) {
        $user = User::all()->find($id);
        $this->authorize('delete', $user);
        $user->delete($id);
        return redirect('users')->with('success', 'Kayıt başarıyla silindi.');
    }
}
