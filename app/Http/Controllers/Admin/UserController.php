<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $users = User::all();
        return view('admin.all')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //conveted to activate user acct
        $upgrade = User::find($id);
        $upgrade->status = 'active';
        $upgrade->save();
        return back()->with('message', 'You just Activated a user account')->with('message-color', 'alert-success');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //converted to a delete resource
        $delete = User::find($id);
        $delete->delete();
        return back()->with('message', 'You just deleted a user account')->with('message-color', 'alert-danger');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $upgrade = User::find($id);
        $upgrade->status = 'upgrade';
        $upgrade->save();
        return back()->with('message', 'You just Forced upgrade a user account')->with('message-color', 'alert-success');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

       
    }
}
