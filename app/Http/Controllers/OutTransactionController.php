<?php

namespace App\Http\Controllers;

use App\Models\OutTransaction;
use App\Models\Bhp; 
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outTransactions = OutTransaction::all();
        return view('out_transaction.index', compact('outTransactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bhps = Bhp::all();
        $units = Unit::all();
        return view('out_transaction.create', compact('bhps', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'outtransaction_date' => 'required',
        'matakuliah' => 'required',
        'prodi' => 'required',
        'location' => 'required',
        'bhp_id' => 'required',
        'qty_outtransaction' => 'required',
        'unit_id' => 'required',
        'description' => 'required'
    ]);
    $result = DB::transaction(function() use($request) {

        $bhp = Bhp::findOrFail($request->bhp_id);

        //mastiin stok cukup
        if ($bhp->stock < $request->qty_outtransaction) {
            return false;
        }

        //simpan transaksi keluar
        $outtransaction = OutTransaction::create($request->all());

        //update stok bhp
        $bhp->stock -= $request->qty_outtransaction;
        $bhp->save();

        return true;
    });

    if ($result) {
        return redirect('/outTransactions')->with('message', 'Out transaction created successfully and stock updated.');
    } else {
        return redirect('/outTransactions')->with('message', 'Out transaction failed. Stock not enough.');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(OutTransaction $outTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OutTransaction $outTransaction)
    {
        $bhps = Bhp::all();
        $units = Unit::all();
        return view('out_transaction.edit', compact('outTransaction', 'bhps', 'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OutTransaction $outTransaction)
    {
        $request->validate([
        'outtransaction_date' => 'required',
        'matakuliah' => 'required',
        'prodi' => 'required',
        'location' => 'required',
        'bhp_id' => 'required',
        'qty_outtransaction' => 'required',
        'unit_id' => 'required',
        'description' => 'required'
    ]);
    $input = $request->all();
    $outTransaction->update($input);
    return redirect('/outTransactions')->with('message', 'Out Transaction updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OutTransaction $outTransaction)
    {
        $outTransaction->delete();
        return redirect('/outTransactions')->with('message', 'Out Transaction deleted successfully.');
    }
}
