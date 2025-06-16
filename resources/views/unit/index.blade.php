@extends('layouts.app')
@section('title','BHP')
@section('content')
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

    					<!-- Simple Datatable start -->
                        <a href="/units/create"  class="mb-3 float-right text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                            Tambah
                        </a>
                            <div class="pd-20">
                                <h4 class="text-blue h4">Data Satuan</h4>
                            </div>
                            @if (session('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="pb-20">
                                <table class="data-table table stripe hover nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Satuan</th>
                                            <th class="datatable-nosort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach ($units->sortBy('id') as $unit) 
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $unit->name_unit }}</td>
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
                                                    <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                    >
                                                    <a class="dropdown-item" href="{{ route('units.edit', $unit->id) }}"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                    >
                                                    <form id="deleteForm{{$unit->id}}" action="{{ route('units.destroy', $unit->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); if(confirm('Yakin ingin menghapus?')) { document.getElementById('deleteForm{{$unit->id}}').submit(); }">
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
                                                </div>
                        <!-- Simple Datatable End -->
@endsection