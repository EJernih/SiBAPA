<?php

namespace App\Http\Controllers;

use App\Models\BhpRequestDetail;
use App\Models\BhpRequest;
use App\Models\Bhp; 
use App\Models\Unit;
use Illuminate\Http\Request;

class BhpRequestDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailRequests = BhpRequestDetail::with(['bhpRequest','bhp', 'unit'])->get();
        return view('detail_request.index', compact('detailRequests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bhpRequests = BhpRequest::all();
        $bhps = Bhp::all();
        $units = Unit::all();
        return view('detail_request.create', compact('bhpRequests', 'bhps', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bhp_request_id' => 'required',
            'bhp_id' => 'required',
            'unit_id' => 'required',
            'quantity_requested' => 'required',
            'description' => 'required',
        ]);
        // dd($request->all());
        $input = $request->all();
        BhpRequestDetail::create($input);
        return redirect('/detailRequests')->with('message', 'Detail Request Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($bhpRequestId)
    {
        $detailRequests = BhpRequestDetail::with(['bhpRequest','bhp', 'unit'])->where('bhp_request_id', $bhpRequestId)->get();
        return view('detail_request.show', compact('detailRequests'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BhpRequestDetail $detailRequest)
    {
        $bhpRequests = BhpRequest::all();
        $bhps = Bhp::all();
        $units = Unit::all();
        return view('detail_request.edit', compact('detailRequest', 'bhpRequests', 'bhps', 'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BhpRequestDetail $detailRequest)
    {
        $request->validate([
            'bhp_request_id' => 'required',
            'bhp_id' => 'required',
            'unit_id' => 'required',
            'quantity_requested' => 'required',
            'description' => 'required',
        ]);
        $input = $request->all();
        $detailRequest->update($input);
        return redirect('/detailRequests')->with('message', 'Detail Request Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BhpRequestDetail $detailRequest)
    {
        $detailRequest->delete();
        return redirect('/detailRequests')->with('message', 'Detail Request Deleted Successfully');
    }
}
