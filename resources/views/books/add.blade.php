@extends('../master')

@section('judul')
    Tambah Buku
@endsection

@section('konten')

<form action="{{ url('/books/add') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Nama Buku</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="category">Kategori Buku</label>
        <select name="category" id="category" class="form-control">
            <option value="Comic">Komik</option>
            <option value="Komputer">Komputer</option>
            <option value="Religi">Religi</option>
        </select>
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang Buku</label>
        <input type="text" name="pengarang" id="pengarang" class="form-control">
    </div>
    <button class="btn btn-success btn-block" name="submit" type="submit">Tambah Buku</button>
</form>

@endsection
