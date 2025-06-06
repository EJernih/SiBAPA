<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Lab;
use App\Models\Bhp;
use App\Models\Unit;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with('lab', 'bhp', 'unit')->get();
        return view('transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $labs = Lab::all();
        $bhps = Bhp::all();
        $units = Unit::all();
        return view('transaction.create', compact('labs', 'bhps', 'units'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'transaction_date' => 'required',
            'type' => 'required',
            'lab_id' => 'required',
            'bhp_id' => 'required',
            'qty' => 'required',
            'unit_id' => 'required',
            'description' => 'required'
    ]);

        //validasi pada saat stok keluar
        if ($request->type == 'out') {
            $lab = Lab::find($request->lab_id);
            $bhp = Bhp::find($request->bhp_id);
            $unit = Unit::find($request->unit_id);
            $qty = $request->qty;
            $stok = $bhp->stok_awal - $qty;
            if ($stok < 0) {
                return redirect('/transactions/create')->with('message', 'Stok tidak mencukupi');
            }
            $bhp->stok_awal = $stok;
            $bhp->save();
        }

        $input = $request->all();
        Transaction::create($input);
        return redirect('/transactions')->with('message', 'Transaction created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
}
