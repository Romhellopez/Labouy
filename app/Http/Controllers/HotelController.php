<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.index');
    }
    public function userData()
    {
        $user = User::all();
        return view('usersAdmin.userData', compact('user'));
        
    }
    public function create()
    {
        return view('usersAdmin.create');
    }

    // UsersAdmin Data /----------------------------------------------------
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);

       $validated= $request->validate([
        'id' => ['required'],
        'name'=>  ['required'],
        'usertype' => ['required'],
        'email' => ['required'],     
     ]);
        Hotel::create($validated);
        return redirect('/dashboard/userData/create')->with('message', 'New Record has been successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    public function ocean101()
    {
        return view('components.ocean101');
    }

    public function hillside()
    {
        return view('components.hillside');
    }
    public function maya()
    {
        return view('components.maya');
    }
    public function punta()
    {
        return view('components.punta');
    }
    public function soeliana()
    {
        return view('components.soeliana');
    }
    public function dahun()
    {
        return view('components.dahun');
    }
    public function ocean101r1()
    {
        return view('components.ocean101rooms.oceandeluxe');
    }
    public function ocean101r2()
    {
        return view('components.ocean101rooms.oceancouple');
    }
    public function ocean101r3()
    {
        return view('components.ocean101rooms.oceanpremium');
    }


}
