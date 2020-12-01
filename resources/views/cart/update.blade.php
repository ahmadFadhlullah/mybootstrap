@extends('../layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3>Ubah Data Keranjang</h3>
                    </div>
                    <div class="card-body">
                            <form action="{{ route('carts.update',$search->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Barang </label>
                                    <input type="number" name="jumlah" id="jumlah" value="{{ $search->jumlah_barang }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Barang</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
