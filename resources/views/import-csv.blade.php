@extends('layout')

@section('content')
    <div class="container bg-gray-200 w-full max-w-full min-h-full p-16">
        <div id="wrapper">
            <h1 class="text-3xl">IMPORT YOUR CSV FILE HERE</h1>
            <div class="col-md-6 px-16 py-8">
                <form action="{{ route('Keyboard.importCSV') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="csv_file" class="form-control"><br>
                    <button type="submit" class="btn btn-primary btn-sm mt-8 py-4 px-6 bg-blue-300 hover:bg-blue-400 duration-500">IMPORT CSV</button>
                </form>
            </div>
        </div>
    </div>
    <style>
        body {
            overflow: hidden;
        }
    </style>
@endsection
