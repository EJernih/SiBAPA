@extends('layouts.app')
@section('title','in transaction')
@section('content')
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
<!-- Simple Datatable start -->

<a href="/inTransactions/create"  class="mb-3 float-right text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
    Tambah
</a>    

    <div class="pd-20">
        <h4 class="text-blue h4">Transaksi Masuk</h4>
    </div>

    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="pb-20" style="overflow-x:auto;">
        <table class="data-table table stripe hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th style="min-width: 190px" class="table-plus datatable-nosort">Tanggal Transaksi</th>
                    <th style="min-width: 190px" class="table-plus datatable-nosort">Lokasi</th>
                    <th style="min-width: 190px">Nama BHP</th>
                    <th  style="min-width: 190px">Jumlah Barang Masuk</th>
                    <th style="min-width: 200px">Keterangan</th>
                    <th class="datatable-nosort" style="min-width: 120px">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($inTransactions->sortBy('id') as $inTransaction) 
                <tr>
                    <td class="table-plus">{{ $i++ }}</td>
                    <td class="table-plus">{{ $inTransaction->intransaction_date }}</td>
                    <td class="table-plus">{{ $inTransaction->lab->name_lab ?? '' }} - {{ $inTransaction->lab->prodi->name ?? '' }}</td>
                    <td>{{ $inTransaction->bhp->name_bhp ?? '' }}</td>
                    <td>{{ $inTransaction->qty_intransaction }}</td>
                    <td>{{ Str::limit($inTransaction->description, 50) }}</td>
                    <td style="white-space: nowrap">
                        <div class="dropdown">
                            <a
                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                                >
                                <i class="dw dw-more"></i>
                            </a>
                            <div
                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                            >
                            <a class="dropdown-item" href="{{ route('inTransactions.show', $inTransaction->id) }}"
                            ><i class="dw dw-eye"></i> View</a
                            >
                            <a class="dropdown-item" href="{{ route('inTransactions.edit', $inTransaction->id) }}"
                            ><i class="dw dw-edit2"></i> Edit</a
                            >
                                <form id="deleteForm{{$inTransaction->id}}" action="{{ route('inTransactions.destroy', $inTransaction->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" class="dropdown-item" onclick="event.preventDefault(); if(confirm('Yakin ingin menghapus?')) { document.getElementById('deleteForm{{$inTransaction->id}}').submit(); }">
                                        <i class="dw dw-delete-3"></i> Delete
                                    </a>
                                </form>
                            
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
 
<!-- Simple Datatable End -->
@endsection