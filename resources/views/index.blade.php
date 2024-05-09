@extends('layout')
@section('content')
<div class="container bg-gray-200 w-full max-full max-h-full">
    <div class="heading flex">
        <h1 class="title flex-1 text-2xl">KEYBOARDS</h1>
        <a href="#" class="py-3 px-4 bg-green-200">EXPORT</a>
        {{-- <a href="/product-pdf/export" class="py-3 px-4 bg-green-200">EXPORT</a> --}}
    </div>
    <div class="wrapper mx-auto">
        <div class="content-wrapper grid grid-cols-3 gap-4">
            @foreach ($keyboards as $k)
                <div class="p-8 border border-black border-solid my-4 shadow-md bg-slate-200">
                    {{-- <div class="qrcode">
                        
                        {!! QrCode::size(230)->generate(
                            'Product ID: '.$k->id."\n".
                            'Product Name: '.$k->name."\n".
                            'Category ID'.$k->category_id."\n".
                            'Price: PHP'.$k->price) !!}
                    </div> --}}
                    <div>Brand: {{$k->brand}}</div>
                    <div>Model: {{$k->model}}</div>
                    <div>Type: {{$k->type}}</div>
                    <div>Color: {{$k->color}}</div>
                    <div>Price: {{$k->price}}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection