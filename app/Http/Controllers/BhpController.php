<?php

namespace App\Http\Controllers;

use App\Models\Bhp;
use App\Models\BhpLabStock;
use App\Models\Unit;
use App\Models\Lab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class BhpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bhps = Bhp::with('unit')->get(); // eager loading untuk memuat halaman unit, menampilkan nama unit
        $pageTitle = "BHP";
        return view('bhp.index', compact('bhps', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = Unit::all();
        return view('bhp.create', compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_bhp' =>'required',
            'minimum_stock' =>'required',
            'unit_id' =>'required',
        ]);
        $input = $request->all();
        //membuat stok jika tidak diisi bernilai default 0
        $input['stock'] = $input['stock'] ?? 0;

        Bhp::create($input);
        return redirect('/bhps')->with('message', 'BHP Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bhp $bhp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bhp $bhp)
    {
        $bhps = Bhp::all();
        $units = Unit::all();
        return view('bhp.edit', compact('bhp', 'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bhp $bhp)
    {
        $request->validate([
            'name_bhp' =>'required',
            'stock' =>'required',
            'minimum_stock' =>'required',
            'unit_id' =>'required',
        ]);
        $input = $request->all();

        $bhp->update($input);
        return redirect('/bhps')->with('message', 'BHP Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bhp $bhp)
    {
        $bhp->delete();
        return redirect('/bhps')->with('message', 'BHP Berhasil Dihapus');
    }

    public function detail(Request $request)
    {
    $data = Bhp::with('unit')->get()->map(function ($bhp) {
        $labs = Lab::get()->map(function ($lab) use ($bhp) {
            $in = DB::table('in_transactions')
                ->where('bhp_id', $bhp->id)
                ->where('lab_id', $lab->id)
                ->sum('qty_intransaction');

            $out = DB::table('out_transactions')
                ->where('bhp_id', $bhp->id)
                ->where('lab_id', $lab->id)
                ->sum('qty_outtransaction');

            $stock = $in - $out;

            return [
                'lab_name' => $lab->name_lab,
                'stock' => $stock,
            ];
        })->filter(fn ($row) => $row['stock'] > 0); // Hanya lab yang punya stok

        return [
            'name_bhp' => $bhp->name_bhp,
            'unit' => $bhp->unit->name_unit ?? '-',
            'labs' => $labs->values(),
        ];
    });

    if ($request->get('export') == 'pdf') {
    $pdf = Pdf::loadView('pdf.detail_bhps', ['data' => $data]);
    return $pdf->stream('Detail BHP.pdf');
    }

    return view('bhp.detail', compact('data'));
    }
}
