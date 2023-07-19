<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoptions;

class AdoptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //returns the index view of the adoptions
        $adoptions = Adoptions::all()->toArray();
        return view('adoption.index', compact('adoptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adoption.create');
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
        // form validation
        $adoption = $this->validate(request(), [
            'reason' => 'required',
        ]);
         // create a adoption object and set its values from the input
        $adoption = new Adoptions;
        $adoption->user_id = $request->input('user_id');
        $adoption->animal_id = $request->input('animal_id');
        $adoption->reason = $request->input('reason');
        $adoption->created_at = now();
        // save the adoption object
        $adoption->save();
        // generate a redirect HTTP response with a success message 
        return back()->with('success', 'adoption request has been added');
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
    public function edit($id)
    {
        //
        $adoption = Adoptions::find($id);
        return view('adoption.edit', compact('adoption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $adoption = Adoptions::find($id);
        $this->validate(request(), [
            'status' => 'required'
        ]);
        $adoption->user_id = $request->input('user_id');
        $adoption->animal_id = $request->input('animal_id');
        $adoption->status = $request->input('status');
        $adoption->reason = $request->input('reason');
        $adoption->updated_at = now();
        return redirect('adoptions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
