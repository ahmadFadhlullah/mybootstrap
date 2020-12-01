@extends('../master')
@section('judul')
    Table Simpan Buku
@endsection
@section('konten')

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Kategori Buku</th>
                <th>Pengarang</th>
                <th>Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($all as $item)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $item->book->name}}</td>
                    <td>{{ $item->book->category}}</td>
                    <td>{{ $item->book->pengarang}}</td>
                    <td>{{ $item->peminjam}}</td>
                    <td>{{ $item->tgl_pinjam->format('d/m/Y')}}</td>
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('simpan.destroy',$item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary btn-small"> <i class="fas fa-trash"></i> </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
