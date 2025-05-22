<?php

namespace App\Http\Controllers;

use App\Models\InTransaction;
use App\Models\Bhp; 
use App\Models\Unit;
use Illuminate\Http\Request;

class InTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inTransactions = InTransaction::all();
        return view('in_transaction.index', compact('inTransactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bhps = Bhp::all();
        $units = Unit::all();
        return view('in_transaction.create', compact('bhps', 'units'));
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
    public function show(InTransaction $inTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InTransaction $inTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InTransaction $inTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InTransaction $inTransaction)
    {
        //
    }
}
