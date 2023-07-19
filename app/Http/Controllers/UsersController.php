<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware(middleware: 'auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //code to deny and allow certain users to control 
        if(Gate::denies('edit-users')){
            return redirect(route('users.index'));
        }


        $roles = Role::all();
        return view ('admin.users.edit')->with([
            'user'=> $user,
            'roles'=>$roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        // $user = User::find($id);
        // $this->validate(request(), [
        //     'name' => 'required'
        // ]);
        // $user->name = $request->input('name');
        // $user->description = $request->input('email');
        // $user->dateofbirth = $request->input('role');
        // $user->updated_at = now();
        // return redirect('users');

        $user->roles()->sync($request->roles);
        
        return redirect()->route('users.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //allow only certain users to delete users
        if(Gate::denies('delete-users')){
            return redirect(route('users.index'));
        }
        //
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('users.index');

    }
}
