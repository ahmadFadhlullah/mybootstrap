@extends('../master')
@section('judul')
<h3 class="float-left">List Buku</h3>
<a href="/books/add" class="btn btn-primary float-right">Tambah Buku</a>
@endsection
@section('konten')
@if (Session::has('pesan'))
    <div class="alert alert-info">{{ Session::get('pesan') }}</div>
@endif
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Kategori Buku</th>
            <th>Pengarang Buku</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($all as $item)
            <tr>
                <td>{{ ++$nomor }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->pengarang }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('books.detail',$item->id) }}" class="btn btn-warning btn-sm"> Detail</a>
                        <a href="{{ route('books.formPut',$item->id) }}" class="btn btn-primary btn-sm"> Edit</a>
                        <form action="{{ route('books.destroy',$item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
