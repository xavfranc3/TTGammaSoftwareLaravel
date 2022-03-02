@extends('template')

@section('content')
    <br>
    <div class="container h-100">
        <div class="row align-items-center h-100" >
            <div class="col-6 mx-auto">
                <div class="card h-100 text-white bg-primary justify-content-center">
                    <div>
                        <h4 class="card-header">Upload file</h4>
                        <div class="card-body">
                            <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="file">
                                </div>
                                <br>
                                <button class="btn btn-secondary">Upload file</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
