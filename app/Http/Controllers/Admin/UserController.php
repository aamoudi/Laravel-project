<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\RoleUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $this->authorize('view-any', User::class);

        $users = User::paginate(8);
        return view('admin.users.show', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.add', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users|email',
            'name' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = user::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        foreach ($request->roles_id as $role) {
            if ($role != 0){
                RoleUser::create([
                    'user_id' => $user->id,
                    'role_id' => $role,
                ]);
            }
        }
        return redirect()->route('admin.users.index')->with('success', 'Added user succssfully');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|sometimes|email',
            'name' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();

        $roles =  RoleUser::where('user_id','=',$user->id)->delete();
        foreach ($request->roles_id as $role) {
            if ($role != 0){
                RoleUser::create([
                    'user_id' => $user->id,
                    'role_id' => $role,
                ]);
            }
        }

        return redirect()->route('admin.users.index')->with('success', 'user updated successfully');
    }

    public function destroy(User $user)
    {
        $ststus = $user->delete();
        if ($ststus) {
            return redirect()->route('admin.users.index')->with('success', 'Deleted user successfully');
        } else {
            return redirect()->route('admin.users.index')->with('Error', 'Error when deleted user');
        }
    }
}
