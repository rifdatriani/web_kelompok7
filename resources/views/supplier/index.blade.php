@extends('layouts.main')
@section('content')

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Supplier
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Alamat</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Alamat</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Logo</th>
                                            <th>Action</th>
                                    </tfoot>
                                    <tbody>
                                        @foreach ( $supplier as $k )
                                         <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $k->nama }}</td>
                                            <td>{{ $k->jenis }}</td>
                                            <td>{{ $k->alamat }}</td>
                                            <td>{{ $k->harga_jual }}</td>
                                            <td>{{ $k->harga_beli }}</td>
                                            <td>
                                                @empty($k->logosupplier)
                                                <img src="{{url('image/nophoto.jpg')}}"
                                                    alt="project-image" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                                                @else
                                                <img src="{{url('image')}}/{{$k->logosupplier}}"
                                                    alt="project-image" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                                                @endempty
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-secondary">show</a>
                                                <a href=""" class="btn btn-sm btn-warning">edit</a>
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$k->id}}">
                                                    hapus
                                                </button>
                                             </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endsection