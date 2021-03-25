@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 bg-white">
            <div class="card">
                <div class="card-header bg-primary">
                    <a href='{{ url('/home') }}'>
                        <button class="btn btn-success float-left mr-2">
                            Back
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <form action="home/upload/data" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="/uploadData">Upload File</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                        <input type="submit" class="btn btn-primary float-right" value="Submit Data">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection