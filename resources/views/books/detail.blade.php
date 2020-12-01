@extends('../master')

@section('content')

    <div class="container">
        @if (Session::has('pesan'))
            <div class="alert alert-info">{{ Session::get('pesan')}}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3>Ubah Data Buku</h3>
                    </div>
                    <div class="card-body">
                            <strong>Nama Buku :</strong>
                            <p>{{ $search->name}}</p>
                            <strong>Kategori Buku :</strong>
                            <p>{{ $search->category}}</p>
                            <strong>Pengarang Buku :</strong>
                            <p>{{ $search->pengarang}}</p>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('simpan.add',$search->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="peminjam" value="{{ auth()->user()->name }}">
                            <button type="submit" class="btn btn-primary" name="submit"> <i class="fas fa-save"></i> Simpan Buku</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

