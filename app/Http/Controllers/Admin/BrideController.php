<?php

namespace App\Http\Controllers\Admin;

use App\Bride;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrideController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bride = Bride::all();
        return view('dashboard/bride',['bride' => $bride]);
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
     * @param  \App\Bride  $bride
     * @return \Illuminate\Http\Response
     */
    public function show(Bride $bride)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bride  $bride
     * @return \Illuminate\Http\Response
     */
    public function edit(Bride $bride)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bride  $bride
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bride $bride)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bride  $bride
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bride $bride)
    {
        //
    }
}
