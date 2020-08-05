@extends('layouts.main')
@section('title', 'Master Customer')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Customer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Customer</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel Data Customer</h3>
                        <a href="{{ route('master-customer.create') }}" class="btn btn-sm btn-primary float-sm-right"><i class="nav-icon fas fa-plus-square pull-right"></i></a>
                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Customer</th>
                                    <th>No. Telepon</th>
                                    <th>Alamat</th>
                                    <th>Kategori</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mastercustomer as $mc)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mc->nama }}</td>
                                    <td>{{ $mc->telepon }}</td>
                                    <td>{{ $mc->alamat }}</td>
                                    <td>{{ $mc->kategori }}</td>
                                    <td>
                                        <a href="{{ route('master-customer.show', $mc->id) }}" class="btn btn-sm btn-info"><i class="nav-icon fas fa-eye"></i></a>
                                        <a href="{{ route('master-customer.edit', $mc->id) }}" class="btn btn-sm btn-success"><i class="nav-icon fas fa-edit"></i></a>
                                        <a href="{{ route('master-customer.destroy', $mc->id) }}" class="btn btn-sm btn-danger"onClick="return confirm('Yakin Mau Di Hapus ?')"><i class="nav-icon fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection