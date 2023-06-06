@extends('Layout.layout')

@section('content')
    @include('component.navbar')

    <div class="container">
        <h1>Edit Data Produk</h1>
        <form action="{{ url('dashboard-produk', $produk->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group mb-3">
                <label>Id Produk</label>
                <input type="text" class="form-control" name="id_produk" placeholder="Id Produk"
                    value="{{ $produk->id_produk }}">
            </div>
            <div class="form-group mb-3">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Produk"
                    value="{{ $produk->nama }}">
            </div>
            <div class="form-group mb-3">
                <label>Kategori Produk</label>
                <input type="text" class="form-control" name="kategori" placeholder="Kategori Produk"
                    value="{{ $produk->kategori }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
