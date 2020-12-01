@extends('../layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10">
                <div class="card">
                    <div class="card-header">@yield('judul')</div>
                    <div class="card-body">@yield('konten')</div>
                </div>
            </div>
        </div>
    </div>

@endsection
