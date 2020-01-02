<?php

namespace App\Http\Controllers\Admin;

use App\invitation_info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvitationInfoController extends Controller
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
        $invitation_info = invitation_info::all();
        return view('dashboard/invitationinfo',['invitation_info' => $invitation_info]);
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
     * @param  \App\invitation_info  $invitation_info
     * @return \Illuminate\Http\Response
     */
    public function show(invitation_info $invitation_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\invitation_info  $invitation_info
     * @return \Illuminate\Http\Response
     */
    public function edit(invitation_info $invitation_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\invitation_info  $invitation_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invitation_info $invitation_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\invitation_info  $invitation_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(invitation_info $invitation_info)
    {
        //
    }
}
