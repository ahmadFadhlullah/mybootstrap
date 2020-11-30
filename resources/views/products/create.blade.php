@extends('../layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left">Tambah Produk</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/products/create') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Produk</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category"> Kategori Produk</label>
                            <select name="category" id="category" class="form-control">
                                <option value="Pakaian">Pakaian</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Mainan">Mainan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
                    <div class="card-footer">

                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
