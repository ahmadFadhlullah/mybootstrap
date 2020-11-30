@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-left">List Produk</h3>
                        <a href="/products/create" class="btn btn-primary float-right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori Produk</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ ++$no }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ number_format($product->price,0,',','.') }}</td>
                                        <td>

                                            <div class="btn-group">
                                                <form action="{{ url('/products/'.$product->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary btn-small">Hapus</button>
                                                </form>
                                                <a href="{{ url('/products/'.$product->id.'/edit') }}" class="btn btn-small btn-warning">Edit</a>
                                                <a href="{{ url('/products/'.$product->id.'/detail') }}" class="btn btn-small btn-danger">Detail</a>
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
