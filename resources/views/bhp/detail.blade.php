@extends('layouts.app')
@section('title', 'Detail BHP per Lab')
@section('content')

<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Stok BHP per Lab</h4>
    </div>

    <a href="{{ route('bhps.index') }}" class="mb-3 float-right text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
        Kembali
    </a>

    <a href="{{ route('bhp.detail') }}?export=pdf" class="mb-3 float-right text-white bg-red-400 hover:bg-red-500 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-red-900">
        PDF
    </a>

    <div class="clearfix"></div> <!-- Untuk mengatasi float -->

    @foreach ($data as $bhp)
        <div class="mb-4">
            <h5 class="font-bold mt-3">{{ $bhp['name_bhp'] }}</h5>
            <p><strong>Satuan:</strong> {{ $bhp['unit'] }}</p>

            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lab</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bhp['labs'] as $index => $stock)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $stock['lab_name'] }}</td>
                                <td>{{ $stock['stock'] }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">Tidak ada stok di lab mana pun</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>

@endsection
