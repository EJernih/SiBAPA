<?php

namespace App\Http\Controllers;

use App\Models\Bhp;
use App\Models\BhpRequest;
use App\Models\Unit;
use App\Models\BhpRequestDetail;
use Illuminate\Http\Request;

class BhpRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bhpRequests = BhpRequest::with('details.bhp')->orderBy('request_date', 'desc')->paginate(10);
        return view('request.index', compact('bhpRequests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('request.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'semester' =>'required',
            'academic_year' =>'required',
            'request_by' =>'required',
            'request_date' =>'required|date',
        ]);
        //konfersi format tanggal
        $request_date = \Carbon\Carbon::parse($request->request_date)->format('Y-m-d');

        $input = $request->all();
        BhpRequest::create($input);
        return redirect('/bhpRequests')->with('message', 'Request created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(BhpRequest $bhpRequest)
    {
        //ambil semua data detail_request berdasarkan bhp_request_id
        $detailRequests = BhpRequestDetail::where('bhp_request_id', $bhpRequest->id)->get();
        return view('detail_request.index', compact('detailRequests', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BhpRequest $bhpRequest)
    {
        return view('request.edit', compact('bhpRequest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BhpRequest $bhpRequest)
    {
        $request->validate([
            'semester' =>'required',
            'academic_year' =>'required',
           'request_by' =>'required',
           'request_date' =>'required|date',
        ]);
        //konfersi format tanggal
        $request_date = \Carbon\Carbon::parse($request->request_date)->format('Y-m-d');

        $input = $request->all();
        $bhpRequest->update($input);
        return redirect('/bhpRequests')->with('message', 'Request updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BhpRequest $bhpRequest)
    {
        $bhpRequest->delete();
        return redirect('/bhpRequests')->with('success', 'Request deleted successfully');
    }
}
