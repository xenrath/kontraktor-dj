<?php

namespace App\Http\Controllers;

use App\MasterCustomer;
use Illuminate\Http\Request;

class MasterCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MasterCustomer $mastercustomer)
    {
        // $mastercustomer = MasterCustomer::all();
        return view('master-customer.index', compact('mastercustomer'));
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
     * @param  \App\MasterCustomer  $masterCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(MasterCustomer $masterCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MasterCustomer  $masterCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterCustomer $masterCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MasterCustomer  $masterCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterCustomer $masterCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MasterCustomer  $masterCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterCustomer $masterCustomer)
    {
        //
    }
}
