@extends('../layouts.app')

@section('content')

    <div class="container">
        @if (Session::has('pesan'))
            <div class="alert alert-info">{{ Session::get('pesan') }}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3>Ubah Data Barang</h3>
                    </div>
                    <div class="card-body">
                            <p>Nama Barang :</p>
                            <p>{{ $search->name}}</p>
                            <p>Kategori Barang :</p>
                            <p>{{ $search->category}}</p>
                            <p>Harga Barang :</p>
                            <p>{{ $search->price}}</p>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('carts.add',$search->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="jumlah">Jumlah Barang :</label>
                                <input type="number" name="jumlah" id="jumlah" class="form-control">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Beli</button>
                        </form>
                        {{-- <a href="{{ route('carts.add',$search->id) }}" class="btn"></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

