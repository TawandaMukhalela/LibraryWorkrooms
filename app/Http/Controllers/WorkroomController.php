<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Workroom;
use Illuminate\Http\Request;
use Auth;

class WorkroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;

        $bookings = Booking::where('user_id', $user)->get();
        $workrooms = Workroom::all();
        return view('workrooms', [
            'workrooms' => $workrooms,
            'bookings' => $bookings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workroom  $workroom
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workroom = Workroom::find($id);
        return view('bookings', [
            'workroom' => $workroom,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workroom  $workroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Workroom $workroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workroom  $workroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workroom $workroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workroom  $workroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workroom $workroom)
    {
        //
    }
}
