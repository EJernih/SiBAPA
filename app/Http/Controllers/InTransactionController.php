<?php

namespace App\Http\Controllers;

use App\Models\InTransaction;
use App\Models\Bhp; 
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $request->validate([
        'intransaction_date' => 'required',
        'prodi' => 'required',
        'bhp_id' => 'required',
        'qty_intransaction' => 'required|integer|min:1',
        'unit_id' => 'required',
        'location' => 'required',
        'description' => 'required'
    ]);
    DB::transaction(function() use($request) {
        //simpan transaksi masuk
        $intransaction = InTransaction::create($request->all());

        //update stok bhp
        $bhp = Bhp::findOrFail($request->bhp_id);
        $bhp->stock += $request->qty_intransaction;
        $bhp->update();
    });
    return redirect('/inTransactions')->with('message', 'In Transaction created successfully.');
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
        $bhps = Bhp::all();
        $units = Unit::all();
        return view('in_transaction.edit', compact('inTransaction', 'bhps', 'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InTransaction $inTransaction)
    {
        $request->validate([
        'intransaction_date' => 'required',
        'prodi' => 'required',
        'bhp_id' => 'required',
        'qty_intransaction' => 'required',
        'unit_id' => 'required',
        'location' => 'required',
        'description' => 'required'
    ]);
    $input = $request->all();
    $inTransaction->update($input);
    return redirect('/inTransactions')->with('message', 'In Transaction updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InTransaction $inTransaction)
    {
        $inTransaction->delete();
        return redirect('/inTransactions')->with('message', 'In Transaction deleted successfully.');
    }
}
