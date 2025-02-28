@extends('template.template')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h4 class="text-center my-4">Upload File</h4>
            </div>
            <a href="/download" class="btn btn-md btn-primary mb-3">Back</a>

            <div class="card rounded">
                <div class="card-body">

                    <form action="/download/upload/store" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">File</label>
                            <div>
                                <input type="text" name="kode" id="" placeholder="Masukkan Kode File" class="mt-2">
                            </div>
                            <div>
                                <input type="file" class="form-control @error('file') is-invalid @enderror mt-3" name="file">
                            </div>

                            <!-- error message untuk image -->
                            @error('file')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary me-3">Upload</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection