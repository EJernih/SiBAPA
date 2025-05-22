@extends('layouts.app')
@section('title','detail request')
@section('content')
<!-- Simple Datatable start -->   
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Request BHP {{ $id }}</h4>
    </div>

    @if ($detailRequests->isEmpty())
        <div class="alert alert-warning">
            <p>Detail Request BHP tidak ditemukan</p>
            <a href="{{ route('detailRequests.create', ['bhpRequest_id' => $id]) }}" class="btn btn-primary">Tambah Detail Request BHP</a>
        </div>
    @else
    <table class="data-table table stripe hover nowrap">
        <thead>
            <tr>
                <th>No</th>
                <th class="table-plus datatable-nosort">Nama BHP</th>
                <th>Satuan</th>
                <th>Jumlah Pengajuan</th>
                <th>Keterangan</th>
                <th class="datatable-nosort">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($detailRequests as $index => $detailRequest) 
                    <td class="table-plus">{{ $index+1 }}</td>
                    <td class="table-plus">{{ $detailRequest->bhp->name ?? '' }}</td>
                    <td class="table-plus">{{ $detailRequest->quantity_requested ?? '' }}</td>
                    <td class="table-plus">{{ $bhpRequest->unit->name ?? '' }}</td>
                    <td class="table-plus">{{ $detailRequest->description ?? '' }}</td>
                    <td>
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
                            <a class="dropdown-item" href="{{ route('bhpRequests.show', $bhpRequest->id) }}"
                            ><i class="dw dw-eye"></i> View</a
                            >
                            <a class="dropdown-item" href="{{ route('bhpRequests.edit', $bhpRequest->id) }}"
                            ><i class="dw dw-edit2"></i> Edit</a
                            >
                                <form id="deleteForm{{$bhpRequest->id}}" action="{{ route('bhpRequests.destroy', $bhpRequest->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" class="dropdown-item" onclick="event.preventDefault(); if(confirm('Yakin ingin menghapus?')) { document.getElementById('deleteForm{{$bhpRequest->id}}').submit(); }">
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
    @endif
@endsection