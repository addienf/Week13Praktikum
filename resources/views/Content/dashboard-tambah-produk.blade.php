@extends('Layout.layout')

@section('content')
    @include('component.navbar')

    <div class="container">
        <h1>Tambah Data Produk</h1>
        <td><a href="dashboard-produk" class="btn btn-primary">View</a></td>
        <form action="dashboard-tambah-produk" method="post">
            {{ csrf_field() }}
            <div class="form-group mb-3">
                <label>Id Produk</label>
                <input type="text" class="form-control" name="id_produk" placeholder="Id Produk">
            </div>
            <div class="form-group mb-3">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Produk">
            </div>
            <div class="form-group mb-3">
                <label>Kategori Produk</label>
                {{-- <input type="text" class="form-control" name="kategori" placeholder="Kategori Produk"> --}}
                <select class="form-select" name="id_kategori" id="id_kategori" required>
                    @foreach ($kategori as $ktg)
                        <option value="{{ $ktg->id_kategori }}">{{ $ktg->id_kategori }} {{ $ktg->deskripsi }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
