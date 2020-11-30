@extends('../master')
@section('judul')
<h3 class="float-left">List Buku</h3>
<a href="/books/add" class="btn btn-primary float-right">Tambah Buku</a>
@endsection
@section('konten')
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Kategori Buku</th>
            <th>Pengarang Buku</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($all as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->pengarang }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
