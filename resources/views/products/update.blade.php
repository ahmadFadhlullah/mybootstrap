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
                            <form action="{{ url('/products/'.$search->id.'/edit') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Nama Barang</label>
                                    <input type="text" name="name" id="name" value="{{ $search->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="category">Kategori Barang</label>
                                    <select name="category" id="category">
                                        <option value="Pakaian" {{ $search->category == "Pakaian" ? "selected":"" }} >Pakaian</option>
                                        <option value="Makanan" {{ $search->category == "Makanan" ? "selected":"" }}>Makanan</option>
                                        <option value="Mainan" {{ $search->category == "Mainan" ? "selected":"" }}>Mainan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Harga Barang</label>
                                    <input type="number" name="price" id="price" value="{{ $search->price}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Barang</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
