@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Simpan') }}</div>

                <div class="card-body">


                    <table class="table table-striped table-hover table-bordered">
                        <thead>

                                <tr>
                                    <th>No</th>
                                    <th>Nama Buku</th>
                                    <th>Kategori Buku</th>
                                    <th>Pengarang</th>
                                    <th>Peminjam</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Aksi</th>
                                </tr>

                        </thead>
                        <tbody>
                            @foreach ($all_simpan as $item)
                                <tr>
                                    <td>{{ ++$no }}</td>
                                    <td>{{ $item->book->name}}</td>
                                    <td>{{ $item->book->category}}</td>
                                    <td>{{ $item->book->pengarang}}</td>
                                    <td>{{ $item->peminjam}}</td>
                                    <td>{{ $item->tgl_pinjam->format('d/m/Y')}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{ route('simpan.destroy',$item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary btn-small"> <i class="fas fa-trash"></i> Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="card mt-2">
                <div class="card-header">
                    <span>Data Cart</span>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Kategori Produk</th>
                                <th>Jumlah Produk </th>
                                <th>Harga</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_cart as $item)
                                <tr>
                                    <td>{{ ++$no }}</td>
                                    <td> {{ $item->product->name }}</td>
                                    <td> {{ $item->product->category }}</td>
                                    <td>{{ $item->jumlah_barang }}</td>
                                    <td>{{ $item->product->price }}</td>
                                    <td>{{ $item->total }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{ route('carts.destroy',$item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary btn-small"> <i class="fas fa-trash"></i> Hapus</button>
                                            </form>
                                            <a href="{{ route('carts.edit',$item->id) }}" class="btn btn-small btn-danger"> <i class="fas fa-edit"></i> Edit</a>
                                        </div>
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
@endsection
