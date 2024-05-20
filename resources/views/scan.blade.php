@extends('layout')

@section('content')
    <div class="container bg-gray-200 w-full max-w-full min-h-full p-8">
        <div id="wrapper">
            <h1>QRCode Scanner</h1>
            <div id="reader"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/html5-qrcode@latest/dist/html5-qrcode.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
    <script>
        const config = {
            fps: 30,
            qrbox: 200
        }

        const scanner = new Html5QrcodeScanner("reader", config)

        const success = (data) => {
            alert(data)
        }

        const error = (err) => {
            alert(err)
        }

        scanner.render(success, error);
    </script>
    <style>
        body {
            overflow: hidden;
        }
    </style>
@endsection