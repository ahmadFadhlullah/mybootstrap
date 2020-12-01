@extends('../master')
@section('judul')

Pesanan List
@endsection
@section('konten')
@if (Session::has('pesan'))
    <div class="alert alert-info">{{ Session::get('pesan') }}</div>
@endif
<table class="table table-bordered table-striped table-hover">
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
        @foreach ($all as $item)
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
                            <button type="submit" class="btn btn-primary btn-small">Hapus</button>
                        </form>
                        <a href="{{ route('carts.edit',$item->id) }}" class="btn btn-small btn-danger">Edit</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
