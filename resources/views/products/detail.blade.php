@extends('../layouts.app')

@section('content')

    <div class="container">
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
                </div>
            </div>
        </div>
    </div>

@endsection

