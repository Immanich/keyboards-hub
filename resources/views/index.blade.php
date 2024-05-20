@extends('layout')
    @php
        use SimpleSoftwareIO\QrCode\Facades\QrCode;
    @endphp
@section('content')
<div class="container bg-gray-200 w-full max-w-full h-max min-h-full px-8 py-4">
    <div class="heading flex">
        <h1 class="title flex-1 text-4xl pt-2">KEYBOARDS</h1>
        <a href="{{ route('scan') }}" class="btn btn-outline-secondary my-4 mr-4">
            <svg id="Layer_1" data-name="Layer 1" class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.61 122.88" style="width: 25px; height: 25px;">
                <title>scan</title>
                <path d="M23.38,0h13V11.15h-13a12.22,12.22,0,0,0-8.64,3.57l0,0a12.22,12.22,0,0,0-3.57,8.64V39.32H0V23.38A23.32,23.32,0,0,1,6.86,6.89l0,0A23.31,23.31,0,0,1,23.38,0ZM3.25,54.91H119.36a3.29,3.29,0,0,1,3.25,3.27V64.7A3.29,3.29,0,0,1,119.36,68H3.25A3.28,3.28,0,0,1,0,64.7V58.18a3.27,3.27,0,0,1,3.25-3.27ZM90.57,0h8.66a23.28,23.28,0,0,1,16.49,6.86v0a23.32,23.32,0,0,1,6.87,16.52V39.32H111.46V23.38a12.2,12.2,0,0,0-3.6-8.63v0a12.21,12.21,0,0,0-8.64-3.58H90.57V0Zm32,81.85V99.5a23.46,23.46,0,0,1-23.38,23.38H90.57V111.73h8.66A12.29,12.29,0,0,0,111.46,99.5V81.85Zm-86.23,41h-13A23.32,23.32,0,0,1,6.86,116l-.32-.35A23.28,23.28,0,0,1,0,99.5V81.85H11.15V99.5a12.25,12.25,0,0,0,3.35,8.41l.25.22a12.2,12.2,0,0,0,8.63,3.6h13v11.15Z"/>
            </svg>
        </a>
        
        {{-- <a href="/keyboards/csv" target="_blank" class="py-4 px-5 mx-4 bg-blue-300 hover:bg-blue-400 duration-500">EXPORT CSV</a> --}}
        <a href="/keyboards/import-csv" class="py-4 px-5 bg-blue-300 hover:bg-blue-400 duration-500">IMPORT CSV</a>
        <a href="/keyboards/csv" target="_blank" class="py-4 px-5 mx-2 bg-blue-300 hover:bg-blue-400 duration-500">EXPORT CSV</a>
        <a href="/keyboards/pdf" target="_blank" class="py-4 px-5 bg-green-300 hover:bg-green-400 duration-500">EXPORT PDF</a>

    </div>
    <div class="wrapper mx-auto">
        <div class="content-wrapper grid grid-cols-3 gap-4">
            @foreach ($keyboards as $k)
                <a href="{{ route('Keyboard.detail', ['model' => $k->model]) }}" class="p-8 border border-black border-solid my-4 shadow-md">
                    {{-- <div>
                    </div> --}}
                    <img src="{{ asset($k->image) }}" alt="A picture of {{ $k->brand }} {{ $k->model }}" class="mb-4" style="min-width: 200px; min-height: 100px;">
                    <div>Brand: {{$k->brand}}</div>
                    <div>Model: {{$k->model}}</div>
                    <div>Type: {{$k->type}}</div>
                    {{-- <div>Color: {{$k->color}}</div>
                    <div>Price: ₱{{ number_format($k->price, 2) }}</div> --}}
                    {{-- <div class="qrcode">
                        
                        {!! QrCode::size(200)->encoding('UTF-8')->generate(
                            'Brand: '.$k->brand."\n".   
                            'Model: '.$k->model."\n".   
                            'Type: '.$k->type."\n".
                            'Color: '.$k->color."\n".
                            'Price: ₱'.$k->price) !!}
                    </div> --}}
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection