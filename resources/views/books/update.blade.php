@extends('../master')
@section('judul')
Ubah Data Buku
@endsection
@section('konten')
    <form action="{{ route('books.update',$search->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Buku</label>
            <input type="text" name="name" id="name" value="{{ $search->name }}">
        </div>
        <div class="form-group">
            <label for="category">Kategori Buku</label>
            <select name="category" id="category">
                <option value="Comic" {{ $search->category == "Comic" ? "selected":"" }} >Comic</option>
                <option value="Komputer" {{ $search->category == "Komputer" ? "selected":"" }}>Komputer</option>
                <option value="Religi" {{ $search->category == "Religi" ? "selected":"" }}>Religi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pengarang">Pengarang Buku</label>
            <input type="text" name="pengarang" id="pengarang" value="{{ $search->pengarang}}">
        </div>
        <button type="submit" class="btn btn-primary">Update Buku</button>
    </form>
@endsection
